<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Login | XCL Technologies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        /* Same background as welcome page */
        background-image: 
            linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(30, 41, 59, 0.8)), 
            url('{{ asset('assets/images/payroll_bg.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 20px;
    }

    /* Glassmorphism container */
    .login-container {
        width: 100%;
        max-width: 450px;
        background: rgba(30, 41, 59, 0.6);
        border-radius: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        padding: 3rem;
        animation: fadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
    }

    @keyframes fadeIn {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .logo-text {
        font-family: 'Outfit', sans-serif;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #818cf8;
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    h2 {
        font-family: 'Outfit', sans-serif;
        font-size: 2rem;
        color: #fff;
        font-weight: 800;
        letter-spacing: -0.025em;
    }

    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-group i {
        position: absolute;
        left: 1.25rem;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 1rem;
        transition: color 0.3s ease;
    }

    .form-control {
        width: 100%;
        background: rgba(15, 23, 42, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        padding: 1rem 1rem 1rem 3rem;
        color: #fff;
        font-size: 1rem;
        outline: none;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #6366f1;
        background: rgba(15, 23, 42, 0.8);
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    .form-control:focus + i {
        color: #6366f1;
    }

    .login-btn {
        width: 100%;
        padding: 1.25rem;
        border: none;
        border-radius: 1rem;
        background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
        color: white;
        font-size: 1.1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.4);
        margin-top: 1rem;
    }

    .login-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.5);
        background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
    }

    .login-btn:active {
        transform: scale(0.98);
    }

    .alert {
        padding: 1rem;
        border-radius: 1rem;
        margin-bottom: 1.5rem;
        font-size: 0.875rem;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.2);
        color: #fca5a5;
    }

    .alert ul {
        list-style: none;
    }

    /* Custom scrollbar for errors if many */
    .alert {
        max-height: 150px;
        overflow-y: auto;
    }
</style>

<body>
    <div class="login-container">
        <div class="header">
            <div class="logo-text">XCL Technologies</div>
            <h2>Welcome Back</h2>
        </div>

        @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address" :value="old('email')" required autofocus autocomplete="username">
                <i class="fas fa-envelope"></i>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                <i class="fas fa-lock"></i>
            </div>

            <button type="submit" class="login-btn">
                Sign In
            </button>
        </form>
    </div>
</body>

</html>