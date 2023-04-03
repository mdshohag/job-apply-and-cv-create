<?php
 session_start();
	if(!isset($_SESSION['customer_id'])){
		
		echo "<script>location.href='login.php';</script>";
	}
	require_once('cls_dbconfig.php');
	function __autoload($classname){
	  require_once("$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
		$db = $cls_dbconfig->connection();
	
	
	$cls_meassage = new cls_meassage();
	
	$all_message = $cls_meassage->all_show_meassge_notifaction();
	//$all_data = $all_message->fetch_assoc();
	
	
	
	//error_reporting(0);
	
		
		  
?>



<!doctype html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/aapple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/afavicon.png">
	
	<link rel="stylesheet" href="alert/alertify.min.css">
   <link rel="stylesheet" href="alert/default.min.css">
   
    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
<script>

  
    function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
 var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("#printableArea", {
        test: true, // test documents are free, but watermarked
        type: "pdf",
        document_content: document.querySelector('html').innerHTML, // use this page's HTML
        // document_content: "<h1>Hello world!</h1>",               // or supply HTML directly
        // document_url: "http://example.com/your-page",            // or use a URL
        // javascript: true,                                        // enable JavaScript processing
        // prince_options: {
        //   media: "screen",                                       // use screen styles instead of print styles
        // }
      })
	  }
</script>
   
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a href="index.php">ADMIN</a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard </span></a></li>
						
						<!--
						<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
						
						
						--->
						
					</ul>
				</nav>
			</div>
			
		</div>
		<!-- END SIDEBAR -->
		
		
		
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
					
						<ul class="nav navbar-nav navbar-right">
						
						<li><a href="#" id="signouts"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>						
						</ul>
					</div>
				</div>
			</nav>