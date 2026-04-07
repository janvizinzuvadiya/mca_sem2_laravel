@extends('template')
@section('add_user')

    <div class="page-header">
        <h3 class="page-title"> Register Student </h3>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">add_user</li>
        </ol>
        </nav>  
    </div>
    <div class="row p-5">

        <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Add Information</h4>
            <p class="card-description"> Record will be inserted </p>
            <form class="forms-sample" action="{{ route('store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Full Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="example@gmail.com">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="mobile" id="exampleInputMobile" placeholder="Mobile number">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Class</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="class_id">
                           @foreach($class as $rec)
                            <option value="{{ $rec->id }}">{{ $rec->class_name }} - {{ $rec->division }}</option>
                           @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row justify-content-center m-4">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark ">Cancel</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
        
@endsection