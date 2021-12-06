<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('lessons.index');
    }

    public function create()
    {
        return view('lessons.create');
    }
}
