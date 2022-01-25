<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Console\Presets\React;
class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::latest()->paginate(6);
        return view('manage.lessons.index', compact('lessons'));
            // $lessons = Lesson::all();
    }

    public function create()
    {
        return view('manage.lessons.create');
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

        Lesson::create($request->all());
        return redirect()->back();
    }

    public function edit($id)

    {
        $lesson = Lesson::findOrFail($id);

        return view('manage.lessons.edit', compact('lesson'));
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
