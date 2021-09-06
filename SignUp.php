<?php
include("connection.php");
?>

<html>
    <head>
        <style>
            form{
                width: 400px;
                height: auto;
                margin-left: 500px;
                margin-top: 100px;
            }
            .bgimage{
              background-image: url('images/minimal_medical.jpg');
                height: 100%;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body class="bgimage">
        <form action="" method="POST">
            <h1>SignUp Here</h1>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Firstname</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputfirstname" name="firstname" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Lastname</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputlastname" name="lastname" required>
                </div>
            </div>

            </div>


            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="email" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password" required>
                </div>
              </div>
            <input id="add" type="submit" name="submit" value="Signup"  class="btn btn-primary"/><br>
            Already have an account?
            <a href="login.php"  class="btn btn-success">Login</a>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>



<?php
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM person WHERE email = '$email'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        echo '<script>alert("This username already have an account.")</script>';
    }else{
        $sql = "INSERT INTO person (firstname,lastname,email,password) VALUES  ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]')";

        $check = mysqli_query($conn, $sql);

        if ($check) {
            echo '<script>alert("Registration Successful")</script>';
//        header('location:login.php');
        } else {
            echo " Not successfully create";
        }
    }



}
?>