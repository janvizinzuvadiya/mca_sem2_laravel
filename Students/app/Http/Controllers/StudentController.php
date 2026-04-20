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
        ->join('subjects','subjects.id','=','class_subject.subject_id')
        ->join('classes','classes.id','=','users.class_id')

        ->select(
            'users.name',
            'classes.class_name',
            'classes.division',
            'subjects.subject_name',
            'marks.cia1',
            'marks.cia2',
            'marks.see'       
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
            return redirect()->route('allusers','all');
        }
        else    
        {
            return redirect()->route('register');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $class = DB::table('classes')->get();

        // Build the base query
        $query = DB::table('users')
            ->join('classes', 'classes.id', '=', 'users.class_id')
            ->select(
                'users.id as user_id',
                'users.name',
                'users.email',
                'users.mobile',
                'users.class_id', 
                'classes.class_name',
                'classes.division'
            );

        // If class_id is provided in the request, filter the results
        if ($request->filled('class_id')) {
            $query->where('users.class_id', $request->class_id);
        }

        $result = $query->get();

        return view('Student.users.user_details', compact('result','class'));
    }

    
    /*
      Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        $class = DB::table('classes')->get();
       
        $result = DB::table('users')
        ->join('classes','classes.id','=','users.class_id')
        ->select(
            'users.id',
            'users.name',
            'users.email',  
            'users.mobile',
            'users.password',
            'classes.id as class_id',
            'classes.class_name',
            'classes.division'  
        )
        ->where('users.id',$id)
        ->first();

        return view('Student.users.edit_user',compact('result','class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $id; 
        $request->validate(
            [
                'name'=> 'required',
                'email' => 'required|email',
                'mobile' => 'required|numeric|digits:10',
                'password' => 'required',
                'class_id'=> 'required'
            ]
        );

        $data =     
        [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'class_id'=> $request->class_id
        ];
        if($request->filled('password'))
        {
            $data['password'] = Hash::make($request->password);
        }

        $flag = DB::table('users')
        ->where('id', $id)
        ->update($data);

       // We check if the update was successful OR if no changes were made (both are technically 'success')
        if ($flag !== false) { 
            return redirect()->route('allusers', $request->class_id)->with('success', 'Profile Updated Successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
        }
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')
        ->where('id',$id)
        ->delete();

        return redirect()->route('allusers',"all");
    }
}
