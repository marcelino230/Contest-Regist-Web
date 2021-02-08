<?php
// session_start();
include_once 'config/koneksi.php';

if(!isset($_SESSION['userSession'])) {
  header("Location: login.php");
}

$query = $mysqli->query("SELECT * FROM tb_user WHERE id=".$_SESSION['userSession']);
// $mysqli->close();

// var_dump($_SESSION);
// echo $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include "title.php"; ?>
    <?php include "header.php"; ?>

</head>
<?php include "proses_user.php"; ?>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <?php include "navbar.php"; ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php include "navigation.php"; ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2>Form membuat user baru</h2>
                <hr class="star-primary">
                <?php
                if(isset($msg)){
                    echo $msg;
                } ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" placeholder="isi nama" id="nama" name="nama" required data-validation-required-message="harap di isi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" placeholder="isi password" id="pass" name="pass" required data-validation-required-message="harap di isi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>                        
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Level</label>
                            <div class="col-xs-12">
                                <select class="form-control" name="level" required>
                                    <option value="selected">-- Pilih Level --</option>
                                    <option>Administrator</option>
                                    <option>Operator</option>
                                </select>
                            </div>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" name="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>                 
        </div>           
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <?php include "footer.php"; ?>

</body>

</html>

