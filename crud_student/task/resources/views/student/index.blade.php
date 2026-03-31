<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container m-5 p-3">
        <div class="header-holder">
            <div class="row m-5 p-3 d-flex justify-content-end">
                <div class="col-6">
                    <h1>Student List</h1>
                </div>
                <div class="col-2 ">
                    <a href=" {{ route('reg') }}" class="btn btn-primary">Register</a>
                </div>  
            </div> 
        </div>
        <table class="table container m-5 p-3 table-striped ">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Enrollment</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">City</th>
                </tr>
            </thead>
        <tbody class="table-group-divider">
            <tr>
            <th scope="row">1</th>
            <td>{{ $studentData['name'] }}</td>
            <td>{{ $studentData['enroll'] }}</td>
            <td>{{ $studentData['email'] }}</td>
            <td>{{ $studentData['mobile'] }}</td>
            <td>{{ $studentData['city'] }}</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>@social</td>
            <td>@fat</td>
            <td>@fat</td>
            </tr>
        </tbody>
        </table>
    
    </div>
    
</body> 
</html>