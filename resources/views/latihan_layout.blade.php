<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Styling untuk container login */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Styling untuk login box */
        .username-password {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        /* Styling untuk input group */
        .input-group {
            margin-bottom: 15px;
        }

        /* Styling untuk tombol login */
        .btn-login {
            background-color: black;
            color: white;
            padding: 8px; /* Memperbesar padding untuk tombol login */
            border-radius: 20px;
            width: 100%;
            margin-top: 10px;
            font-size: 16px; /* Memperbesar ukuran font tombol */
        }

        /* Styling untuk warning text */
        .text-danger {
            text-align: left;
            margin-left: 10px;
            font-size: 12px;
        }

        /* Styling untuk footer bar */
        .footer-bar {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #4a4a51;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
        }

        /* Styling untuk footer link */
        .footer-bar a {
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
        }

        /* Hover effect untuk link */
        .footer-bar a:hover {
            text-decoration: underline;
        }

        /* Styling untuk links "Forgot Password" dan "Login As Teknisi" */
        .links {
            font-size: 12px; /* Ukuran teks lebih kecil */
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="username-password text-center">
            <!-- Logo -->
            <img src="CekDong.png">

            <!-- Form Login -->
            <form>
                <!-- Username Field -->
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <img src="profile.png" alt="User Icon" width="20">
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                <!-- Password Field -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <img src="key.png" alt="Password Icon" width="20">
                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                <!-- Warning Text -->
                <p class="text-danger text-start ms-2">Wrong Password!</p>

                <!-- Login Button -->
                <button type="submit" class="btn-login btn-login-dark w-50 rounded-pill">Login</button>
            </form>

            <!-- Links -->
            <div class="mt-3 links">
                <class="d-block text-dark">Forgot Password</a>
                <a href="#" class="d-block text-dark">Login As Teknisi</a>
            </div>
        </div>
    </div>

    <!-- Footer Bar -->
    <div class="footer-bar">
        <p>Don't have an account yet? <a href="#" class="fw-bold text-light">Create New</a></p>
    </div>
</body>
</html>
