<?php include('navbar.php'); 

include('koneksi.php');
/* Koneksi ke Database */
$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
/*-------------------------------*/
?>
<html>
	<link href="css/isi.css" rel="stylesheet">
	<!-- Page Content -->
    <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <form method="get" action="" class="form-inline">
                    <div class="form-group">
                             <input type="text" class="form-control" id="usersearch" name="usersearch" placeholder="Nama SMA" >
                      </div>  
                          <button type="submit" class="btn btn-default">OK</button>
                 </form>
            </div>
        </div>
	
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sekolah Menengah Atas dan Kejuruan
                    <small>Kota Depok</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <?php
        include('search_sma.php');
        ?>
      
        
    </div>
    <!-- /.container -->
</html>
<?php 
mysqli_close($dbc);
include('footer.php'); 
?>