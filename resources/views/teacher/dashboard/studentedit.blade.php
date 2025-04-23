<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form {
        max-width: 500px;
        margin: 20px auto;
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 12px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        font-family: 'Segoe UI', sans-serif;
    }

    form label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
        color: #333;
    }

    form input[type="text"],
    form input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
    }

    form button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #45a049;
    }

    h2 {
        text-align: center;
        font-family: 'Segoe UI', sans-serif;
        color: #444;
        margin-top: 40px;
    }
</style>
</head>
<body>
<h2>Edit Student</h2>
<form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $student->name }}"><br>

    <label>Trade:</label>
    <input type="text" name="trade" value="{{ $student->trade }}"><br>

    <label>Level:</label>
    <input type="text" name="level" value="{{ $student->level }}"><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $student->email }}"><br>

    <button type="submit">Update</button>
</form>
</body>
</html>
