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
        <div class="row">
          <div class="col-md-9">
            <h1 class="display-5">Add Student Details</h1>
          </div>
          <div class="col-md-2 text-end">
            <a href="{{ route('stud.home') }}" class="btn btn-primary">All Student</a>
          </div>
        </div> 

        <form action="{{ route('stud.store') }}" method="post" class="mt-5">
            @csrf

            <div class="row mb-3 ">
                <label for ="enrollment_no" class="form-label col-md-2">Enrollment No.</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="enrollment_no" id="enrollment_no">
                    @error('enrollment_no')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <div class="row mb-3 ">
                <label for ="full_name" class="form-label col-md-2">Full Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="full_name" id="full_name">
                    @error('full_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 ">
                <label for ="email" class="form-label col-md-2">Email</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="email" id="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 ">
                <label for ="course" class="form-label col-md-2">Course</label>
                <div class="col-md-3">
                    <select class="form-select" name="course" id="course">
                        <option value="" disabled selected>Select Course</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="B.Tech">BSC</option>
                        <option value="M.Tech">MSC</option>
                    </select>
                    @error('course')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 ">
                <label for ="joining_date" class="form-label col-md-2">Joinning Date</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" name="joining_date" id="joining_date">
                    @error('joining_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <label for ="status" class="form-label col-md-1">Status</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="status" id="status" value="Active" readonly>
                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
           
            <div class="row mb-3 mt-5">
               <div class="col-md-5 "></div>
                <div class="col-md-2">
                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </div>
            
        </form>
     
      </div>
    </body>
</html>
