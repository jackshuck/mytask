<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholaroid | Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: #f9f9f9;
            color: #333;
        }
        header {
            background: #004aad;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 50px;
            margin-right: 10px;
            border-radius:50%;
        }
        .logo span {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }
        nav {
            display: flex;
            align-items: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #ffd700;
        }
        .btn-link {
            background: #ffd700;
            color: #004aad;
            border: none;
            padding: 8px 16px;
            margin-left: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease all;
        }
        .btn-link:hover {
            background: #ffa500;
            color: #fff;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1605751157630-d264a2c7f9f4') center/cover no-repeat;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap:60px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            text-align: center;
        }
        .hero img{
            width:400px;
            margin-top:5%;
        }
        .hero h1 {
            width:500px;
            color:black;
            font-size: 2rem;
            margin-top:5%;
            padding:2px;
            border-radius: 10px;
        }
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
            color: #004aad;
        }
        .footer {
            background: #004aad;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
        ul.plan-list {
            list-style: none;
            padding: 0;
        }
        ul.plan-list li {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
    <img src="{{asset('images/Teacher Guiding Student At Desk.png')}}">
        <span>Greenfield School</span>
    </div>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Academics</a>
        <a href="#">Admissions</a>
        <a href="#">Contact</a>
        <a class="btn-link" href="{{ route('teacher.loginstu')}}">Student</a>
        <a class="btn-link" href="{{ route('teacher.login')}}">Teacher</a>
    </nav>
</header>

<div class="hero">
    <h1>Welcome to Greenfield School
        <p>I've added a section to display an image. 
             You'll need to replace your-image.jpg with 
             the actual URL or path to your image file.</p>
    </h1>
    
    <img src="{{asset('images/Teacher Guiding Student At Desk.png')}}">
</div>

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
