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
        <h3>Dashboard</h3>
        <ul>
        <li><a href="{{route('dashboard.stuindex')}}">Students</a></li>
            <li><a href="#" >Todo</a></li>
            <li><a href="#">Subjects</a></li>
            <li><a href="#">Updates</a></li>
            <li>
                <h4>{{ $teacher->email}}</h4>
                <form method="POST" action="{{ route('teacher.logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <h2>Welcome, {{ $teacher->username}}</h2>
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

    </div>
</div>

<div class="newdash-card">
    <div class="cards-container">
        <div class="card-content">
            <h1>total income</h1>
            <p>$340k</p>
            <span>per moth</span>
            <img/>
        </div>
    </div>

    <div class="cards-container">
        <div class="card-content">
            <h1>total student</h1>
            <p>120k</p>
            <span>per moth</span>
            <img/>
        </div>
    </div>

    <div class="cards-container">
        <div class="card-content">
            <h1>total subject</h1>
            <p>120k</p>
            <span>per moth</span>
            <img/>
        </div>
    </div>
</div>

<div class="newdash-card2">
    <div class="cards-container2">
        <div class="card-content">
            <h1>total assignment</h1>
            <p>340</p>
            <span>per day</span>
            <img/>
        </div>
    </div>

    <div class="cards-container2">
        <div class="card-content">
            <h1>total asessment</h1>
            <p>120k</p>
            <span>per day</span>
            <img/>
        </div>
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
