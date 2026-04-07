@extends('template')
@section('user_details')

    <div class="page-header">
        <h3 class="page-title"> Student Details </h3>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">user Details</li>
        </ol>
        </nav>
    </div>
            
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">  
                <div class="card-body">
                <h4 class="card-title">All Students</h4>
                <p class="card-description"> Add class <code>.table</code>
                </p>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Sr no.</th>
                        <th>Name</th>   
                        <th>Email</th>  
                        <th>Mobile</th>
                        <th>Class_name</th>
                        <th>Division</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($user as $rec)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $rec->name }}</td>
                        <td>{{ $rec->email }}</td>
                        <td>{{ $rec->mobile }}</td>
                        <td>{{ $rec->class_name }}</td>
                        <td>{{ $rec->division }}</td>
                        @php
                            $i++;
                        @endphp
                        
                    </tr>
                    @endforeach
                       
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

   

        
@endsection 