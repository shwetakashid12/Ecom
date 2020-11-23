<?php
session_start();
?>
<html>
    <head>
<title>Signup Page</title>
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
$username =mysqli_real_escape_string($con, $_POST['username']);
$email =mysqli_real_escape_string($con,$_POST['email']);
$mobile =mysqli_real_escape_string($con,$_POST['mobile']);
$password =mysqli_real_escape_string($con,$_POST['password']);
$cpassword =mysqli_real_escape_string($con,$_POST['cpassword']);
// $gender =mysqli_real_escape_string($con,$_POST['gender']);


 $pass =password_hash($password,PASSWORD_BCRYPT);
 $cpass =password_hash($cpassword,PASSWORD_BCRYPT);

$emailquery ="select * from registration where email='$email' ";
$query=mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);
if($emailcount>0){
    echo "email already exists";
}
else{
    if($password ===$cpassword){

        $insertquery ="insert into registration( username,
         email, mobile, password, cpassword) values
        ('$username','$email','$mobile','$pass','$cpass')";

        $iquery = mysqli_query($con,$insertquery);
    
        if($iquery){
                    
                        ?>
                        <script>
                        alert("Account created Successfully");
                    </script>
                    <?php
                    }else{
                        ?>
                        <script>
                        alert("Sorry!! account is not created.try again! ");
                    </script>
                    <?php
                    }
          
        

    }else{
        ?>
                        <script>
                        alert("Password is not matching ");
                    </script>
                    <?php
        // echo "password is not matching";
    }
}

}




?>




        <div class="login-container d-flex align-items-center justify-content-center">
            <form method="POST"action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="login-form text-center">
                <h1 class="mb-5 font-weight-light text-uppercase">SIGN UP</h1>
                <div class="form-group">
                    <input type="text" name ="username" class="form-control rounded-pill form-control-lg" placeholder="Username"   required>

                </div>
                <div class="form-group">
                    <input type="email" class="form-control rounded-pill form-control-lg" name="email" placeholder="User mailID">

                </div>
                <div class="form-group input-group">
                    
                    <select class="custom-select form-control rounded-pill form-control-lg" style="max-width:80px">
                        <option>+91</option>
                        <option>+92</option>
                        <option>+93</option>

                    </select>
                    <input type="number"
                    name ="mobile"
                    class="form-control rounded-pill form-control-lg"
                    placeholder="Enter Phone"
                    required
                    />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control rounded-pill form-control-lg" name="password" placeholder="Password" required>
                    
                </div>

                <div class="form-group">
                    <input type="password" name ="cpassword" class="form-control rounded-pill form-control-lg" placeholder="Confirm Password"  required>
                    
                </div>
<!-- gender -->
<div class="form-group input-group" name ="gender" >
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
      <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
      <label class="form-check-label" for="inlineRadio2">Female</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
      <label class="form-check-label" for="inlineRadio3">Other</label>
    </div>
  </div>
                <div class="forgot-link -d d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember">Remember Password</label>

                    </div>
                    <!-- <a href="#">Forgot Password</a> -->
                </div>
                <button type="submit" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Create Account</button>
                <p class="mt-3 font-weight-normal">Already have an account <a href="finallogin.php"><strong>Login</strong> </a></p>
            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>