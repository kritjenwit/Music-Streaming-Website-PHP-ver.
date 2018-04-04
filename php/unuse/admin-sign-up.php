<?php

// require "encrypt-decrypt.php";
//     if(isset($_POST['btnRegister'])){
//         $conn = new mysqli("localhost","root","","project");
 
//         // Original Data

//         $email = $conn->real_escape_string($_POST["email"]);
//         $password = $conn->real_escape_string($_POST["password"]);
//         $fname = $conn->real_escape_string($_POST["fname"]);
//         $lname = $conn->real_escape_string($_POST["lname"]);

//         // Encrypt Data

//         $encrypt_email = convert_string('e',$email);
//         $encrypt_password = convert_string('e',$password);
//         $encrypt_fname = convert_string('e',$fname);
//         $encrypt_lname = convert_string('e',$lname);

//         $checkEmail = $conn->query("SELECT 'admin_email' FROM admin_info WHERE admin_email = '".$encrypt_email."' ");
//         // If  Yes TODO.. here
//         if($checkEmail->num_rows > 0){
//             $_SESSION['message'] = "This email is already registered, Please try another email...";
//         // if No -> add data to database with encryption
//         }else{
//             // $registerLoginQuery = $conn->query(" INSERT INTO encrypt_login (user_id,email, password) VALUES('NULL', '".$encrypt_email."', '".$encrypt_password."') ");
//             $registerUserinfoQuery = $conn->query("INSERT INTO admin_info (admin_id, admin_email,admin_password, admin_firstname, admin_lastname) VALUES('NULL','".$encrypt_email."', '".$encrypt_password."','".$encrypt_fname."','".$encrypt_lname."') ");

//             if(($registerUserinfoQuery) === true){
//                 $_SESSION['reg_sucesses']="Register Sucessfully";
//                 // header("Location: sign-in.html");
//             }else{
//                 $_SESSION['message']="Error to connect database";
//             }
//         }
//     }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <form action="" class="was-validated" method="POST">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$"
                title="Please enter format of email correctly">
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password minimum 6 character" required pattern=".{6,}"
                title="Please enter minimum 6 character">
            <br>
            <br>
            <input type="text" class="form-control" name="fname" placeholder="First name" required pattern="[A-Za-z]{1,}" title="Enter only character">
            <br>
            <input type="text" class="form-control" name="lname" placeholder="Last name" required pattern="[A-Za-z]{1,}" title="Enter only character">

            <span id="result" class="text-danger">
                <?php echo $_SESSION['message'] ?>
            </span>

            <br>
            <input type="submit" class="btn btn-primary btn btn-block" name="btnRegister" value="Sign Up">
            <br>
            <a href="sign-in.html">
                <p class="text-center">Already sign up? Login here</p>
            </a>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

