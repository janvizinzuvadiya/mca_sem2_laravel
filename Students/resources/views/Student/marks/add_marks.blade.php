@extends('template')
@section('add_mark')

    <div class="page-header">
        <h3 class="page-title">Register Student Scores </h3>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Marks</a></li>
            <li class="breadcrumb-item active" aria-current="page">add_marks</li>
        </ol>
        </nav>  
    </div>
    <div class="row p-5">

        <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Add Scores</h4> 
            <p class="card-description"> Record will be inserted </p>
            <form action="{{ route('add_mark')}}" class="container" method="GET">
                <div class="row">
                    <div class="col-md-3">
                      <div class="dropdown">
                        <select class="btn btn-info text-white" name="class_id">
                            <option value="">Select Class</option>
                            
                              @foreach($class as $cs)                                                          
                                <option value="{{ $cs->id }}">
                                    {{ $cs->class_name }} - {{ $cs->division }}  
                                </option>
                              @endforeach

                        </select>
                      </div>
                    </div>

                    <div class="col-md-2">  
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-dark btn-block">
                                <i class="mdi mdi-pencil"></i> Enter Marks
                            </button>
                        </div>
                    </div>                                
                </div>
            </form>
            <form class="forms-sample" action="{{ route('score_entry') }}"  method="post">
                @csrf

                @if($class_id_entered)
                    <h4 class="card-title">
                        {{ $class_id_entered->class_name }}-{{ $class_id_entered->division }} 
                    </h4>
                    <input type="hidden" name="class_id" value="{{ $class_id_entered->id }}">
                @endif 

                 <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                       <select class="btn btn-primary text-white" name="user_id">
                            <option value="">Select Student</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">
                                    {{ $user->name}}
                                </option>
                            @endforeach
                       </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="subjectname" class="col-sm-3 col-form-label">Subject</label>
                    <div class="col-sm-9">
                        <select class="btn btn-warning text-white" name="sname">
                            <option value = "">Choose Subject</option>

                            @foreach($class_sub as $sub)
                                <option value= "{{ $sub->subject_id }}">
                                    {{ $sub->subject_name}}
                                </option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cia1" class="col-sm-3 col-form-label">Enter Marks:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="cia1" id="cia1" placeholder="CIA 1">
                    </div>
               
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="cia2" id="cia2" placeholder="CIA 2">
                    </div>    
               
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="see" id="see" placeholder="SEE">
                    </div>
                </div>


                <div class="form-group row justify-content-center m-4">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-danger ">Cancel</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
        
@endsection