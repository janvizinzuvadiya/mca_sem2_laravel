<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    </head>
    <body>
        <div class="container mt-5">
            <h1 class="h1"> Order List </h1>  
            <table class="table table-striped mt-5">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>order_number</th>
                    <th>customer_name</th>
                    <th>customer_email</th>
                    <th>total_amount</th>
                    <th>status</th>
                    <th>order_date</th>
                    <th>shipping_address</th>
                    <th>Actions </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $ord)
                    <tr>
                        <td>{{ $ord->id}}</td>
                        <td>{{ $ord->order_number}}</td>
                        <td>{{ $ord->customer_name}}</td>
                        <td>{{ $ord->customer_email}}</td>
                        <td>{{ $ord->total_amount}}</td>
                        <td>{{ $ord->status}}</td>
                        <td>{{ $ord->order_date}}</td>
                        <td>{{ $ord->shipping_address}}</td>

                        <td>
                            
                            <a href="{{ route('ord.edit',$ord->id) }}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                   
                            <a href="{{ route('ord.delete',$ord->id) }}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
