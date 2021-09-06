<?php
    ob_start(); // For error
    session_start();
    include("connection.php");
?>


<!--<html>-->
<!--    <head>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
<!--    <style>-->
<!--        #formstyle{-->
<!--            width: 400px;-->
<!--            height: auto;-->
<!--            margin-left: 500px;-->
<!--            margin-top: 250px;-->
<!--        }-->
<!--        .bgimage{-->
<!--            background-image: url('notun_medical.jpg');-->
<!--            height: 100%;-->
<!--            background-repeat: no-repeat;-->
<!--            background-position: center;-->
<!--            background-size: cover;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--    <body class="bgimage" class="bgimage">-->
<!--<form id="formstyle" action="" method="POST">-->
<!--    <div class="row mb-3">-->
<!--        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="email" class="form-control" id="inputEmail3" name="email" required>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row mb-3">-->
<!--        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="password" class="form-control" id="inputPassword3" name="password" required>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <button type="submit" class="btn btn-primary">Sign in</button>-->
<!--    <p><b>Don't have an account? </b> <a class="btn btn-primary" href="SignUppage.php" role="button" target="_blank">Sign Up Here</a> </p>-->
<!--</form>-->
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
<!--</body>-->
<!--</html>-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>

            .image{
                background-image: url('images/notun_medical.jpg');
                height: 100% ;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
        </style>
    </head>
    <body style="" class="image">
    <div class="d-flex justify-content-center container mt-5">


        <form action="" method="post" class="form-control w-50 mx-auto" >
            <h1>Login Here</h1>
            <p>Email</p>
            <input type="email" class="form-control" name="email" value="" placeholder="Enter your username"></br></br>
            <p>Password</p>
            <input type="password" class="form-control" name="password" value="" placeholder="Enter your password"></br></br>
            <input id="add" class="form-control btn btn-success" type="submit" name="submit" value="Login"/><br><br>
            Don't have an account ? Please
            <a href="SignUp.php" class="btn btn-primary">SignUp</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    </html>


<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $query = "SELECT * FROM person WHERE email = '$email' && password = '$pwd'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['email'] = $email;
        header('location:home.php');
    }
    else
    {

        echo '<script type="text/javascript">';
        echo 'alert(" Login Failed");';
        // echo 'window.location.href = "login.php";';
        echo '</script>';
    }

}
ob_flush();
?>