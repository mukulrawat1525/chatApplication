<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App - Login & Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            outline: none;
        }

        .form-group input:focus {
            border: 2px solid #2575fc;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            background: #2575fc;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #6a11cb;
        }

        .switch {
            margin-top: 15px;
            font-size: 14px;
        }

        .switch a {
            color: #fff;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container" id="form-container">

        <form method="POST" action="{{ route('login') }}" id="login-form">
        @csrf
            <h1>Login</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <button type="submit" class="btn">Login</button>
            <p class="switch">Don't have an account? <a onclick="toggleForm()">Register here</a></p>
        </form>


        <form method="POST" action="{{ route('register') }}" id="register-form" style="display: none;">
                @csrf
            <h1>Register</h1>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="register-email" name="email" placeholder="Enter your email" required>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="register-password" name="password" placeholder="Create a password" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmed Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Create a password" required>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <button type="submit" class="btn">Register</button>
            <p class="switch">Already have an account? <a onclick="toggleForm()">Login here</a></p>
        </form>
    </div>

    <script>
        function toggleForm() {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>
</body>
</html>
