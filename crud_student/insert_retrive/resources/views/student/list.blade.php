<!DOCTYPE html >
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container mt-5 pt-5">

        <a style="float: right;" href="/add"><button class="btn btn-info px-4">  + Add  </button></a>
        <table class="table table-striped table-dark mt-5">
            <thead>
                <tr><h1> List Of Students </h1></tr>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                {{ $i=1 }}
                @foreach ($students as $stud )
               <tr>
                <th scope="row">{{ $i }}</th>
                    <td>{{ $stud->id }}</td>
                    <td>{{ $stud->name }}</td>
                    <td>{{ $stud->enrollment }}</td>
                    <td>{{ $stud->email }}</td>
                    <td>{{ $stud->mobile }}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                    {{ $i++ }}
                </tr>
                @endforeach
                
            </tbody>
        </table>

    </div>
    
</body>
</html>