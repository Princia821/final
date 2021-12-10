
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | FOA - Future of Africa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Pichforest" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Dark Mode Css-->
        <link href="assets/css/dark-layout.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="text-center mb-5">
                            <a href="index.html" class="auth-logo">
                                <!-- <img src="assets/images/logo-dark.png" alt="" height="28" class="auth-logo-dark">
                                <img src="assets/images/logo-light.png" alt="" height="28" class="auth-logo-light"> -->
                            </a>
                            <p class="font-size-15 text-muted mt-3">FOA Family <b>Login </b></p>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">

                                        <div>
                                            <h5>Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to adopt a kid. <br>Help in the eradication of child Streetism </p>
                                        </div>
                                        <div class="mt-4 pt-3">
                                        <?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['name'])) {
    header("Location: welcome.php"); 
    die;
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
		header("Location: welcome.php");
        die;
	} else {
		echo ' <h6 style = "color:red;">' . "Invalid email or password, Try again!". "</H6>";
	}
}

?>
                                        <form action="" method="POST" class="login-email">
                                                <div class="mb-3">
                                                    <label for="useremail" class="fw-semibold">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                                </div>
                        
                                                <div class="mb-3 mb-4">
                                                    <label for="userpassword" class="fw-semibold">Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                                                </div>

                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <div class="form-check">    
                                                            <input type="checkbox" class="form-check-input font-size-16" id="remember-check">
                                                            <label class="form-check-label" for="remember-check">Remember me</label>
                                                        </div>
                                                    </div>  
                                                    <div class="col-6">
                                                        <div class="text-end">
                                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="login" value="submit">Log In</button>
                                                        </div>
                                                    </div>
                                                </div>
                            
                                                    
                                            </form>
                                        </div>
                    
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 bg-auth h-100 d-none d-lg-block">
                                        <div class="bg-overlay"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="register.php" class="fw-semibold text-decoration-underline text-primary"> Sign up </a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> <b>FOA</b>. Crafted with <i class="mdi mdi-heart text-danger"></i> by Princia Ishimwe</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end account page -->
        

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

