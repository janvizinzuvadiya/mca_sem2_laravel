<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $classes = DB::table('classes')->get();
        $exams = DB::table('exams')->get();
        $marks = null; 

        if ($request->filled('class_subject_id')) 
        {
           
            $ids = explode(',', $request->class_subject_id);
            $class_id = $ids[0];
            $subject_id = $ids[1];  

        
            $marks = DB::table('marks')
                ->join('users', 'marks.user_id', '=', 'users.id')
                ->join('subjects', 'marks.subject_id', '=', 'subjects.id')
                ->where('marks.class_id', $class_id)
                ->where('marks.subject_id', $subject_id)
                ->select('users.name as student_name', 'subjects.subject_name', 'marks.cia1', 'marks.cia2', 'marks.see', 'marks.total_marks')
                ->get();
        }

        return view('Student.marks.mark_details', compact('classes', 'exams', 'marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $class = DB::table('classes')->get();

        $user = DB::table('users')
        ->join('classes','classes.id','=','users.class_id')
        ->where('users.class_id',$request->class_id)
        ->get();

        $class_sub = DB::table('class_subject')
        ->join('classes','classes.id','=','class_subject.class_id')
        ->join('subjects','subjects.id','=','class_subject.subject_id')
        ->where ('class_subject.class_id', $request->class_id)
        ->get();
        return view('Student.marks.add_marks',compact('class','user','class_sub'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $class = DB::table('classes')->get(); 

        $class_sub = DB::table('class_subject')
        ->join('subjects','subjects.id','=','class_subject.subject_id')
        ->join('classes','classes.id','=','class_subject.class_id')
        ->select(
            'classes.class_name',
            'classes.division',
            'subjects.subject_name',
            'class_subject.id',
            'class_subject.class_id',
            'class_subject.subject_id'
        )
        ->get();

        $marks= collect()   ;

        if($request->filled('class_subject_id'))
        {
            $ids = explode(',', $request->class_subject_id);
            $class_id = $ids[0];
            $subject_id = $ids[1];

            $marks = DB::table('marks')
                ->join('users', 'marks.user_id', '=', 'users.id')
                ->join('class_subject','class_subject.id' ,'=','marks.class_subject_id')
                ->join('subjects','subjects.id','=','class_subject.subject_id')
                ->join('classes','classes.id','=','class_subject.class_id')
                ->where('users.class_id', $class_id)
                ->where('subjects.id', $subject_id)
                ->select('users.name as student_name', 
                        'classes.class_name', 'classes.division',
                        'subjects.subject_name', 
                        'marks.cia1', 'marks.cia2', 'marks.see')
                ->get();
        }    

        return view('Student.marks.mark_details',compact('class','class_sub','marks'));

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
