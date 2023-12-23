<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests\DeleteTeacherRequest;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $title = 'Teachers';
        $teachers = Teacher::all();
        return view('pages.teacher.index', compact('teachers', 'title'));
    }

    public function create(){
        $title = 'Create Teacher';
        return view('pages.teacher.create', compact('title'));
    }

    public function store(CreateTeacherRequest $request)
    {
        Teacher::create($request->validated());

        return redirect()->route('teacher.index');
    }

    public function delete(DeleteTeacherRequest $request){
        Teacher::destroy($request->input('id'));

        return response()->isOk();
    }
}
