<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        return view('student.index');
    }

    public function register()
    {
        return view('student.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'enroll' => 'required|numeric|digits:6',
            'email' => 'required|email',
            'mobile' => 'required|numeric|digits:10',
            'city' => 'required',
        ]);

        $studentData = $request->all();

       return view('student.index', ['studentData' => $studentData]);
    }

}
