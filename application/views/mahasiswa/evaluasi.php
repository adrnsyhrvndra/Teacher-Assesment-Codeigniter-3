<div class="body-inner">

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

													<th scope="col">NIM</th>

													<th scope="col">Kelas</th>

												</tr>

											</thead>

											<tbody>

												<tr>
													
													<td>
														
														<h6 class="text-muted">

                                                            <?php echo $identitas['nama']; ?>

														</h6>

													</td>

													<td>

														<h6 class="text-muted">

                                                            <?php echo $identitas['nim']; ?>

														</h6>
														
													</td>

													<td>

														<h6 class="text-muted">

                                                            <?php echo $identitas['kelas']; ?>

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

                                        $auto_kode_sesi;

                                        foreach ($evaluasi_mahasiswa as $rowpengajaran) { 

                                    ?> 

                                        <div class="col-lg-10 col-sm-10 col-md-10 col-xl-10 mt-3 ">

                                            <input type="hidden" name="sesi[]" value="<?php echo $auto_kode_sesi; ?>">

                                            <input type="hidden" name="nim" value="<?php echo $identitas['nim']; ?>">

                                            <input type="hidden" name="kode_dosen[]" 

                                            value="<?php echo $rowpengajaran['kode_dosen']; ?>">

                                            <input type="hidden" name="kode_matkul[]" 

                                            value="<?php echo $rowpengajaran['kode_matkul'] ?>">
                                        
                                            <h5>

                                                <i class="fa fa-user-graduate"></i> 

                                                <?php echo $rowpengajaran['nama_dosen']; ?> - <?php echo $rowpengajaran['matkul_pendek']; ?>
                                                
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

                                    <?php 

                                        $auto_kode_sesi++; 

                                        } 
                                        
                                    ?>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="row justify-content-center mt-4">

                    <div class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col-8 text-center">	

                        <button type="submit" class="btn btn-success">

                            <i class="fa fa-plus-circle"></i> Submit jawaban

                        </button>

                    </div>

                </div>	

			</div>

		</form>

	</section>

</div>