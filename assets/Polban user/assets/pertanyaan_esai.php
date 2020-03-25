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

			</div>

		</div>

	</header>

	<section>

		<?php 

        if (@$_POST['jawab']) {
            
                include 'proses_input_jawaban_esai.php';

            }

         ?>

		<form method="POST">

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

													<th scope="col">NIM</th>

													<th scope="col">Kelas</th>

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


															<input type="hidden" name="nim" value="<?php echo $DATA['nim']; ?>">


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

													               echo $DATA['nim'];

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

												</tr>

											 </tbody>

										</table>

									</div>

								</div>
								
							</div>

							<div class="card-body">

								<div class="row justify-content-center">
									
									<div class="col-lg-10 col-md-10 col-xl-10 col-sm-10 text-center">
										
										<h5>Saran dan masukan</h5>

									</div>

								</div>
								
								<div class="row mt-4">

									<?php 

										$QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'"); 

										$DATA = mysqli_fetch_array($QUERY);

							 			$TAMPIL_DATA = "SELECT tb_matkul.*, tb_dosen.*, tb_pengajaran.* FROM tb_pengajaran

	                  					INNER JOIN tb_dosen on tb_dosen.kode_dosen = tb_pengajaran.kode_dosen

	                  					INNER JOIN tb_matkul on tb_matkul.kode_matkul = tb_pengajaran.kode_matkul WHERE kelas='$DATA[kelas]'";

	                  					$HASIL_DATA  = mysqli_query($CONNECT, $TAMPIL_DATA);

	                  					$NO=1;

							 			
							 			while ($DATA_PERTANYAAN = mysqli_fetch_array($HASIL_DATA)) {

							 				$NO;
							 				$KODE_PENGAJARAN   = $DATA_PERTANYAAN['kode_pengajaran'];
					                        $KODE_DOSEN   	   = $DATA_PERTANYAAN['kode_dosen'];
					                        $KODE_MATKUL   	   = $DATA_PERTANYAAN['kode_matkul'];
					                        $NAMA_DOSEN   	   = $DATA_PERTANYAAN['nama_dosen'];
					                        $MATKUL_PENDEK     = $DATA_PERTANYAAN['matkul_pendek'];
					                        $KELAS   	   	   = $DATA_PERTANYAAN['kelas'];

							 		 ?>

						 		 	<div class="col-lg-10 col-sm-10 col-md-10 col-xl-10 mt-3 ">

						 		 		<?php

											include "koneksi.php";

											// mencari kode sesi dengan nilai paling besar

											$QUERY = "SELECT max(sesi) as maxKode FROM tb_jawaban_skala";

											$hasil = mysqli_query($CONNECT,$QUERY);

											$data = mysqli_fetch_array($hasil);

											$KODE_SESI = $data['maxKode'];


											$NO_URUT = (int) substr($KODE_SESI, 3, 3);

											
											$NO_URUT++;


											$CHAR 		= "SES";
											
											$KODE_SESI 	= $CHAR . sprintf("%03s", $NO_URUT);
											
										?>

										<input type="hidden" name="sesi[]" value="<?php echo $KODE_SESI;?><?php echo $NO; ?>">

						 		 		<input type="hidden" name="kode_matkul[]" value="<?php echo $KODE_MATKUL; ?>">

						 		 		<input type="hidden" name="kode_dosen[]" value="<?php echo $KODE_DOSEN; ?>">
						 		 	
						 		 		<h5>

						 		 			<i class="fa fa-user-graduate"></i> 
						 		 			<?php echo $NAMA_DOSEN; ?> - <?php echo $MATKUL_PENDEK; ?>
						 		 			
						 		 		</h5>

						 		 	</div>
										
									<div class="form-group col-md-6 col-lg-6 col-xl-6 col-sm-10 mt-3">

										<label for="email">Yang harus dipertahankan</label>
										<textarea name="dipertahankan[]" class="form-control" placeholder="Isi masukan anda" rows="3" required></textarea>

									</div>

									<div class="form-group col-md-6 col-lg-6 col-xl-6 col-sm-10 mt-3">

										<label for="email">Yang harus ditingkatkan</label>
										<textarea name="ditingkatkan[]" class="form-control" placeholder="Isi masukan anda" rows="3" required></textarea>

									</div>

									<?php $NO++; ?>

									<?php } ?>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="row justify-content-center mt-4">

					<div class="col-lg-2 col-sm-5 text-center">					

						<input type="submit" class="btn" value="submit" name="jawab">

			 		</div>

			 	</div>	

			</div>

		</form>

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