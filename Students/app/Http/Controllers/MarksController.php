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
    public function create()
    {
        //
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
    public function show()
    {
        //
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
