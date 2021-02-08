 <!-- Collect the nav links, forms, and other content for toggling -->
            <?php  
            if (@$_SESSION['level']=='Administrator'){
            ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>                   
                    <li class="page-scroll">
                        <a href="user.php">user</a>
                    </li>
                    <li class="page-scroll">
                        <a href="jk.php">master jenis kelamin</a>
                    </li>
                    <li class="page-scroll">
                        <a href="agama.php">master jenis agama</a>
                    </li>
                    <li class="page-scroll">
                        <a href="transaksi.php">transaksi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="laporan.php">laporan</a>
                    </li> 
                    <li class="page-scroll">
                        <a href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
            <?php } if (@$_SESSION['level']=='Operator') {
            ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="transaksi.php">transaksi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
            <?php } ?>

            <!-- /.navbar-collapse -->