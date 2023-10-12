<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Login Admin</title>

    <link rel="stylesheet" href="{{ asset('filecss/login.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Stylesheet-->
    <style media="screen">

    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <form action="/registeradmin" method="post">
                @csrf
                <h3>Login Here</h3>

                <label for="username">Username</label>
                <input type="text" placeholder="Username" name="name" id="username">

                <label for="email">Email</label>
                <input type="text" placeholder="Email or Phone" name="email" id="username">

                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" id="password">


                <button>Log In</button>
                <a href="/login">Login</a>
                <!-- <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> -->
            </form>

        </div>
    </div>

</body>

</html>
