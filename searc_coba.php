<?php
include('navbar.php'); 
include "koneksi.php";
$name= $_POST['nama']; //get the nama value from form
$q = "SELECT * from sekolah where nama like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
?>
<html>
	<link href="css/isi.css" rel="stylesheet">
	<!-- Page Content -->
    <div class="container">
        
	
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sekolah Dasar
                    <small>Kota Depok</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
             <?php
        while ($row = mysql_fetch_array($result)) {


      echo' <div class="row">';
      echo'  <div class="col-md-5">';
      echo ' <h3>'.$row['nama'].'</h3>';
       echo ' <h3>'.$row['id_jenjang'].'</h3>';
      echo  ' <h4>'.$row['alamat'].'</h4>';
      
      if($row['status']==0)
                     {
                     echo '<p>Swasta</p>';
                     }
                     else
                     {
                     echo '<p>Negeri</p>';
                     }
      echo'</div>';
      echo'  </div>';
   echo'   <hr>';
  } 
        ?>
      
        
    </div>
    <!-- /.container -->
</html>