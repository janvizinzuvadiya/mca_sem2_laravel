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
                <div class="row">
                    <h4 class="card-title col-sm-2">All Students</h4>
                    <div class="col-sm-4 d-flex">

                       <form action="{{ route('allusers', ['id' => 0]) }}" method="GET" class="col-sm-6 d-flex">
                           <div class="form-group">
                                <select class="form-control" name="class_id" id="class_select">
                                    <option value="" selected disabled><i class="mdi mdi-filter-variant"></i> Filter by Class</option>
                                    @foreach($class as $rec) 
                                        <option value="{{ $rec->id }}" {{ request('class_id') == $rec->id ? 'selected' : '' }}>
                                            {{ $rec->class_name }} - {{ $rec->division }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" name="search" class="btn btn-primary px-3 py-1 mx-3">Search</button>
                        </form>
                        
                    </div>
                    <a href="{{ route('register') }}" class="btn btn-info p-3" style="margin-left: 80%;">Add User</a>
                </div>
                    <p class="card-description">
                        @if($result->isNotEmpty())
                            Class: @foreach($result as $rec) {{ $rec->class_name }} - {{ $rec->division }} || @endforeach
                        @else
                            No results found
                        @endif
                        <code>.table</code>
                    </p>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Name</th>   
                            <th>Email</th>  
                            <th>Mobile</th>
                            <th> Connect </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($result as $rec)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $rec->name }}</td>
                        <td>{{ $rec->email }}</td>
                        <td>{{ $rec->mobile }}</td>
                        <td class="btn-group">
                            <!-- email -->
                            <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                <i class="mdi mdi-email-open"></i>
                            </button>  
                            <!-- phone -->
                            <button type="button" class="btn btn-inverse-success btn-rounded btn-icon">
                                <i class="mdi mdi-phone"></i>
                            </button>
                        </td>
                        <td class="">
                            <div class="p-2">
                                <a href="{{ route('Edit', ['id' => $rec->user_id]) }}">
                                     <button type="submit" class="btn btn-warning btn-rounded btn-icon mx-3">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>  
                                </a>

                                <a href="{{ route('Delete', ['id' => $rec->user_id]) }}">
                                    <button type="submit" class="btn btn-danger btn-rounded btn-icon mx-3">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </a>
                            </div>
                        </td>

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