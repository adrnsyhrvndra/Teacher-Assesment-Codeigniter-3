
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title><?php echo $judul; ?></title>

<meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />

<!-- Favicon -->

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	
<!-- Morris Charts CSS -->

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

<!-- Data table CSS -->

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

<!-- multi-select CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>

<!-- Calendar CSS -->	
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css"/>

<!-- select2 CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>

<!-- bootstrap-select CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

<!--alerts CSS -->
<link href="<?php echo base_url(); ?>assets/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/themify-icons.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/animate.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/simple-line-icons.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/linea-icon.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/pe-icon-7-styles.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/filter.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/dist/css/lightgallery.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>


	<div class="preloader-it">

		<div class="la-anim-1"></div>

	</div>

    <div class="wrapper theme-1-active pimary-color-green">
		
		<nav class="navbar navbar-inverse navbar-fixed-top">

			<div class="mobile-only-brand pull-left">

				<div class="nav-header pull-left">

					<div class="logo-wrap ">

						<a href="?page=dashboard">

							<img class="brand-img" src="<?php echo base_url(); ?>assets/img/Polban panjang6.png" alt="brand"/>

						</a>

					</div>

				</div>	

				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);">
					
					<i class="zmdi zmdi-menu"></i>

				</a>

				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);">

					<i class="zmdi zmdi-search"></i>

				</a>

				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);">

					<i class="zmdi zmdi-more"></i>

				</a>

				<form id="search_form" role="search" class="top-nav-search collapse pull-left">

					<div class="input-group">

						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">

						<span class="input-group-btn">

						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true">

							<i class="zmdi zmdi-search"></i>

						</button>

						</span>

					</div>

				</form>

			</div>

			<div id="mobile_only_nav" class="mobile-only-nav pull-right">

				<ul class="nav navbar-right top-nav pull-right">
					
					<li>

						<a href="<?php echo base_url(); ?>login/logout"> <i class="fa fa-power-off"> </i> <strong> LOGOUT </strong> </a>

					</li>

				</ul>

			</div>

		</nav>
		
		<div class="fixed-sidebar-left">

			<ul class="nav navbar-nav side-nav nicescroll-bar">
				
				<li class="navigation-header">

					<span>Data utama</span> 
					<i class="zmdi zmdi-more"></i>

				</li>

				<li>

					<a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr" 

						<?php if($this->uri->segment(2)=="index" || $this->uri->segment(2)=="changePassword") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-dashboard (alias) mr-20"></i>

							<span class="right-nav-text">Dashboard</span>

						</div>

						<div class="pull-right">

							<i class="zmdi zmdi-caret-down"></i>

						</div>

						<div class="clearfix"></div>

					</a>

					<ul id="dashboard_dr" class="collapse collapse-level-1">
						
						<li>

							<a href="<?php echo base_url(); ?>admin/index" 

								<?php if($this->uri->segment(2)=="index") {echo 'class="active-page"';}?>>

								Data statistik

							</a>

						</li>

						<li>

							<a href="<?php echo base_url(); ?>admin/changePassword" 

								<?php if($this->uri->segment(2)=="changePassword") {echo 'class="active-page"';}?>>

								Change password

							</a>

						</li>

					</ul>

				</li>

				<li>

					<!-- Data Admin -->

					<a href="<?php echo base_url(); ?>admin/admin" data-toggle="collapse"  data-target="#app_dr"

						<?php if($this->uri->segment(2)=="admin" || $this->uri->segment(2)=="adminEdit") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-user mr-20"></i>
							
							<span class="right-nav-text">Admin</span>

					  	</div>

						<div class="pull-right"></div>

						<div class="clearfix"></div>

					</a>

					<!-- Data Dosen -->

					<a href="<?php echo base_url(); ?>admin/dosen" data-toggle="collapse" data-target="#app_dr"

						<?php if($this->uri->segment(2)=="dosen" || $this->uri->segment(2)=="dosenEdit") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="zmdi zmdi-graduation-cap mr-20"></i>
							
							<span class="right-nav-text">Dosen</span>

					  	</div>

						<div class="pull-right"></div>

						<div class="clearfix"></div>

					</a>

					<a href="<?php echo base_url(); ?>admin/matkul" data-toggle="collapse" data-target="#app_dr" <?php  

						if($this->uri->segment(2)=="matkul" || $this->uri->segment(2)=="matkulEdit") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-book mr-20"></i>

							<span class="right-nav-text"> Mata Kuliah </span>

					 	 </div>

						<div class="pull-right"></div>

						<div class="clearfix"></div>

					</a>

					<a href="<?php echo base_url(); ?>admin/mahasiswa" data-toggle="collapse" data-target="#app_dr"

						
						<?php if($this->uri->segment(2)=="mahasiswa") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-group (alias) mr-20"></i>

							<span class="right-nav-text"> Mahasiswa </span>

					 	</div>

						<div class="pull-right"></div>

						<div class="clearfix"></div>

					</a>

					<a href="<?php echo base_url(); ?>admin/pertanyaan" data-toggle="collapse" data-target="#app_dr" 

						<?php if($this->uri->segment(2)=="pertanyaan" || $this->uri->segment(2)=="pertanyaanEdit") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-question-circle-o mr-20"></i>

							<span class="right-nav-text"> Pertanyaan </span>

					  	</div>

						<div class="pull-right"></div>

						<div class="clearfix"></div>

					</a>

					<a href="<?php echo base_url(); ?>admin/pengajaran" data-toggle="collapse" data-target="#app_dr"

						<?php if($this->uri->segment(2)=="pengajaran" || $this->uri->segment(2)=="pengajaranEdit" || $this->uri->segment(2)=="tambahDataPengajaran") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="zmdi zmdi-developer-board mr-20"></i>

							<span class="right-nav-text"> Pengajaran </span>

					  	</div>

						<div class="pull-right"></div>

						<div class="clearfix"></div>

					</a>

				</li>

				<li><hr class="light-grey-hr mb-10"/></li>

				<li class="navigation-header">

					<span>Data jawaban</span> 

					<i class="zmdi zmdi-more"></i>

				</li>

				<li>

					<a href="<?php echo base_url(); ?>admin/pilih_jawaban_skala"

						<?php if($this->uri->segment(2)=="pilih_jawaban_skala" || $this->uri->segment(2)=="jawaban_skala") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-list-ul mr-20"></i>

							<span class="right-nav-text">Data jawaban</span>

						</div>

						<div class="clearfix"></div>
						
					</a>

					<a href="<?php echo base_url(); ?>admin/pilih_jawaban_esai"
					
						<?php if($this->uri->segment(2)=="pilih_jawaban_esai" || $this->uri->segment(2)=="jawaban_esai") {echo 'class="active"';}

						?>>

						<div class="pull-left">

							<i class="fa fa-list-ul mr-20"></i>

							<span class="right-nav-text">Saran dan masukan</span>

						</div>

						<div class="clearfix"></div>

					</a>

				</li>

			</ul>

		</div>	
		
		<!-- Right Sidebar Backdrop -->

		<div class="right-sidebar-backdrop"></div>

		<div class="page-wrapper">

	        <div class="container-fluid pt-25">	        	

	        	<div class="panel panel-default border-panel card-view">

		        	<div class="panel-heading">

						<div class="pull-left">

							<h6 class="panel-title txt-dark">Selamat datang <?php echo $Namaku['nama_admin']; ?></h6>

						</div>

						<div class="clearfix"></div>

					</div>
		      
		        	<div class="panel-wrapper collapse in">

		                <div  class="panel-body">
		                   
	                        <ol class="breadcrumb"  style="font-size:15px; float:left;">
	                        	
								<?php if($this->uri->segment(2)=="index") { ?>

									<li class="active">   

		                                <span>

			                                <i class="fa fa-dashboard (alias)"></i> Dashboard

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-users'></i> data statistik

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="changePassword") { ?>

									<li class="active">   

		                                <span>

			                                <i class="fa fa-dashboard (alias)"></i> Dashboard

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='zmdi zmdi-key'></i> ganti password

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="pertanyaan") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-question-circle-o'></i> data pertanyaan

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="pertanyaanEdit") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                	<a href="<?php echo base_url(); ?>admin/pertanyaan">

		                                    	<i class='fa fa-question-circle-o'></i> data pertanyaan

		                                    </a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-pencil-square-o'></i> edit data pertanyaan

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="admin") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-user'></i> data admin

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="adminEdit") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                	<a href="<?php echo base_url(); ?>admin/admin">

		                                    	<i class='fa fa-user'></i> data admin

		                                    </a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-pencil-square-o'></i> edit data admin

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="matkul") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-book'></i> data matkul

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="matkulEdit") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                	<a href="<?php echo base_url(); ?>admin/matkul">

		                                    	<i class='fa fa-book'></i> data matkul

		                                    </a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-pencil-square-o'></i> edit data matkul

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="dosen") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='zmdi zmdi-graduation-cap'></i> data dosen

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="dosenEdit") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                	<a href="<?php echo base_url(); ?>admin/dosen">

		                                    	<i class='zmdi zmdi-graduation-cap'></i> data dosen

		                                    </a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-pencil-square-o'></i> edit data dosen

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="mahasiswa") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-group (alias)'></i> data mahasiswa

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="pengajaran") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='zmdi zmdi-developer-board'></i> data pengajaran

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="tambahDataPengajaran") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li>

		                                <span>

		                                	<a href="<?php echo base_url(); ?>admin/pengajaran">

		                                    	<i class='zmdi zmdi-developer-board'></i> data pengajaran

		                                    </a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-plus'></i> tambah data pengajaran

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="pengajaranEdit") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                	<a href="<?php echo base_url(); ?>admin/pengajaran">

		                                    	<i class='zmdi zmdi-developer-board'></i> data pengajaran

		                                    </a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-pencil-square-o'></i> edit data pengajaran

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="pilih_jawaban_skala") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-list-ul'></i> pilih data jawaban nilai

		                                </span>

		                            </li>

	                            <?php } ?>
	                            
								<?php if($this->uri->segment(2)=="jawaban_skala") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li>

		                                <span>

											<a href="<?php echo base_url(); ?>admin/pilih_jawaban_skala">										

		                                    	<i class='fa fa-list-ul'></i> pilih data jawaban nilai

											</a>

		                                </span>

		                            </li>

									<li class="active">

		                                <span>

											<i class='fa fa-list-ul'></i> data jawaban <?php echo $data_dosen['nama_dosen']; ?> 

		                                </span>

		                            </li>

	                            <?php } ?>

	                            <?php if($this->uri->segment(2)=="pilih_jawaban_esai") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li class="active">

		                                <span>

		                                    <i class='fa fa-list-ul'></i> pilih data saran & masukan

		                                </span>

		                            </li>

	                            <?php } ?>
	                            
								<?php if($this->uri->segment(2)=="jawaban_esai") { ?>

									<li>   

		                                <span>

		                                    <a href="<?php echo base_url(); ?>admin/index">

			                                	<i class="fa fa-dashboard (alias)"></i> Dashboard

			                              	</a>

		                                </span>

		                            </li>

		                            <li>

		                                <span>

											<a href="<?php echo base_url(); ?>admin/pilih_jawaban_esai">										

		                                    	<i class='fa fa-list-ul'></i> pilih data saran & masukan

											</a>

		                                </span>

		                            </li>

									<li class="active">

		                                <span>

											<i class='fa fa-list-ul'></i> data saran & masukan <?php echo $data_dosen['nama_dosen']; ?> 

		                                </span>

		                            </li>

	                            <?php } ?>

	                        </ol>

		                </div>

		            </div>

		        </div>