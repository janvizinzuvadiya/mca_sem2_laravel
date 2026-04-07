<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = DB::table('users')
            ->join('marks','marks.user_id','=','users.id')
            ->join('classes','marks.class_id','=','classes.id')
            ->join('exams','marks.exam_id','=','exams.id')
            ->join('subjects','marks.subject_id','=','subjects.id')

            ->select(
                'users.name',
                'classes.class_name',
                'classes.division',
                'subjects.subject_name',
                'exams.exam_name',
                'marks.marks'
            )

            ->get();

        return view('index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class = DB::table('classes')->get();
        return view('Student.users.add_user', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',   
            'mobile' => 'required|numeric|digits:10',
            'class_id' => 'required',
        ]);

        $flag = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'class_id' => $request->class_id,
        ]);

        if( $flag )
        {
            return redirect()->route('allusers');
        }
        else    
        {
            return redirect()->route('register');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $user= DB::table('users')
        ->join('classes','classes.id','=','users.class_id')
        ->select(
            'class_name',
            'division',
            'name',
            'email',
            'mobile'
        )
        ->get();

        return view('Student.users.user_details', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
