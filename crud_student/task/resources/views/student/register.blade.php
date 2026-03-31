<!DOCTYPE html >
<html lang="en" class="" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>

<!-- name,
enroll,
email,
mobile,
city -->

    <div class="container m-5 p-3">

        <div class="header-holder">
            <div class="row m-5 p-3 d-flex justify-content-end">
                <div class="col-6">
                    <h1>Register Student</h1>
                </div>
                <div class="col-2 ">
                    <a href=" {{ route('ind') }}" class="btn btn-primary">Student List</a>
                </div>  
            </div> 
        </div>
    
        <form action="{{ route('str') }}" method="post" class="container m-5 p-3">
            @csrf
            <div class="row mt-4">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  name="name" id="name" >
                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <label for="enroll">Enrollment</label>
                    <input type="text" class="form-control"  name="enroll" id="enroll">
                    @error('enroll')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mt-4" >
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="row mt-4">
                    <div class="col">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control"  name="mobile" id="mobile">
                        @error('mobile')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                <div class="col">
                    <label for="city">City</label>
                    <input type="text" class="form-control"  name="city" id="city">
                    @error('city')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>


    </div>

    
</body>
</html>