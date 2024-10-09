<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Interface</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>

    <!-- Render Banner Component -->
    <x-banner-component />

    <!-- Render Latest Products Component -->
    <x-latest-component />

    <!-- Render Customer Login Component -->
    <x-customer-login-component />

    <!-- Render Footer Component -->
    <x-footer-component />

</body>
</html>
