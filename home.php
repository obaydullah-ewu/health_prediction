<?php
    session_start();
    include('connection.php');
    error_reporting(0);
//     echo "Welcome ". $_SESSION['user_name'];
    $user_profile = $_SESSION['email'];
    if ($user_profile == true) {
    } else {
        header('location:login.php');
    }
    include('navbar.php');

    $query = "SELECT * FROM person WHERE email = '$user_profile'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    echo "</br>";
    //echo "<h2>" .  $result['firstname'] . "</h2>";
    include('navbar2.php');

?>

<html>

<div class="container" style="background-image: ">
    <head>
        <title>Home page</title>
        <style>
            body
            {
                background: url(images/notun_medical.jpg);
                background-size: 100% 100%;
                /* background-size: cover; */
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>

    <h1> Welcome <?php echo $result['firstname'] . ' ' . $result['lastname'] ?></h1>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</div>

</html>

