<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
		<meta name="Author" content="SPRUKO™">
		<meta name="Keywords" content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix"/>

		<!-- Title -->
		<title> قالب مدیریتی ولکس </title>

        <!-- styles -->
        <!-- Favicon -->
		<link rel="icon" href="public/images/admin/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="public/plugins/icons/icons.css" rel="stylesheet">

		<!-- Bootstrap css -->
		<link href="public/plugins/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="public/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="public/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!--  Sidemenu css -->
		<link id="theme" rel="stylesheet" href="public/css/admin/sidemenu.css">

		
		<!--  Owl-carousel css-->
		<link href="public/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Maps css -->
		<link href="public/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">


		<!--- Style css --->
		<link href="public/css/admin/style.css" rel="stylesheet">
		<link href="public/css/admin/style-dark.css" rel="stylesheet">
		<link href="public/css/admin/boxed.css" rel="stylesheet">
		<link href="public/css/admin/dark-boxed.css" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="public/css/admin/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="public/css/admin/animate.css" rel="stylesheet">

		<!---Switcher css-->
		<link href="public/switcher/css/switcher-rtl.css" rel="stylesheet">
		<link href="public/switcher/demo.css" rel="stylesheet">

    </head>

    <body class="main-body app sidebar-mini">
        <!-- Loader -->
		<div id="global-loader">
			<img src="public/images/admin/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">
            <!-- main-sidebar -->
            <!-- main-sidebar -->
			<?php
				include_once "view/admin/layouts/sidebar.php";
			?>
			<!-- main-sidebar -->
            <!-- main-content -->
            <?php
				include_once "view/admin/layouts/top-header.php";
			?>
		</div>
			<!-- /main-header -->
            <!-- Container open -->
            <div class="container-fluid">
			<?php
				include_once "view/admin/layouts/bread-crumb.php";
			?>