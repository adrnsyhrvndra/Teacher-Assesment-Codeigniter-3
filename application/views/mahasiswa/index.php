<div class="body-inner">

	<?php if (validation_errors()){ ?>

		<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashgagal'); ?>"></div>

	<?php } ?>

	<header id="header" data-fullwidth="true">
		
		<div class="header-inner">
			
			<div class="container">

				<div id="logo"> 
					
					<img src="<?php echo base_url(); ?>assets/img/Polban panjang1.png" alt="logo polban">
					
				</div>

			</div>

		</div>

	</header>

	<section>

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

													<th scope="col">Nim</th>

													<th scope="col">Kelas</th>

													<th scope="col">Rating info</th>

												</tr>

											</thead>

											<tbody>

												<tr>
													
													<td>
														
														<h6 class="text-muted" style="font-size:11px;">

															<?php echo $identitas['nama']; ?>

														</h6>

													</td>

													<td>

														<h6 class="text-muted" style="font-size:11px;">
															
															<?php echo $identitas['nim']; ?>

														</h6>
														
													</td>

													<td>

														<h6 class="text-muted" style="font-size:11px;">

															<?php echo $identitas['kelas']; ?>

														</h6>
														
													</td>

													<td>

														<h6 class="text-muted row" style="font-size:11px;">

															<div class="col-12 col-lg-6 col-sm-6 col-md-6 col-xl-6 col-xs-6">

																<ul class="list-icon list-icon-arrow">

																	<li>( - ) tidak bernilai</li>

																	<li>( 1 ) sangat kurang</li>

																	<li>( 2 ) kurang</li>

																</ul>

															</div>

															<div class="col-12 col-lg-6 col-sm-6 col-md-6 col-xl-6 col-xs-6">

																<ul class="list-icon list-icon-arrow">

																	<li>( 3 ) cukup</li>

																	<li>( 4 ) baik</li>
																	
																	<li>( 5 ) sangat baik</li>

																</ul>

															</div>

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

						                 $no = 1;

						                 foreach ($pertanyaan as $rowpertanyaan ) {

					                 ?>

									<div>

										<div class="container">

											<div class="row justify-content-center">

												<div class="col-lg-10 text-white">

													<?php 

														echo validation_errors("nilai[]","

														<div role='alert' class='alert alert-warning alert-dismissible text-white'>

															<button type='button' class='close text-white' data-dismiss='alert' aria-label='Close'>

																<span aria-hidden='true'>&times;</span> 

															</button>

															<strong>

																<i class='fa fa-exclamation-circle'></i> Peringatan!

															</strong> 

															Semua pertanyaan

															harus dijawab, cek kembali isiannya. 

															</div>
																	
														"); 

													?>

												</div>
													
												<div class="col-lg-10 col-sm-5">
													
													<h4>Pertanyaan <?php echo $no;?> dari <?php echo $max_pertanyaan['kode_pertanyaan']; ?></h4>

												</div>

											</div>

											<div class="row justify-content-center mt-2">

												<div class="col-lg-10 col-sm-10">													

													<p class="text-muted" style="font-size:14px;"><?php echo $rowpertanyaan['pertanyaan']; ?></p>

										 		</div>

										 	</div>	

										 	<div class="row justify-content-center mt-2">

										 		<?php 

											 		$auto_kode_sesi;

											 		foreach ($evaluasi_mahasiswa as $rowpengajaran) { 

										 		?> 

											 		<div class="col-12 col-lg-8 col-md-8 col-xl-8 col-sm-8 mt-4">

										                <ul class="list-icon list-icon-colored">

										                	<input type="hidden" name="kode_dosen[]" 

										                	value="<?php echo $rowpengajaran['kode_dosen']; ?>">

										                	<input type="hidden" name="kode_matkul[]" 

										                	value="<?php echo $rowpengajaran['kode_matkul'] ?>">

															<li>

																<i class="fa fa-user-graduate"></i>

																<?php echo $rowpengajaran['nama_dosen']; ?> - 

																<?php echo $rowpengajaran['matkul_pendek']; ?>

															</li>

															<input type="hidden" name="sesi[]" value="<?php echo $auto_kode_sesi; ?>">

															<input type="hidden" name="nim" value="<?php echo $identitas['nim']; ?>">

															<input type="hidden" name="kode_pertanyaan[]" 

															value="<?php echo $rowpertanyaan['kode_pertanyaan']; ?>">

														</ul>
																							             													
											 		</div>

											 		<div class="col-12 col-lg-2 col-md-2 col-xl-2 col-sm-2 mt-4">					
							
														<select name="nilai[]" class="form-control">

															<option value="">Pilih...</option>

															<option value="-">-</option>

															<option value="1">1</option>

															<option value="2">2</option>

															<option value="3">3</option>

															<option value="4">4</option>

															<option value="5">5</option>

														</select>

											 		</div>

										 		<?php 

										 			$auto_kode_sesi++; 

										 			}  

										 		?>	

										 	</div>

										 	<div class="row justify-content-center mt-4">

												<div class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col-8 text-center">	

													<?php if( $rowpertanyaan['kode_pertanyaan'] == $max_pertanyaan['kode_pertanyaan'] ){ ?>		

														<button type="submit" class="btn btn-success">

															<i class="fa fa-plus-circle"></i> Submit jawaban

														</button>

													<?php } ?>

										 		</div>

										 	</div>		

									 	</div>											
										
									</div>

									<?php  

										$no++;

										}

									?>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</form>

	</section>

	<footer id="footer" style="background:white;">

		<div class="copyright-content" style="background:white; ">

			<div class="container">

				<div class="copyright-text text-center">
					&copy; <?php $tahun = date('Y'); echo $tahun; ?>  POLBAN - 
					All Rights Reserved - Designed by<a href="https://www.instagram.com/adrnsyhrvndra/" target="_blank"> Adriansyah ravindra</a>
				</div>

			</div>

		</div>

	</footer>

</div>