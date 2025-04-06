<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        h2 {
            text-align: center;
            color: #111827;
        }

        input[type="password"],
        input[type="email"],
        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            box-sizing: border-box;
        }

        button {
            background-color: #3b82f6;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2563eb;
        }

        .error {
            color: red;
            margin-top: 8px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Reset Password</h2>
        <form action="http://127.0.0.1:8000/api/auth/reset-password" method="POST">
            <!-- Hidden Fields for Email and Token -->
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <!-- New Password -->
            <label>Password Baru</label>
            <input type="password" name="password" required>

            <!-- Confirm Password -->
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>

            <!-- Submit Button -->
            <button type="submit">Ganti Password</button>
        </form>
    </div>
</body>

</html>
