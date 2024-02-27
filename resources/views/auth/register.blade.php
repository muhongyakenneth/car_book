<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6;
        }
        .container {
            max-width: 480px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            outline: none;
            border-color: #6c63ff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        .btn {
            display: inline-block;
            background-color: #6c63ff;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #554dff;
        }
        .link {
            color: #6c63ff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .link:hover {
            color: #554dff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <div class="form-group" style="text-align: center;">
                <button type="submit" class="btn">Register</button>
            </div>
        </form>
        <div style="text-align: center;">
            <span>Already registered? </span><a href="{{ route('login') }}" class="link">Login</a>
        </div>
    </div>
</body>
</html>
