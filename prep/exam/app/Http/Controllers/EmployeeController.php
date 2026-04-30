<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $empl = Employee::all();
        return view('home',compact('empl'));

        // $employee = Employee::all();
        // return view('home',compact('employee'));
    }

    public function create()
    {
        return view('reg');
    }


    public function store(Request $request)   
    {
        $data = $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email|unique:employees,email',
            'phone'=>'required|numeric|digits:10',
            'designation'=>'required',
            'salary'=>'required|numeric|min:0'
        ],[
            'name.required'=> 'Please enter your name',
            'name.min'=> 'Name must contain at least 3 characters',
            'email.required'=> 'Please enter your email',
            'email.unique'=> 'Email already exists',
            'phone.required'=> 'Please enter your phone',
            'phone.numeric'=> 'Phone number must contain only numbers',
            'phone.digits'=> 'Phone number must contain exactly 10 digits',
            'designation.required'=> 'Please enter your designation',
            'salary.required'=> 'Please enter your salary',
            'salary.numeric'=> 'Please enter a valid salary'
        ]);

        $result = Employee::create($data);

        if($result){
            return redirect()->route('emp.home');
        }
        else{
            return 'Something went wrong';
        }




        
    }

    
    public function show(string $id)
    {
        

      



    }


    public function edit(string $id)
    {
        $emp = Employee::findOrFail($id);
        return view('edit',compact('emp'));
    }

   
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email|unique:employees,email,'.$id,
            'phone'=>'required|digits:10',
            'designation'=>'required',
            'salary'=>'required|numeric|min:0'

        ],[
            'name.required'=>'Please enter your name',
            'email.required'=>'Please enter your email',
            'email.unique'=>'Email already exists',
            'phone.required'=>'Please enter your phone',
            'designation.required'=>'Please enter your designation',
            'salary.required'=>'Please enter your salary',

            'name.min'=>'Name must contain at least 3 characters',
            'email.email'=>'Please enter a valid email',
            'phone.digits'=>'Phone number must contain exactly 10 digits',
            'phone.numeric'=>'Phone number must contain only numbers',
            'salary.numeric'=>'Salary must be a valid number',
            'salary.min'=>'Salary must be greater than or equal to 0'
        ]);


        $emp = Employee::find($id);
        $emp->update($data);

        return redirect()->route('emp.home');

    }

    
    public function destroy(string $id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect()->route('emp.home');
    }
}
