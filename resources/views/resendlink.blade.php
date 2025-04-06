<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f8fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Reset Password</h2>
        <p>Halo,</p>
        <p>Kami menerima permintaan untuk mereset password Anda. Silakan klik tombol di bawah ini untuk melanjutkan:</p>
        <a href="{{ $a }}" class="button">Reset Password</a>

        <p>Jika Anda tidak meminta reset password, abaikan email ini.</p>

        <div class="footer">
            &copy; {{ date('Y') }} Nama Aplikasi Anda
        </div>
    </div>
</body>

</html>
