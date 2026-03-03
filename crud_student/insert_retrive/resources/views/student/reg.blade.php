<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Students</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container mt-5 ">
        <h1 class="ms-4 ps-4">Register Students</h1>
        <form class="m-3 p-5 bg-dark text-white rounded-3" action="{{ route('addmsg') }}" method="post">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="inputid4" class="form-label">Id</label>
                    <input type="text" name="id" class="form-control" id="inputid4">
                </div>
                <div class="col-md-6">
                    <label for="inputname4" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="inputname4">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="inputenroll4" class="form-label">Enrollment</label>
                    <input type="text" name="enrollment" class="form-control" id="inputenroll4">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <label for="inputmobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="inputmobile">
                </div>
            </div>
            <div class="row g-3 mt-4">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>