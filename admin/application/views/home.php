
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="../favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

		<!-- Title -->
		<title>Home | BHBC Admin</title>
		<?php $this->load->view('common/metalinks'); ?>
	</head>
	<body class="app sidebar-mini rtl">
		
		<?php $this->load->view('common/header'); ?>

		<?php $this->load->view('common/sidebar'); ?>
				<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Home</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('home');;?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Home</li>
							</ol>
						</div>
						<div class="row row-cards">
							<div class=" col-lg-12">
								<h1>Welcome to DailyNewsOnline!</h1>
								<span>Manage the Daily News Online Portal From Here.<br>Website Performance Statistics Comming Soon.....</span>
							</div>
						</div>
					</div>
					<!--footer-->
					
					<!-- End Footer-->
				</div>
			</div>
			<?php $this->load->view('common/footer'); ?>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		
	</body>
</html>