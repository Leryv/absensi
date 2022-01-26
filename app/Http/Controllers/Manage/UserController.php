<?php

namespace App\Http\Controllers\Manage;

use App\Role;
//use http\Client\Curl\User;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(8);
        return view('manage.user.index',
        compact('users'));
    }
    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('manage.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name'       => 'bail|required|min:2',
            'email'      => 'required',
            'address'    => 'required',
            'gender'     => 'required',
            'phone'      => 'required',
            'religion'   => 'required',
            'password'   => 'required|min:6',
            'roles'      => 'required|min:1',
        ]);


        $request->merge(
            ['password' => encrypt(
                $request->get('password'))
            ]
        );
        if ($user = User::create($request->except('roles'))){
            $user->syncRoles($request->get('roles'));
            flash()->success('Pengguna berhasil ditambahkan');
        } else{
            flash()->error('Tidak dapat menambahkan pengguna');
        }

        return Redirect::back();
        }

        // edit
        public function edit($id)
        {
            $user = User ::findOrFail($id);
            $roles = Role::pluck('name', 'id');

            return view('manage.user.edit',
            compact('user','roles'));
        }

        // update
        public function update(Request $request, $id)
        {
            $user = User::findOrFail($id);
            $user -> fill($request->except('roles'));

            $user -> save();
            $user -> syncRoles($request->get('roles'));
            $user -> update($request->all());

            return redirect()->back();
        }

        // destroy
        public function destroy(Request $request, $id)
        {
            $user = User::findOrFail($id);

            $user->delete($request->all());

            return redirect()->back();
        }

}
