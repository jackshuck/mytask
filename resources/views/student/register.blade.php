<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h2>Register as students</h2>
        </div>
        <div class="card-body w-70">
            <form method="POST" action="{{ route('student.register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
                </div>

                <div class="mb-3">
                    <label for="trade" class="form-label">trade</label>
                    <input type="text" name="trade" class="form-control" id="trade" value="{{old('trade')}}" required>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">level</label>
                    <input type="text" name="level" class="form-control" id="level" value="{{old('level')}}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="{{old('password')}}" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="{{old('password_confirmation')}}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>

                <p class="text-center mt-3">Already have an account? <a href="{{ route('student.login') }}">Login here</a></p>
            </form>

        </div>
    </div>
</div>

</body>
</html>
