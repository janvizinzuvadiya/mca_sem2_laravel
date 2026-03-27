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
        $request->validate([
            'name' => 'required',
            'enrollment' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);


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

    public function updateStudents(int $id)
    {
        // return $id;
        $student = DB::table("student1")->where('id', $id)->first();
        return view('student.edit', compact('student'));
    }

    public function updatemsg(Request $request, int $id)
    {
        $flag = DB::table('student1')->where('id',$id)->update([
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
            return redirect('/edit/'.$id);
        }
    }

    public function deleteStudents(int $id)
    {
        // return $id; 
        
        $flag = DB::table('student1')->where('id', $id)->delete();
        return redirect('/all');
    }

}
