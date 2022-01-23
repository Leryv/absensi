<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    // index
    public function index(){
        $classes = Clas::latest()->paginate(6);
        return view('class.index', compact('classes'));
    }

    public function create(){
        return view('class.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'walas'     => 'required',
            'jurusan'   => 'required',
            'jumlah'    => 'required',
        ]);

        Clas::create([
            'name'      => $request->name,
            'walas'     => $request->walas,
            'jurusan'   => $request->jurusan,
            'jumlah'    => $request->jumlah,
        ]);

        return redirect()->back();
    }



    public function edit($id)
    {
        $class = Clas::all()->find($id);
//        $class = Clas::findOrFail(1);

        return view('class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $class = Clas::findOrFail($id);

        $class->update($request->all());

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $clas = Clas::findOrFail($id);

        $clas->delete($request->all());

        return redirect()->back();
    }
}
