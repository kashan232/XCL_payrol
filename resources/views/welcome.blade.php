<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to XCL Technologies Payroll Management system</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:700&display=swap" rel="stylesheet" />

    <style>
        /* Basic Reset */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Figtree', sans-serif;
            overflow: hidden;
        }

        /* Main Container Styling */
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #f9fafb;
            text-align: center;
            
            /* Modern Premium Background */
            background-image: 
                linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(30, 41, 59, 0.8)), 
                url('{{ asset('assets/images/payroll_bg.png') }}');
            
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        /* Glassmorphism content box */
        .content-box {
            padding: 4rem 5rem;
            background: rgba(30, 41, 59, 0.6);
            border-radius: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: slide-in 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @keyframes slide-in {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        /* Welcome Title */
        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.025em;
        }

        p {
            font-size: 1.25rem;
            color: #94a3b8;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Login Button */
        .login-btn {
            display: inline-flex;
            align-items: center;
            padding: 1.25rem 3.5rem;
            border: none;
            border-radius: 1rem;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: white;
            font-size: 1.1rem;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.4);
        }

        .login-btn:hover {
            transform: scale(1.05) translateY(-5px);
            box-shadow: 0 20px 35px -10px rgba(79, 70, 229, 0.5);
            background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
        }

        .login-btn:active {
            transform: scale(0.98);
        }

        .logo-text {
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: #6366f1;
            margin-bottom: 1rem;
            font-weight: 700;
        }
    </style>
</head>
<body class="antialiased">
    <div class="main-container">
       <div class="content-box">
            <div class="logo-text">XCL Technologies</div>
            <h1>Payroll Management System</h1>
            <p>Streamline your workforce management with our advanced and intuitive payroll solution.</p>
            
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="login-btn">
                    <span>Access Dashboard</span>
                </a>
            @endif
       </div>
    </div>
</body>
</html>