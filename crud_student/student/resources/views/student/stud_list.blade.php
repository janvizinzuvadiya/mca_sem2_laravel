<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student List</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
    }

    .card {
      background-color: #1e1e1e;
      border: 1px solid #2a2a2a;
    }

    .card-header {
      background-color: #2b2b2b;
      border-bottom: 1px solid #333;
    }

    .card-footer {
      background-color: #1a1a1a;
      border-top: 1px solid #333;
      font-size: 0.9rem;
    }

    table {
      color: #ddd;
    }

    thead {
      background-color: #242424;
    }

    thead th {
      border-bottom: 1px solid #333;
      font-weight: 500;
      color: #cfcfcf;
    }

    tbody tr:nth-child(odd) {
      background-color: #1c1c1c;
    }

    tbody tr:nth-child(even) {
      background-color: #222;
    }

    tbody tr:hover {
      background-color: #2a2a2a;
    }

    td, th {
      border-color: #333;
      vertical-align: middle;
    }

    .btn-muted {
      background-color: #3a3a3a;
      color: #ddd;
      border: 1px solid #444;
    }

    .btn-muted:hover {
      background-color: #444;
      color: #fff;
    }

    .btn-warning {
      background-color: #665c00;
      border-color: #665c00;
      color: #f1e6a1;
    }

    .btn-danger {
      background-color: #5c1e1e;
      border-color: #5c1e1e;
    }

    .badge-soft {
      background-color: #2f2f2f;
      color: #bbb;
      border: 1px solid #444;
    }
  </style>
</head>

<body>

<div class="container mt-5">
  <div class="card shadow-lg">

    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0 text-light">Student Records</h5>
      <button class="btn btn-muted btn-sm"><a href="/student/create">+ Add New</a></button>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-dark table-borderless table-stripped table-hover mb-0">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Enrollment</th>
              <th>Mobile</th>
              <th>City</th>
              <th>Created</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>

          <tbody>

          @foreach($student as $stud)
            <tr>
              <td>{{ $stud->id }}</td>
              <td>{{ $stud->name }}</td>              
              <td><span class="badge badge-soft">{{ $stud->email }}</span></td>
              <td class="text-light">{{ $stud->enrollment }}</td>
              <td>{{ $stud->mobile }}</td>
              <td>{{ $stud->city }}</td>
              <td class="text-muted"></td>
              <td class="text-center">
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            @endforeach

            
          </tbody>
        </table>
      </div>
    </div>

    <div class="card-footer text-center text-muted">
      Showing 2 records
    </div>

  </div>
</div>

</body>
</html>
