<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo">
<link rel="shortcut icon" href="img/favicon.ico">

<title>Question interface</title>

	<link href="css_user/plugins.css" rel="stylesheet">
	<link href="css_user/style.css" rel="stylesheet">

	<link href="range-slider/rangeslider.css" rel="stylesheet">

	<!-- Link untuk icon font awesome -->

    <link href="Font awesome/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet">

</head>
<body>

 <?php 

		 @session_start();

			include 'koneksi.php';

			  if (@!$_SESSION['kode_matkul']) {
    
			  	header("location:form_pertanyaan_1.php");

		  }

			  if (@!$_SESSION['nim']) {
	    
				  	header("location:../index.php");

			  }

  ?>

<div class="body-inner">

	<header id="header" data-fullwidth="true">
		
		<div class="header-inner">
			
			<div class="container">

				<div id="logo"> 
					
					<img src="img/Polban panjang1.png" alt="">
					
				</div>

				<div id="mainMenu-trigger">

					<a class="lines-button x"><span class="lines"></span></a>

				</div>

				<div id="mainMenu">

					<div class="container">

						<nav>
							
							<ul>

								<li><a href="logout.php">Logout</a></li>

							</ul>

						</nav>

					</div>

				</div>

			</div>

		</div>

	</header>

	<section id="page-title" style="background:white;">
		
		<div class="container" >

			<div class="page-title">

				<center>

					<img src="img/Polban-3.png" alt="">

				</center>

				<h3 class="mt-2">Selamat datang di website Universitas Polban</h3>
				<span>Assuring your future.</span>

			</div>

		</div>

	</section>

	<section>

		<div class="container">
		
			<div class="row justify-content-center">
				
				<div class="col-lg-10 col-sm-10">
					
					<div class="card">
			
						<div class="card-header">

							<div class="row justify-content-center">

								<div class="col-lg-6 text-center">
								
									<h5>Informasi pengisian</h5>

									<hr>

								</div>

							</div>

							<div class="row justify-content-center mt-3">
													
								<div class="col-lg-12">

									<table class="table table-bordered">
										
										<thead>

											<tr>

												<th scope="col">Nama penilai</th>

												<th scope="col">Kelas</th>

												<th scope="col">Dosen yang dinilai</th>

											</tr>

										</thead>

										<tbody>

											<tr>
												
												<td>
													
													<h6 class="text-muted">

														<?php

													        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'");

													        while ($DATA = mysqli_fetch_array($QUERY)){

													        	if ($_SESSION['nim']) {

													               echo $DATA['nama'];

													          

															
														?>

														<?php 

																}

													        };


														 ?>

													</h6>

												</td>

												<td>

													<h6 class="text-muted">

													<?php

												        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'");

												        while ($DATA = mysqli_fetch_array($QUERY)){

												        	if ($_SESSION['nim']) {

												               echo $DATA['kelas'];

												          }

												        };

														
													?>

													</h6>
													
												</td>

												<td>

													<h6 class="text-muted">

													<?php

											        $QUERY = mysqli_query($CONNECT,"SELECT  tb_dosen. *,  tb_matkul. * FROM tb_dosen 

                                						INNER JOIN tb_matkul on tb_dosen.kode_dosen=tb_matkul.kode_dosen WHERE kode_matkul='".@$_SESSION['kode_matkul']."'");

											    		while ($DATA = mysqli_fetch_array($QUERY)){

											    		if ($_SESSION['kode_matkul']) {


												        
													?>

													<?php echo $DATA['nama_dosen']; ?> / <?php echo $DATA['matkul_pendek']; ?>

													<?php 

														}

												       };

													 ?>

													</h6>
													
												</td>

											</tr>

										 </tbody>

									</table>

								</div>

							</div>
							
						</div>

						<div class="card-body">

							<div class="row justify-content-center">
								
								<div class="col-lg-10 col-md-10 col-xl-10 col-sm-10 text-center">
									
									<h5>Hasil data pertanyaan</h5>

									<input type="hidden" name="sesi" value="<?php echo date("Y/m/d"); ?>">

								</div>

							</div>
							
							<div class="row justify-content-center mt-4">
									
								<div class="col-lg-10 col-lg-10 col-md-10 col-sm-10">
									
									<div class="table-responsive">

										<table class="table table-hover">

											<thead>

												<tr>

												 	<th>No</th>
													<th>Pertanyaan</th>
													<th>Jawaban</th>

												</tr>

											</thead>

											<tbody>

												<?php 

													$TAMPIL = "SELECT  tb_pertanyaan. *,  tb_jawaban_skala. * FROM 

														tb_pertanyaan 

				                                		INNER JOIN tb_jawaban_skala on tb_pertanyaan.kode_pertanyaan=tb_jawaban_skala.kode_pertanyaan WHERE nim='".@$_SESSION['nim']."'";

													$HASIL 	= mysqli_query($CONNECT, $TAMPIL);

													$ANGKA  = 1;

													while ($ROW = mysqli_fetch_array($HASIL)) {

												 	$ANGKA;
													$KODE_PERTANYAAN 	= $ROW['kode_pertanyaan'];
													$PERTANYAAN 	= $ROW['pertanyaan'];
													$NILAI 				= $ROW['nilai'];

											 	?>
											
												<tr>

													<td><?php echo $ANGKA; ?></td>
													<td><?php echo $PERTANYAAN; ?></td>
													<td><?php echo $NILAI; ?></td>

												</tr>

												<?php $ANGKA++; ?>

												<?php } ?>

											</tbody>

										</table>

									</div>
									
								</div>

							</div>

						</div>

					</div>

					<div class="card mt-3">
						
						<div class="card-body">
							
							<table class="table table-bordered">
										
								<thead>

									<tr>

										<th scope="col">Yang harus dipertahankan</th>

										<th scope="col">Yang harus ditingkatkan</th>

									</tr>

								</thead>

								<tbody>

									<?php 


                                    $TAMPIL = "SELECT * FROM tb_jawaban_esai WHERE nim='".@$_SESSION['nim']."'";

                                    $HASIL  = mysqli_query($CONNECT, $TAMPIL);

                                    $NO = 1;


                                    while ($ROW = mysqli_fetch_array($HASIL)) {


                                        $NO;
                                        $DIPERTAHANKAN            = $ROW['dipertahankan'];
                                        $DITINGKATKAN             = $ROW['ditingkatkan'];


                                     ?>

									<tr>
										
										<td>
											
											<h6 class="text-muted">

												<?php echo $DIPERTAHANKAN; ?>

											</h6>

										</td>

										<td>

											<h6 class="text-muted">

												<?php echo $DITINGKATKAN; ?>

											</h6>
											
										</td>

									</tr>

									<?php $NO++; ?>

									<?php } ?>

								</tbody>

							</table>

						</div>

					</div>

				</div>

			</div>

			<div class="row justify-content-center mt-4">

				<div class="col-lg-10 col-sm-10 text-center">					

					<div class="heading-text heading-plain">

						<h5 class="text-uppercase">Terima kasih														

							<?php

						        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'");

						        while ($DATA = mysqli_fetch_array($QUERY)){

						        	if ($_SESSION['nim']) {

						               echo $DATA['nama'];

						               }

						        };
								
							?>
														 	
						</h5>

						<a href="logout.php" class="btn">Logout</a>

					</div>

		 		</div>

		 	</div>	

		</div>

	</section>

	<footer id="footer" style="background:white;">

		<div class="copyright-content" style="background:white; ">

			<div class="container">

				<div class="copyright-text text-center">
					&copy; 2019 POLBAN - 
					All Rights Reserved - Designed by<a href="http://www.inspiro-media.com/" target="_blank"> tujuhruang</a> 
				</div>

			</div>

		</div>

	</footer>

</div>


<a id="scrollTop">

	<i class="fas fa-arrow-up"></i>
	<i class="fas fa-arrow-up"></i>

</a>

<script src="js_user/jquery.js"></script>
<script src="js_user/plugins.js"></script>

<script src="js_user/functions.js"></script>

<script>
	
	$('.single-item').slick({

		dots: true,
		arrows :false


	});

</script>

<script type="text/javascript">
     
  /* -------------------------------------------------------------
        bootstrapTabControl
    ------------------------------------------------------------- */
    function bootstrapTabControl(){
        var i, items = $('.nav-link'), pane = $('.tab-pane');
        // next
        $('.nexttab').on('click', function(){
            for(i = 0; i < items.length; i++){
                if($(items[i]).hasClass('active') == true){
                    break;
                }
            }
            if(i < items.length - 1){
                // for tab
                $(items[i]).removeClass('active');
                $(items[i+1]).addClass('active');
                // for pane
                $(pane[i]).removeClass('show active');
                $(pane[i+1]).addClass('show active');
            }

        });
        // Prev
        $('.prevtab').on('click', function(){
            for(i = 0; i < items.length; i++){
                if($(items[i]).hasClass('active') == true){
                    break;
                }
            }
            if(i != 0){
                // for tab
                $(items[i]).removeClass('active');
                $(items[i-1]).addClass('active');
                // for pane
                $(pane[i]).removeClass('show active');
                $(pane[i-1]).addClass('show active');
            }
        });
    }
    bootstrapTabControl();

</script>

</body>

</html>