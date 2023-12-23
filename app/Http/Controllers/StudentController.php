<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index() : View {
        $title = 'Students';
        $students = Student::all();
        return view('pages.student.index', compact('title', 'students'));
    }

    public function create() : View {
        $title = 'New Student';
        return view('pages.student.create', compact('title'));
    }

    public function store(CreateStudentRequest $request) {
        return redirect()->route('student.index');
    }
}
