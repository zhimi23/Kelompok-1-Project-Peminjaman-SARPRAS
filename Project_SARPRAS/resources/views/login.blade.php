<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Doodle CSS web component -->
    <script src="https://unpkg.com/css-doodle@0.15.3/css-doodle.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f4f4;
            min-height: 100vh;
            margin: 0;
            position: relative;
        }
        css-doodle {
            position: fixed;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            z-index: 0;
            pointer-events: none;
        }
        .login-container {
            width: 350px;
            margin: 120px auto;
            padding: 32px 28px;
            background: rgba(255,255,255,0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
            position: relative;
            z-index: 1;
        }
        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 24px;
            font-weight: 600;
            letter-spacing: 1px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-size: 15px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            background: #f9f9f9;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #007bff 60%, #00c6ff 100%);
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            box-shadow: 0 2px 8px rgba(0,123,255,0.08);
            transition: background 0.2s;
        }
        button:hover {
            background: linear-gradient(90deg, #0056b3 60%, #0096c7 100%);
        }
        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: #444;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(66,133,244,0.08);
            transition: background 0.2s, box-shadow 0.2s;
            margin-top: 8px;
        }
        .google-btn:hover {
            background: #f1f3f4;
            box-shadow: 0 4px 16px rgba(66,133,244,0.12);
        }
    </style>
</head>
<body>
    <!-- Doodle background -->
    <css-doodle>
        :doodle {
            @grid: 12x6 / 100vw 100vh;
            background: #f4f4f4;
        }
        @shape: circle;
        background: @pick(#007bff, #00c6ff, #e0e7ff, #fff);
        opacity: @rand(0.08, 0.18);
        transform: scale(@rand(0.7, 1.3)) translateY(@rand(-20px, 20px));
        box-shadow: 0 0 24px @pick(#007bff, #00c6ff, #e0e7ff, #fff);
    </css-doodle>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div style="margin: 24px 0 12px; text-align: center; position: relative;">
            <span style="background: #fff; padding: 0 12px; position: relative; z-index: 1; color: #888;">or</span>
            <hr style="border: none; border-top: 1px solid #eee; margin: -14px 0 0 0;">
        </div>
        <a href="{{ route('login.google') }}" class="google-btn">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" style="width:22px; vertical-align:middle; margin-right:8px;">
            Login with Google
        </a>
    </div>
</body>
</html>