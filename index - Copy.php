<?php include('navbar.php'); ?>

<html>

<head>
    <title>Ayo Sekolah</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/css_index.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
	
	


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">AYO SEKOLAH</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#paud">TK/PAUD</a>
                    </li>
                    <li>
                        <a href="#sd">SD</a>
                    </li>
                    <li>
                        <a href="#smp">SMP</a>
                    </li>
					
					<li>
                        <a href="#sma">SMA/SMK</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Berangkat!</h1>
                        <h3>Situs Pencarian Sekolahnya Orang Depok</h3>
                        <hr class="intro-divider">
                        <!--<ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-smile-o" aria-hidden="true"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-rocket" aria-hidden="true"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
	<!-- bagian TK atau PAUD-->
	<a  name="paud"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Pendidikan Anak Usia Dini &<br>
					Taman Kanak Kanak</h2>
                    <p class="lead"> Pendidikan Taman Kanak-kanak yang sering disebut TK merupakan
					salah satu bentuk PAUD pendidikan anak usia dini yang memiliki peran penting untuk
					mengembangkan kepribadian anak serta mempersiapkan mereka memasuki jenjang pendidikan
					selanjutnya. Pendidikan TK merupakan jembatan antar lingkungan keluarga dengan masyarakat
					yang lebih luas yaitu sekolah dasar dan lingkungan lainnya.</p>
					
					<a href="isi_paud.php" class="btn btn-default btn-lg"><i class="fa fa-rocket"
					aria-hidden="true"></i> <span class="network-name"> Lihat Daftar PAUD & TK Kota Depok di Sini</span></a>
                </div>
				<br>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/1.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.bagian TK atau PAUD END -->
	
	<!--bagian SD-->
	<a name="sd"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sekolah Dasar</h2>
                    <p class="lead">Sekolah dasar (disingkat SD) adalah jenjang paling
					dasar pada pendidikan formal di Indonesia. Sekolah dasar ditempuh dalam waktu 6 tahun,
					mulai dari kelas 1 sampai kelas 6. Lulusan sekolah dasar dapat melanjutkan pendidikan
					ke Sekolah Menengah Pertama (atau sederajat.</p>
					
					<a href="isi_sd.php" class="btn btn-default btn-lg"><i class="fa fa-smile-o"
					aria-hidden="true"></i> <span class="network-name"> Lihat Daftar SD Kota Depok di Sini</span></a>
                </div>
				<br>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/2.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.bagian SD END-->
	
	<!--bagian SMP looping CSS section a atau bagian paud-->
	<a name="smp"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sekolah Menengah Pertama</h2>
                    <p class="lead">Sekolah Menengah Pertama (disingkat SMP) adalah
					jenjang pendidikan dasar pada pendidikan formal di Indonesia setelah lulus
					dari Sekolah Dasar (SD atau sederajat). Sekolah menengah pertama ditempuh
					dalam kurun waktu 3 tahun (kelas 7 sampai kelas 9). Dulunya sekolah menengah
					pertama ini pernah disebut sebagai Sekolah Lanjutan Tingkat Pertama (SLTP),
					hingga pada tahun ajaran 2003-2004 SLTP diganti dengan sebutan Sekolah Menengah Pertama (SMP).
					</p>
					
					<a href="isi_smp.php" class="btn btn-default btn-lg"><i class="fa fa-meh-o"
					aria-hidden="true"></i> <span class="network-name"> Lihat Daftar SMP Kota Depok di Sini</span></a>					
					
                </div>
				<br>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/3.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.bagian SMP END-->

	<!--bagian SMA/SMK looping css SD-->
	<a name="sma"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sekolah Menengah Atas</h2>
                    <p class="lead">Sekolah Menengah Atas 
					adalah jenjang pendidikan menengah pada pendidikan formal
					di Indonesia setelah lulus Sekolah Menengah Pertama (atau sederajat).
					Sekolah menengah atas ditempuh dalam waktu 3 tahun, mulai dari kelas 10 sampai kelas 12.
					
					Sekolah Menengah Kejuruan (SMK) adalah salah satu bentuk satuan pendidikan formal yang
					menyelenggarakan pendidikan kejuruan pada jenjang pendidikan menengah sebagai lanjutan dari
					SMP/MTs atau bentuk lain yang sederajat atau lanjutan dari hasil belajar yang diakui sama/setara
					SMP/MTs. Di SMK terdapat banyak sekali Program Keahlian.
					</p>
					
					<a href="isi_sma.php" class="btn btn-default btn-lg"><i class="fa fa-meh-o"
					aria-hidden="true"></i> <span class="network-name"> Lihat Daftar SMA/SMK Kota Depok di Sini</span></a>
					
                </div>
				<br>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/4.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.bagian SMA/SMK END-->
	
	<?php include('footer.php')?>

</body>

</html>
