<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme = "dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-8">
              <h1>Employee List</h1>
            </div>
            <div class="col-md-4">
              <a href="{{ route('emp.reg')}}" class="btn btn-success">Add Employee</a>
            </div>
          </div>

          <table class="table table-striped mt-5">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Designation</th>
              <th>Salary</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

          @foreach($empl as $e)
            <tr>
              <td>{{ $e->id }}</td>
              <td>{{ $e->name }}</td>
              <td>{{ $e->email }}</td>
              <td>{{ $e->phone }}</td>
              <td>{{ $e->designation }}</td>
              <td>{{ $e->salary }}</td>
              <td>
                <a href="{{ route('emp.edit',$e->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('emp.delete',$e->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
          </table>





        </div>
    </body>
</html>
