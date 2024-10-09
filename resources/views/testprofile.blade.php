<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Interface</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8); 
            padding: 10px 30px; 
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-section {
            display: flex;
            flex-direction: column;
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .product-section img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .login-section {
            width: 40%;
            padding: 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .login-section form {
            display: flex;
            flex-direction: column;
        }

        .login-section input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-section button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.8); 
            padding: 20px;
            text-align: center;
            color: white;
            margin-top: 50px;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Banner Component -->
    <x-banner-component />

    <div class="content-wrapper">
        <!-- Product Section -->
        <div class="product-section">
            <h2>Highlight Product</h2>
            <img src="{{ asset('product1.jpg') }}" alt="Product 1">
            <img src="{{ asset('product2.jpg') }}" alt="Product 2">
        </div>

        <!-- Customer Login Section -->
        <div class="login-section">
            <h2>Customer Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 My Laravel Website. God'swill Esele Andrew.</p>
    </div>

</body>
</html>
