<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function list () {
        $student = DB::table('student')->get();
        return view('student.stud_list',compact('student'));
    }

    public function add () {
        return view('student.stud_add');
    }

    public function store(Request $request  ) {   

        $flag = DB::table('student')->insert(
        [
            'name' => $request->name,
            'email' => $request->email,
            'enrollment' => $request->enrollment,
            'mobile' => $request->email,
            'city' => $request->city
        ]
    );

        if($flag)
        {
            return redirect('/students');
        }
        else
        {
            return "Error in Storing Data";
        }

        // return $req->all();
    }


}
