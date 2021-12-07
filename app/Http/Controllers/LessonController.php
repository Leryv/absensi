<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use Illuminate\Foundation\Console\Presets\React;
class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::latest()->paginate(6);
        // $lessons = Lesson::all();
        return view('lessons.index', compact('lessons'));
    }
    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'teacher'       => 'required',
            'class'         => 'required',
            'jam_masuk'     => 'required',
            'jam_selesai'   => 'required',
        ]);

        $lessons = Lesson::create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('lessons.edit', compact('lessons'));
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        $lesson->update($request->all());

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        $lesson->delete($request->all());

        return redirect()->back();
    }}
