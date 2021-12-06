<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view ('class.index');
    }
    public function create()
    {
        return view ('class.create');
    }
}
