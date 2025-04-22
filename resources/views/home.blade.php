<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Scholaroid | Welcome</title>
</head>
<body>

<header>
    <div class="logo">
    <img src="{{asset('images/logo.png')}}">
        <span>Scholaroid</span>
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
        <a class="btn-link" href="{{ route('student.register')}}">Student</a>
        <a class="btn-link" href="{{ route('teacher.login')}}">Teacher</a>
    </nav>
</header>

<div class="hero">
    <div class="hero-content">
    <h1>Welcome to Scholaroid class manager</h1>
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

</body>
</html>
