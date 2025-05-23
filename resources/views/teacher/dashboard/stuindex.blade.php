<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Dhere it is students data</h3>
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

        <!-- New Students Table -->
        <h3>Newly Registered Students</h3>
        <table class="students-table">
            <thead>
                <tr>
                    <th>#stu-id</th>
                    <th>stu-name</th>
                    <th>Stu-trade</th>
                    <th>Stu-level</th>
                    <th>Stu-email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->trade }}</td>
        <td>{{ $student->level }}</td>
        <td>{{ $student->email }}</td>
        <td>
        <a href="{{ route('teacher.dashboard.studentedit', $student->id) }}" class="update-btn">Edit</a>
        <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
         @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('U realy want to do it?')" class="delete-btn">Delete</button>
        </form>
        </td>
    </tr>
@endforeach
            </tbody>
        </table>

    </div>

</div>
<script>
        const themeSwitch = document.getElementById('themeSwitch');
        const body = document.body;
        const themeIcon = document.getElementById('themeIcon');
        let isDarkMode = true;

        themeSwitch.addEventListener('click', () => {
            if (isDarkMode) {
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
                themeIcon.classList.remove('sun');
                themeIcon.classList.add('moon');
                isDarkMode = false;
            } else {
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
                themeIcon.classList.remove('moon');
                themeIcon.classList.add('sun');
                isDarkMode = true;
            }
        });
    </script>
</body>
</html>
