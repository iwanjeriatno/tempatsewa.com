<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
		<link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>

    <body>

        <!-- Loader -->
    	<!-- <div class="loader">
    		<div class="loader-img"></div>
    	</div> -->

		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="index.php?menu=clients">Clients</a></li>
					</ul>

				</div>
			</div>
		</nav>



        <?php

            if(isset($_GET['menu'])) {
                // clients
                if($_GET['menu'] == 'clients') {
                    require 'clients/tampil.php';
                }
                else if($_GET['menu'] == 'tambah-clients') {
                    require 'clients/form_tambah.php';
                }
                else if($_GET['menu'] == 'ubah-clients') {
                    require 'clients/form_ubah.php';
                }
                else if($_GET['menu'] == 'hapus-clients') {
                    require 'clients/hapus.php';
                }

                // default
                else {
                    require 'dashboard.php';
                }
            }
            else {
                require 'dashboard.php';
            }

        ?>





        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/retina-1.1.0.min.js"></script>
        <script src="../assets/js/waypoints.min.js"></script>
        <script src="../assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
