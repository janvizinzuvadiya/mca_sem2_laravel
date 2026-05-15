<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    
    public function index()
    {
        $fcl = Faculty::all();
        return view('home',compact('fcl'));
    }

    public function create()
    {
        return view('reg');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone'=> 'required|numeric|digits:10|unique:faculties,phone',
            'designation'=>'required',
            'salary'=>'required|numeric'
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.email' => 'Enter valid email',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone must be numeric',
            'phone.digits' => 'Phone must be 10 digits',
            'designation.required' => 'Designation is required',
            'salary.required' => 'Salary is required',
            'salary.numeric' => 'Salary must be numeric'
        ]);

        Faculty::create($data);
        return redirect()->route('fcl.home');
                
    }

    public function show(Faculty $faculty)
    {
        
    }

    public function edit(Faculty $faculty,string $id)
    {
        $fcl = Faculty::find($id);
        return view('edit',compact('fcl'));
    }
 
    public function update(Request $request, string $id)
    {
        $data = $request->validate([    
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone'=> 'required|numeric|digits:10|unique:faculties,phone,'.$id,
            'designation'=>'required',
            'salary'=>'required|numeric'
        ],[ 
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.email' => 'Enter valid email',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone must be numeric',
            'phone.digits' => 'Phone must be 10 digits',
            'designation.required' => 'Designation is required',
            'salary.required' => 'Salary is required',
            'salary.numeric' => 'Salary must be numeric'
        ]);
        $rec = Faculty::find($id);
        $rec->update($data);

        return redirect()->route('fcl.home');

    }

    public function destroy(string $id)
    {
        $rec = Faculty::find($id);
        $rec->delete();
        return redirect()->route('fcl.home');
    }
}
