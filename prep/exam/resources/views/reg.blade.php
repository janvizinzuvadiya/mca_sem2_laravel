<!DOCTYPE html >
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


    </head>
    <body>
        <div class="container mt-5">
            <h1 class="h1">Register Employee</h1>  

            <form action="{{ route('emp.store') }}" method="post" class="mt-5 w-75">
                @csrf
                <div class="mb-3 row">
                    <label for="" class="col-md-2">Name</label>
                    <div class="col-md-6">
                        <input type="text" name="name" id="" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-2">Email</label>
                    <div class="col-md-6">
                        <input type="text" name="email" id="" class="form-control">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-2">Phone</label>
                    <div class="col-md-6">
                        <input type="text" name="phone" id="" class="form-control">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-2">Designation</label>
                    <div class="col-md-6">
                        <input type="text" name="designation" id="" class="form-control">
                        @error('designation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-2">Salary</label>
                    <div class="col-md-6">
                        <input type="text" name="salary" id="" class="form-control">
                        @error('salary')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 mt-5 text-dark">
                    <input type="submit" value="Add" class="btn btn-info text-dark cursor-pointer">
                </div>
            </form>

        </div>
    </body>
</html>
