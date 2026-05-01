<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $stud = Student::all();
        return view('home',compact('stud'));
    }

   
    public function create()
    {
        return view('reg');
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'enrollment_no' => 'required|unique:students',
            'full_name' => 'required',
            'email' => 'required|email|unique:students',
            'course' => 'required',
            'joining_date' => 'required|date'
        ],[
            'enrollment_no.required' => 'Enrollment Number is required',
            'enrollment_no.unique' => 'Enrollment Number must be unique',
            'full_name.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'email.unique' => 'Email must be unique',
            'course.required' => 'Course is required',
            'joining_date.required' => 'Joining Date is required',
            'joining_date.date' => 'Joining Date must be a valid date'
        ]);

        $result = Student::create($data);

        if($result)
        {
            return redirect()->route('stud.home');
        }
        else
        {
            return 'error Failed to Register Student';
        }

    }

   
    public function show(Student $student)
    {
        
    }

  
    public function edit(Student $student, $id)
    {
        $stud = $student;
        $stud = Student::findOrFail($id);
        return view('edit',compact('stud'));
        
    }


    public function update(Request $request, $id)
    {
           $data = $request->validate([
            'enrollment_no' => 'required|unique:students,enrollment_no,'.$id,
            'full_name' => 'required',
            'email' => 'required|email|unique:students,email,'.$id,
            'course' => 'required',
            'joining_date' => 'required|date'
        ],[
            'enrollment_no.required' => 'Enrollment Number is required',
            'enrollment_no.unique' => 'Enrollment Number must be unique',
            'full_name.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'email.unique' => 'Email must be unique',
            'course.required' => 'Course is required',
            'joining_date.required' => 'Joining Date is required',
            'joining_date.date' => 'Joining Date must be a valid date'
        ]);

        $temp= Student::find($id);
        $result = $temp->update($data);
        if($result)
        {
            return redirect()->route('stud.home');
        }
        else
        {
            return 'error Failed to Update Student';
        }
    }


    public function destroy(Student $student)
    {
        $result = Student::find($student->id)->delete();
        if($result)
        {
            return redirect()->route('stud.home');
        }
        else
        {
            return 'error Failed to Delete Student';
        }
    }
}
