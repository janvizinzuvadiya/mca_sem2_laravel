<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Student</title>

    <!-- Bootstrap 5 -->
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

        .form-label {
            color: #cfcfcf;
            font-size: 0.9rem;
        }

        .form-control {
            background-color: #1a1a1a;
            border: 1px solid #333;
            color: #e0e0e0;
        }

        .form-control::placeholder {
            color: #777;
        }

        .form-control:focus {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #555;
            box-shadow: none;
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

        .card-footer {
            background-color: #1a1a1a;
            border-top: 1px solid #333;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="mb-0 text-light">Add New Student</h5>
                </div>

                <div class="card-body">
                    <form action="/student/store" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Enrollment</label>
                            <input type="text" name="enrollment" class="form-control" placeholder="Enrollment number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile number" maxlength="14" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City name" required>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-muted btn-lg">
                                Save Data
                            </button>
                        </div>

                    </form>
                </div>

                <div class="card-footer text-center text-muted">
                    Please verify details before saving
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
