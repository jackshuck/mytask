<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Read Subject</title>
</head>
<body> <!-- Or whatever your layout is -->

<div class="wrapper w-60">
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>access data</h3>
        <ul>
            <li><a href="{{route('teacher.dashboard')}}">Goto Dashboard</a></li>
            <li><a href="#" >Todo</a></li>
            <li><a href="#">Subjects</a></li>
            <li><a href="#">Updates</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <i class="fa-regular fa-brightness"></i>
        <!-- Stats -->
        <div class="stats">
           
            <button class="wave-button"><a href="{{ route('teacher.dashboard.subject') }}">add subject</a></button>
           
           
            <button class="wave-button"><a>add subject</a></button>
           
           
            <button class="wave-button"><a>add subject</a></button>
           
           
            <button class="wave-button"><a>add subject</a></button>

    <button class="theme-button" id="themeSwitch">
        <div class="theme-icon sun" id="themeIcon"></div>
    </button>
           
        </div>

@section('content')
<div class="container">
    <h2 class="mb-4">Subjects Dashboard</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($subjects->isEmpty())
        <p>No subjects found.</p>
    @else
        <table class="students-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Subject Name</th>
                    <th>Topic</th>
                    <th>Notes</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->subname }}</td>
                        <td>{{ $subject->topic }}</td>
                        <td>{{ $subject->notes }}</td>
                        <td>{{ $subject->depart }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

    <!-- Bootstrap 5 JS Bundle -->
</body>
</html>