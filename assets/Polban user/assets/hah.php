<?php

													        $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'");

													        while ($DATA = mysqli_fetch_array($QUERY)){

													        	if ($_SESSION['nim']) {


										                    $TAMPIL = "SELECT tb_matkul.*, tb_dosen.*, tb_pengajaran.* FROM tb_pengajaran

	                                      					INNER JOIN tb_dosen on tb_dosen.kode_dosen = tb_pengajaran.kode_dosen

	                                      					INNER JOIN tb_matkul on tb_matkul.kode_matkul = tb_pengajaran.kode_matkul 

	                                      					WHERE kelas='$DATA[kelas]'";

										                    

										                    $HASIL  = mysqli_query($CONNECT, $TAMPIL);


										                    while ($ROW = mysqli_fetch_array($HASIL)) {

										                        $KODE_PENGAJARAN   = $ROW['kode_pengajaran'];
										                        $KODE_DOSEN   	   = $ROW['kode_dosen'];
										                        $KODE_MATKUL   	   = $ROW['kode_matkul'];
										                        $NAMA_DOSEN   	   = $ROW['nama_dosen'];
										                        $MATKUL_PENDEK     = $ROW['matkul_pendek'];
										                        $KELAS   	   	   = $ROW['kelas'];

										                    

											            ?>

														<div class="col-lg-5 col-md-5 col-xl-5 col-sm-12">

															

															<ul class="list-icon list-icon-colored">

																<li>

																	<i class="fa fa-user-graduate"></i>

																	<?php echo $NAMA_DOSEN; ?> - <?php echo $MATKUL_PENDEK; ?>

																</li>

																<li>

																	<input type="hidden" value="<?php echo $KODE_DOSEN; ?>">

																	<input type="hidden" value="<?php echo $KODE_MATKUL; ?>">

																</li>

															</ul>				             														
												 		</div>

												 		<div class="col-lg-5 col-md-5 col-xl-5 col-sm-12">					
								
																<input type="number" class="form-control" name="nilai[]" placeholder="Masukan nilai anda" pattern="[0-5]+" required>

												 		</div>

												 		<?php 

										             		}

										             		}

													        } 

													    ?>