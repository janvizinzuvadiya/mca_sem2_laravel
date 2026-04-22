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

        $users = collect();
        $class_sub = collect();
        $class_id_entered = null;

        if($request->filled('class_id'))
        {
            $class_id_entered = DB::table('classes')
            ->where('classes.id',$request->class_id)
            ->select('classes.class_name','classes.division','classes.id')
            ->first();

            $users = DB::table('users')
            ->where('users.class_id',$request->class_id)
            ->get();

            $class_sub = DB::table('class_subject')
            ->join('classes','classes.id','=','class_subject.class_id')
            ->join('subjects','subjects.id','=','class_subject.subject_id')
            ->where ('class_subject.class_id', $request->class_id)
            ->select(
                'subjects.subject_name',
                'class_subject.id',
                'class_subject.class_id',
                'class_subject.subject_id'
            )
            ->get();
        }

       
        return view('Student.marks.add_marks',compact('class','users','class_sub','class_id_entered'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $cid = $request->class_id;
        $sid = $request->sname;
        $uid = $request->user_id;

        $m1 = $request->cia1;
        $m2 = $request->cia2;
        $m3 = $request->see;

        $cbid = DB::table('class_subject')
        ->where('class_id',$cid)
        ->where('subject_id',$sid)
        ->first();

        $flag = DB::table('marks')
        ->insert([
            'class_subject_id' => $cbid->id,
            'user_id' => $uid,
            'cia1' => $m1,
            'cia2' => $m2,
            'see' => $m3,
        ]);

        if($flag)
        {
            $combined_id = $request->class_id . ',' . $request->sname;
            return redirect()->route('allmarks', ['class_subject_id' => $combined_id]);
        }
        else
        {
            return "failed!!";
        }



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

        if($request->filled('class_subject_id') )
        {
            // return $request->class_subject_id;
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
