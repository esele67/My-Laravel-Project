<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Home</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', sans-serif;
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: #f5f5f5;
    }

    .navbar .menu {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .navbar .menu li {
        display: inline;
    }

    .navbar .menu a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .navbar .menu a:hover {
        color: #ffcc00;
    }

    .hero {
        position: relative;
        background: url('bg.png') no-repeat center center/cover;
        height: calc(100vh - 60px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); 
        z-index: 1;
    }

    .hero h1, .hero p, .hero .btn {
        position: relative;
        z-index: 2;
    }

    .hero h1 {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.5rem;
        font-weight: 400;
        margin-bottom: 40px;
    }

    .hero .btn {
        background-color: #333; 
        color: #fff; 
        padding: 15px 30px;
        font-size: 1.2rem;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        text-transform: uppercase;
    }

    .hero .btn:hover {
        background-color: #000; 
        transform: translateY(-2px);
    }

    .footer {
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px;
        text-align: center;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .footer p {
        font-size: 0.9rem;
        margin: 0;
    }
</style>

</head>
<body>

  
    <div class="navbar">
        <div class="logo">My Laravel Website</div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
        </ul>
    </div>

    
    <div class="hero">
        <h1>Visual Programming BIT 6013</h1>
        <p>Learn the fundamentals of visual programming with Laravel and Blade templating</p>
        <a href="{{ route('store') }}" class="btn">Go to Store</a> 
    </div>

   
    <div class="footer">
        <p>&copy; 2024 My Laravel Website. God'swill Esele Andrew.</p>
    </div>

</body>
</html>
