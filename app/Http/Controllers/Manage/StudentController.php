<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class StudentController extends Controller
{
    public function index(){
        $users = User::role('siswa')->get();
        return view('manage.user.student.index',compact('users'));
    }

}
