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
<?php include "proses_laporan.php"; ?>
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
            </div>
        </div>        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center" >
                <h3>Daftar Laporan</h3>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Umur</th>                                            
                                    <th>Alamat</th>                                            
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggal Daftar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tb_transaksi";
                            $result = $mysqli->query($sql);
                            $i=1;
                            while($row=$result->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['nis']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['umur']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['jk']; ?></td>
                                    <td><?php echo $row['agama']; ?></td>
                                    <td><?php echo $row['created']; ?></td>                                                    
                                </tr>
                            <?php
                                $i++;
                            }
                                $mysqli->close();
                            ?>                                      
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>                  
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

