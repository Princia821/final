<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register</title>
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
                            <p class="font-size-15 text-muted mt-3"><b>Future of Africa</b> Sign up</p>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5>Register as an adopter</h5>
                                            <p class="text-muted">Join in Eradicating Streetism in Ghana by Adopting a kid</p>
                                        </div>

<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: login.php");
    die;
}

if (isset($_POST['signup'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; }

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (name, email,mobile, password)
					VALUES ('$name', '$email','$mobile', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				header("Location: login.php");
                die;
				$name = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo ' <h6 style = "color:red;">' . "oops, something went wrong". "</H6>";
			}
		} else {
			echo ' <h6 style = "color:red;">' . "email already exists". "</H6>";
		}
		
	} else {
		echo ' <h6 style = "color:red;">' . "passwords do not match". "</H6>";
	}
}

?>

                                    
                                        <div class="mt-4 pt-3">
                                        <form action="" method="POST" class="login-email">
                                                <div class="mb-3">
                                                    <label class="fw-semibold" for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter your fullname" name="name" value="<?php echo $name; ?>" required>       
                                                </div>
            
                                                <div class="mb-3">
                                                    <label class="fw-semibold" for="useremail">Email</label>
                                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="email" value="<?php echo $email; ?>" required>        
                                                </div>

                                                <div class="mb-3">
                                                    <label class="fw-semibold" for="mobile">Mobile</label>
                                                    <input type="number" class="form-control" id="mobile" placeholder="Enter Phone Number" name="mobile" value="<?php echo $mobile; ?>" required> 
                                                    
                                                </div> 
                        
                                            
                                                <div class="mb-3">
                                                    <label class="fw-semibold" for="userpassword">Password</label>
                                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password" value="<?php echo $_POST['password']; ?>" required>       
                                                </div>

                                                <div class="mb-3">
                                                    <label class="fw-semibold" for="userpassword"> Confirm Password</label>
                                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>       
                                                </div>
                                                       
                                                <div class="mt-4 text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="signup" value="register" onclick = "return confirm('Registered Successfully!')">Register</button>
                                                </div>


                                                <div class="mt-4 text-center">
                                                    <p class="mb-0 text-muted">By registering you agree to the FOA <a href="auth-register.html#" class="text-primary fw-semibold text-decoration-underline">Terms of Use</a></p>
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
                            <p>Already have an account ? <a href="login.php" class="fw-semibold text-decoration-underline"> Login </a> </p>
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
