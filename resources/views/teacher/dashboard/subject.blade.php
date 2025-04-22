<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashsub.css') }}">
    <title>ADD subject</title>
</head>
<body>
@if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
<form action="{{ route('teacher.dashboard.subject.store') }}" method="POST">
@csrf
        <label for="subname">subject-Name:</label><br>
        <input type="text" id="subname" name="subname" value="{{old('subname')}}"><br><br>
        <label for="topic">Topic:</label><br>
        <input type="text" id="topic" name="topic" value="{{old('topic')}}"><br><br>
        <label for="notes">notes:</label><br>
        <input type="text" id="notes" name="notes" value="{{old('notes')}}"><br><br>
        <label for="depart">department:</label><br>
        <input type="depart" id="depart" name="depart" value="{{old('depart')}}"><br><br>
        <input type="submit" value="add subject">
    </form>
</body>
</html>