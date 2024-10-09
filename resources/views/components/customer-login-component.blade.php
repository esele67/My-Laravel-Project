<!-- Customer Login Section -->
    <div class="login-section">
        <img src="{{ asset('Dior.jpeg') }}" alt="Dior Logo" class="logo">
        <h2>Customer Login</h2>
        <p>Sign in to your account</p>
        <form action="/login" method="post">
            @csrf
            <input type="email" placeholder="Email Address" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
    </div>