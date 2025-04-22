<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<style>
.alert-info {
    color:rgb(228, 230, 235);
    border-radius: 8px;
    font-size: 0.95rem;
}

.logout-btn {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.logout-btn:hover {
    background-color: #c82333;
}

/* Animation keyframes */
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
</head>
<body>


<header>
    <div class="logo">
    <img src="{{asset('images/logo.png')}}">
        <span>{{ $student->name }} <h4 style="width:18px;height:18px; position:absolute;
         border-radius:90%; background-color:blue; margin-top:-2%;  margin-left:6%;"></h4> </span>
    </div>

    <div class="search-container">
    <input type="text" id="searchInput" placeholder="Type something...">
    <button onclick="showOutput()">Search</button>
</div>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Academics</a>
        <a href="#">Admissions</a>
        <a href="#">Todos</a>
        <button class="btn-link" href="#" id="open" onclick="toggleDiv()">Account</button>
    </nav>
</header>

<div class="container-cred" id="container-cred"> 
        <h2>Welcome, {{ $student->name }}!</h2>

        <div class="alert-info">
            <p>You are now logged in as:<strong>{{ $student->email }}</strong></p>
            <p>Trade:<strong>{{ $student->trade }}</strong></p>
            <p>level:<strong>{{ $student->level }}</strong></p>
        </div>
        <form action="{{ route('student.logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

<div class="hero">
    <div class="hero-content">
    <h1>Welcome  to Scholaroid</h1>
        <p>I've added a section to display an image. 
             You'll need to replace your-image.jpg with,
             alysis from the Middle East & worldwide,
              multimedia & interactives, opinions, documentaries, 
              podcasts, long reads and broadcast
             the actual URL or path to your image file.</p>
</div>
    
    <img src="{{asset('images/home.png')}}">
</div>
<!-- this is center of the page  -->
<div class="cards">
         <h2 class="header">
            meet services for scholarroid
         </h2>
         <div class="services">
         <div class="content content-0">
               <div ><img src="{{asset('images/first.png')}}"></div>
               <h2>
                  notes generator
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="#">Read More</a>
            </div>
            <div class="content content-1">
               <div ><img src="{{asset('images/home.png')}}"></div>
               <h2>
                  online assessment
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="#">Read More</a>
            </div>
            <div class="content content-2">
               <div><img src="{{asset('images/home.png')}}"></div>
               <h2>
                  online assignment
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="#">Read More</a>
            </div>
            <div class="content content-3">
               <div><img src="{{asset('images/home.png')}}"></div>
               <h2>
                online todoes
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
               <a href="#">Read More</a>
            </div>
         </div>
      </div>
<!-- the end-->
<div class="container">

    <div class="section">
        <h2>Academic Plans</h2>
        <ul class="plan-list">
            <li>Mathematics Mastery Program</li>
            <li>Science Discovery Track</li>
            <li>Creative Arts Pathway</li>
            <li>History and Social Studies Enrichment</li>
            <li>Sports and Physical Education Excellence</li>
        </ul>
    </div>

    <div class="section">
        <h2>About Us</h2>
        <p>Greenfield School is committed to nurturing students in a safe and welcoming environment. Our mission is to empower every student to become a life-long learner and responsible citizen.</p>
    </div>

    <div class="section">
        <h2>Our Academic Programs</h2>
        <p>We offer a rich and varied curriculum including STEM, humanities, sports, and arts — designed to help students explore and grow their skills both in and out of the classroom.</p>
    </div>

    <div class="section">
        <h2>Timetable & Activities</h2>
        <p>Our daily schedule is structured to balance academic rigor with creativity, play, and social growth. Students participate in extracurricular clubs, sports, and leadership programs.</p>
    </div>

</div>

<div class="footer">
    <p>&copy; 2025 Greenfield School | Learning for Life</p>
</div>


<script>
        function toggleDiv() {
            const div = document.getElementById('container-cred');
            if (div.style.display === 'none' || div.style.display === '') {
                div.style.display = 'block';
            } else {
                div.style.display = 'none';
            }
        }
    </script>

</body>
</html>
