<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Login Form</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8f74335642.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('./images/tree_planting.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            padding-inline: 2rem;
            padding-block: 1rem;
            margin: auto;
            background-color: rgba(10, 15, 41, 0.8);
            border-radius: 4px;
            box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.5);
        }

        .login-form h4 {
            margin-bottom: 1.4px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #dcdcdc;
        }

        .input-group {
            position: relative;
        }

        .input-group-append {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }

        .btn-show-pass {
            border: none;
            background-color: transparent;
            padding: 0;
            outline: none;
        }

        .btn-show-pass i {
            color: #999;
        }

        .btn-show-pass i:hover {
            color: #000;
        }

        .btn-login {
            padding: 10px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #45a049;
        }

        /* Additional CSS for responsiveness */
        @media (max-width: 576px) {
            body {
                padding-top: 0;
            }

            .navbar-brand-centered {
                position: static;
                transform: none;
                text-align: center;
            }
        }

        label {
            color: white;
        }
    </style>
</head>

<body>
    <div class="login-form mx-3">
        <div class="">
            <img src="./images/cglogo.png" class="mx-auto d-block" width="150px" alt="">
        </div>
        <h4 class="text-light mb-3">LOGIN</h4>
        <form>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="email">Email</span>
                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Email"
                    aria-describedby="email">
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="password">Password</span>
                <input type="password" class="form-control" placeholder="Enter your password" aria-label="Password"
                    aria-describedby="password">
            </div>
            <div class="d-flex justify-content-between">
                <a href="#" class="text-underline"><small>FORGOT PASSWORD?</small></a>
                <button type="submit" class="w-25 btn btn-login">Login</button>
            </div>

        </form>
        <a href="index.php" class="btn btn-link text-light p-0 mt-3 text-decoration-underline"><small><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Return to JCI Makati Webpage</small>
        </a>
    </div>


    <!-- Font Awesome CDN for eye icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
