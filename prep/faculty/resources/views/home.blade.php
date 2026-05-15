<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div class="m-5">
            <h1> Faculty List  </h1>
            
            <a href="{{ route('fcl.reg') }}"> Add Faculty </a>

            <table class="table table-stripped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Actions</th>        
                </tr>

                @foreach($fcl as $f)
                
                    <tr>
                        <td> {{ $f->id }}</td>
                        <td> {{ $f->name }}</td>
                        <td> {{ $f->email }}</td>
                        <td> {{ $f->phone }}</td>
                        <td> {{ $f->designation }}</td>
                        <td> {{ $f->salary }}</td>
                        <td>
                            <a href="{{ route('fcl.edit',$f->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('fcl.delete',$f->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                
                    </tr>

                @endforeach  
            </table>     

        </div>
    </body>
</html>
