
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0670f0">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="../favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

		<!-- Title -->
		<title>Listing Image Management | BHBC Admin</title>
		<?php $this->load->view('common/metalinks');?>
		<!-- Data table css -->
		<link href="<?php echo base_url('css/dataTables.bootstrap4.min.css');?>" rel="stylesheet" />

	</head>
	<body class="app sidebar-mini rtl">
		<?php $this->load->view('common/header');?>
		<?php $this->load->view('common/sidebar');?>

				<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Image Management</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Image Management</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">									
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th class="wd-15p">Image Title</th>
														<th class="wd-25p">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														for($i = 1; $i<50; $i++){
													?>
													<tr>
														<td>Undeclared war: Pakistani plane killed by air force></td>
														<td><a href="javascript:void(0);" class="btn btn-primary">Delete</a></td>
													</tr>
													<?php
														}
													?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('common/footer');?>
		<!-- Data table js -->
		<!-- Data tables -->
		<script src="<?php echo base_url('js/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('js/dataTables.bootstrap4.min.js');?>"></script>
		<script>
			$(function(e) {
				$('#example').DataTable();
			} );
		</script>


	</body>
</html>