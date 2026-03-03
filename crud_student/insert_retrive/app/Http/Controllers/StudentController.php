<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function allStudents()
    {
        $students = DB::table("student1")->get();
        return view('student.list', compact('students'));
    }
    public function addStudents()
    {
        return view('student.reg');
    }
    public function addmsg(Request $request)
    {
        $flag = DB::table('student1')->insert([
            'name' => $request->name,
            'enrollment'=> $request->enrollment,
            'email'=> $request->email,
            'mobile'=> $request->mobile
        ]);

        if( $flag )
        {
            return redirect('/all');
        }
        else    
        {
            return redirect('/add');
        }
    }
}
