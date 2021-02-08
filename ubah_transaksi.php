<?php
// session_start();
include_once 'config/koneksi.php';

if(!isset($_SESSION['userSession'])) {
  header("Location: login.php");
}

$id = $_GET['id'];
$sql = "SELECT * FROM tb_transaksi WHERE id='$id'";
$result = $mysqli->query($sql);
$transaksi=$result->fetch_assoc(); //$mysqli->close();

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

    <?php include "title.php" ?>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php include "proses_ubah_transaksi.php"; ?>
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
                <h2>Form transaksi</h2>
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
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $transaksi['id']; ?>" />
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <label for="nis">Nomor Induk Siswa (NIS)</label>
                            <input type="text" class="form-control" placeholder="isi NIS" id="nis" name="nis" value="<?php echo $transaksi['nis']; ?>" required data-validation-required-message="harap di isi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" class="form-control" placeholder="isi nama siswa" id="nama" name="nama" value="<?php echo $transaksi['nama']; ?>" required data-validation-required-message="harap di isi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>                        
                    <div class="row control-group">
                        <div class="form-group col-xs-12 ">
                            <label for="umur">Umur</label>
                            <input type="text" class="form-control" placeholder="isi umur siswa" id="umur" name="umur" value="<?php echo $transaksi['umur']; ?>" required data-validation-required-message="harap di isi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                   <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <label for="alamat">Alamat</label>
                            <textarea rows="5" class="form-control" placeholder="isi alamat siswa" id="alamat" name="alamat" value="" required data-validation-required-message="harap di isi"><?php echo $transaksi['alamat']; ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" name="jk" required="true">
                            <?php
                                $konek = mysqli_connect("localhost","root","","db_mreza");
                                $query = "select * from tb_jk";
                                $hasil = mysqli_query($konek,$query);
                                echo "<option value=selected>Pilih</option>";
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[jenis]>$data[jenis]</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <label for="agama">Pilih Agama</label>
                            <select class="form-control" name="agama" required="true">
                            <?php
                                $konek = mysqli_connect("localhost","root","","db_mreza");
                                $query = "select * from tb_agama";
                                $hasil = mysqli_query($konek,$query);
                                echo "<option value=selected>Pilih</option>";
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[jenis]>$data[jenis]</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" name="update" class="btn btn-success btn-lg">Send</button>
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

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $("#umur").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
</script>
    