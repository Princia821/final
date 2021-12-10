<?php 

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Tech Final Project- Dashboard</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="assets/index/css/styles.css" rel="stylesheet" />
    </head> 

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                <div class="card">
                <div class="card-body">
                <h3 class="card-title"> Welcome - <?php echo $_SESSION['name']?></h3>
                <h4>First of all, thank you so much for expressing your interest in adopting one of FOA kids. We appreciate</h4>

                <h6>However, we have no kids available for adoption, they are all adopted. <br> But don't worry, we have your information we will alert you when we recruit other kids from  the street. <h6> 
                 <div> <a href="logout.php" class="btn btn-primary">Logout</a> </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

