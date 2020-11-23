<?php
session_start();
?>
<html>
    <head>
<title>Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel ="stylesheet" href="login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'links.php'?>
<?php include 'logincss.php'?>

    </head>
    <body>

<?php 

include 'dbcon.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $user_search=" select * from registration where email= '$email' ";
    $query=mysqli_query($con,$user_search);
    $user_cnt=mysqli_num_rows($query);

    if($user_cnt){
        $user_pass =mysqli_fetch_assoc($query);
        $dbpass = $user_pass['password'];
$pass_decode =password_verify($password, $dbpass);
if($pass_decode){
        echo "login Succcessful";
        ?>
        <script>
            location.replace("index.php");
        </script>
        <?php

        }
else{
    echo "Password incorrect";

}
    }
else{
    echo "Invalid Email";
}
}
?>












        <div class="login-container d-flex align-items-center justify-content-center">
            <form method="POST"action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="login-form text-center">
                <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
                <div class="form-group">
                    <input type="email" class="form-control rounded-pill form-control-lg" name="email" placeholder="User mailID">

                </div>
                <div class="form-group">
                    <input type="password" class="form-control rounded-pill form-control-lg" name="password" placeholder="Password">
                    
                </div>
                <div class="forgot-link -d d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember">Remember Password</label>

                    </div>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Login</button>
                <p class="mt-3 font-weight-normal">Don't hava an account <a href="original.php"><strong>Register Now</strong> </a></p>
            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>