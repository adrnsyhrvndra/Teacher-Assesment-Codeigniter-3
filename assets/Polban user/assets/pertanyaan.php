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

	<!-- Link untuk icon font awesome -->

    <link href="Font awesome/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet">

</head>
<body>

 <?php 

		 @session_start();

			include 'koneksi.php';


			  if (@!$_SESSION['username']) {
	    
				  	header("location:../../index.php");

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
            
                include 'proses_input_jawaban.php';

            }

         ?>

		<form  method="POST">

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

														        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE username='".@$_SESSION['username']."'");

														        while ($DATA = mysqli_fetch_array($QUERY)){

														        	if ($_SESSION['username']) {

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

													        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE username='".@$_SESSION['username']."'");

													        while ($DATA = mysqli_fetch_array($QUERY)){

													        	if ($_SESSION['username']) {

													               echo $DATA['nim'];

													          }

													        };

															
														?>

														</h6>
														
													</td>

													<td>

														<h6 class="text-muted">

														
														<?php

													        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE username='".@$_SESSION['username']."'");

													        while ($DATA = mysqli_fetch_array($QUERY)){

													        	if ($_SESSION['username']) {

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
								
								<div class="carousel arrows-visibile" data-items="1" data-dots="false" data-autoplay="false" data-nav="true">

									<?php 

										$QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'"); 

										$DATA = mysqli_fetch_array($QUERY);


					                    $TAMPIL = "SELECT  * FROM tb_pertanyaan ORDER BY tb_pertanyaan.kode_pertanyaan ASC  ";

					                    $HASIL  = mysqli_query($CONNECT, $TAMPIL);

					                    $NO = 1;


					                    while ($ROW = mysqli_fetch_array($HASIL)) {


					                        $NO;
					                        $KODE_PERTANYAAN   = $ROW['kode_pertanyaan'];
					                        $PERTANYAAN   	   = $ROW['pertanyaan'];

					                    

					                 ?>

										<div>

											<div class="container">

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

												<div class="row justify-content-center">
														
													<div class="col-lg-10 col-sm-5">

														<input type="hidden" name="kode_pertanyaan[]" value="<?php echo $KODE_PERTANYAAN; ?>">

														<?php 

															$QUERY_MAX = "SELECT max(kode_pertanyaan) as max FROM tb_pertanyaan";

															$HASIL_MAX = mysqli_query($CONNECT,$QUERY_MAX);

															$DATA_MAX = mysqli_fetch_array($HASIL_MAX);

															$KODE_MAX = $DATA_MAX['max'];


													 	?>
														
														<h4>Pertanyaan <?php echo $NO; ?> dari <?php echo $KODE_MAX; ?></h4>

													</div>

												</div>

												<div class="row justify-content-center mt-2">


													<div class="col-lg-10 col-sm-10">
												
														<h6 class="text-muted"><?php echo $PERTANYAAN; ?></h6>	

											 		</div>

											 	</div>	

											 	<div class="row justify-content-center mt-2">

											 		<?php 

											 			$TAMPIL_DATA = "SELECT tb_matkul.*, tb_dosen.*, tb_pengajaran.* FROM tb_pengajaran

                                      					INNER JOIN tb_dosen on tb_dosen.kode_dosen = tb_pengajaran.kode_dosen

                                      					INNER JOIN tb_matkul on tb_matkul.kode_matkul = tb_pengajaran.kode_matkul WHERE kelas='1mpia'";

                                      					$HASIL_DATA  = mysqli_query($CONNECT, $TAMPIL_DATA);

											 			
											 			while ($DATA_PERTANYAAN = mysqli_fetch_array($HASIL_DATA)) {

											 				$KODE_PENGAJARAN   = $DATA_PERTANYAAN['kode_pengajaran'];
									                        $KODE_DOSEN   	   = $DATA_PERTANYAAN['kode_dosen'];
									                        $KODE_MATKUL   	   = $DATA_PERTANYAAN['kode_matkul'];
									                        $NAMA_DOSEN   	   = $DATA_PERTANYAAN['nama_dosen'];
									                        $MATKUL_PENDEK     = $DATA_PERTANYAAN['matkul_pendek'];
									                        $KELAS   	   	   = $DATA_PERTANYAAN['kelas'];

											 		 ?>

											 		 <div class="col-lg-8 col-md-8 col-xl-8 col-sm-12 mt-3">          

										                <ul class="list-icon list-icon-colored">

										                	<input type="hidden" name="kode_dosen[]" value="<?php echo $KODE_DOSEN; ?>">

										                	<input type="hidden" name="kode_matkul[]" value="<?php echo $KODE_MATKUL; ?>">

															<li><i class="fa fa-user-graduate"></i><?php echo $NAMA_DOSEN; ?> - <?php echo $MATKUL_PENDEK; ?></li>

														</ul>


										             															

											 		</div>

											 		<div class="col-lg-2 col-md-2 col-xl-2 col-sm-12 mt-3 ">					
							
														<select name="nilai[]" class="form-control" required>

															<option value="">Pilih...</option>

															<option value="-">-</option>

															<option value="1">1</option>

															<option value="2">2</option>

															<option value="3">3</option>

															<option value="4">4</option>

															<option value="5">5</option>

														</select>

											 		</div>

											 		<?php } ?>

											 	</div>	

										 	</div>											
											
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