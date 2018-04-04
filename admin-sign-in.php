<?php session_start(); 

    require "php/encrypt-decrypt.php";

    if(isset($_POST['sign-in'])){
        
        $conn = new mysqli("localhost","root","","project");

        // Get email and password from html page
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        // encrypt data
        $encrypt_email = convert_string('e',$email);
        $encrypt_password = convert_string('e',$password);

        // Check email in database
        $data = $conn->query("SELECT * from admin_info where admin_email = '".$encrypt_email."' ");

        // if yes
        if($data->num_rows > 0){
            $_SESSION['admin_set'] = "admin";
            $_SESSION['admin_logged'] = true;
            $_SESSION['admin_encrypt_email']=$encrypt_email;

            header("Location: admin-panel/dashboard.php?user-table=1&music-table=1&album-table=1");
            exit();

        }else{
            $_SESSION['error']= "Invalid email or password. Please try again";

        }

    }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon | Admin Sign in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
    <script src="js/homepage-player.js"></script>
    <!-- Bootstrap -->
    <script src="dist1/bootstrap.bundle.js"></script>
    <!-- Font Awesome -->
    <script src="dist1/fontawesome-all.js"></script>
</head>

<style>
    body{
    background-color: #333;
    margin-top: 10.5%;  
}
</style>

<body>

    <div id="wrapper">
        <!-- header section -> navbar  -->

        <header id="navigation">
            <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                        <strong>Neon</strong>
                        <small>Admin</small>
                        <span>
                            <i class="fas fa-play"></i>
                        </span>
                    </a>
            </nav>
        </header>

        <!-- Login Form here -->

        <section id="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h1 class="display-2 text-center text-light">Admin Sign in</h1>

                        <br>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form action="" method="post" class="was-validated">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="email" required pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$"
                                        title="Please Enter format of email correctly">
                                    <br>
                                    <input type="password" class="form-control" name="password" placeholder="password" required>
                                    <br>
                                    <button class="btn btn-block btn-primary" name="sign-in">Sign In</button>
                                    <br>
                                    <span class="text-danger">
                                        <?php echo $_SESSION['error']; ?>
                                    </span>

                                </form>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>

        <!-- Footer -> Copyright and some social media -->
        <footer>
            <div class="container-fluid">
                <div class="container py-4 text-center text-light">
                    <p> &copy;Copyright Neon</p>
                    <p>
                        <span>
                            <a href="http://www.facebook.com">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                            <a href="http://www.instagram.com">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </footer>
        </div>

        <!-- Clear session from php -->
        <!-- <?php echo $_SESSION['passchange']=""; $_SESSION['error']=""; $_SESSION['reg_sucesses']='';?> -->
  

</body>

</html>