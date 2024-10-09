<x-banner-component />

<div class="content-wrapper">

    <x-latest-component />

    <x-customer-login-component />
</div>

<x-footer-component />


<!-- Styling -->
<style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #f4f7f6;
        color: #333;
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ensures the footer stays at the bottom */
    }

    .main-content {
        flex: 1; /* Pushes the footer to the bottom */
    }

    .banner {
        background-color: rgba(0, 0, 0, 0.8);
        padding: 0px 0px; /* Reduced padding to make the banner smaller */
        text-align: center;
        color: white;
        font-size: 1.5rem; /* Reduced font size */
    }

    .content-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: stretch;
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
        gap: 20px;
    }

    .product-section {
        flex: 1;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        align-items: stretch;
        min-height: 98%;
    }

    .product-section h2 {
        grid-column: 1 / span 2;
        text-align: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .product-section img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .product-section img:hover {
        transform: scale(1.05);
    }

    .login-section {
        flex: 1;
        padding: 30px;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 95%;
        text-align: center;
    }

    .login-section .logo {
        max-width: 150px;
        margin: 0 auto 30px auto;
        display: block;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .login-section h2 {
        font-size: 1.75rem;
        margin-bottom: 20px;
        color: #333;
    }

    .login-section p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 30px;
    }

    .login-section form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .login-section input[type="email"], 
    .login-section input[type="password"] {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
        transition: border 0.3s ease;
    }

    .login-section input:focus {
        border-color: rgba(0, 0, 0, 0.8);
        outline: none;
    }

    .login-section button {
        width: 100%;
        max-width: 400px;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }

    .login-section button:hover {
        background-color: #0056b3;
    }

    .login-section .forgot-password {
        margin-top: 10px;
    }

    .login-section .forgot-password a {
        color: #007BFF;
        text-decoration: none;
    }

    .login-section .forgot-password a:hover {
        text-decoration: underline;
    }

    .footer {
        background-color: rgb(0, 0, 0);
        padding: 20px;
        text-align: center;
        color: white;
        margin-top: auto;
    }

    .footer p {
        margin: 0;
        font-size: 0.9rem;
    }
</style>