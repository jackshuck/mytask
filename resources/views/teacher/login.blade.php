<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="form-container">
        <h2>Scholaroid Teacher</h2>
        @if(session('success'))
            <div style="color: green; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('teacher.login') }}" method="POST" >
            @csrf
            <label for="username">Teacher's Name:</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>


            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>



            @if ($errors->any())
            <div class="error" style="color:red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
