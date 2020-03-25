<?php 

ob_start();
include ("koneksi.php");

$KODE_DOSEN 				= $_POST['kode_dosen'];
$KODE_MATKUL 				= $_POST['kode_matkul'];
$DIPERTAHANKAN 				= $_POST['dipertahankan'];
$DITINGKATAN 				= $_POST['ditingkatkan'];
$SESI 						= $_POST['sesi'];
$NIM 						= $_POST['nim'];

$DIPERTAHANKAN_MULTI 		= count($DIPERTAHANKAN);
$DITINGKATAN_MULTI 			= count($DITINGKATAN);
$SESI_MULTI 				= count($SESI);
$KODE_DOSEN_MULTI 			= count($KODE_DOSEN);
$KODE_MATKUL_MULTI 			= count($KODE_MATKUL);


if (
	$NIM 	   				== "" || 
	$SESI 	   				== "" ||   
	$KODE_DOSEN 			== "" ||  
	$DIPERTAHANKAN 			== "" ||  
	$DITINGKATAN 			== "" ||  
	$KODE_MATKUL   			== "" 
) {


?>


	<div class='alert alert-danger alert-dismissible fade show' role='alert'>


	    <div class='alert-icon'>
	        <i class='zmdi zmdi-block'></i>
	    </div>
	    <strong>GAGAL</strong> Pastikan data terisi semua
	    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	        <span aria-hidden='true'>
	            <i class='zmdi zmdi-close'></i>
	        </span>
	    </button>


	</div>


<?php

} 

else{

	for($X=0;$X<$DIPERTAHANKAN_MULTI && $X<$DITINGKATAN_MULTI && $X<$SESI_MULTI;$X++){

	mysqli_query($CONNECT,"INSERT INTO tb_jawaban_esai SET

 		kode_dosen 		= '$KODE_DOSEN[$X]',
		kode_matkul 	= '$KODE_MATKUL[$X]',
		nim 			= '$NIM',
		sesi 			= '$SESI[$X]',
		ditingkatkan 	= '$DITINGKATAN[$X]',
		dipertahankan 	= '$DIPERTAHANKAN[$X]';")

		or die("Gagal" .mysqli_error($CONNECT));

	}
	

 ?>

 <script>
 	
	alert('Jawaban anda telah terkirim');

 </script>

<meta http-equiv="refresh" content="1; url=logout.php">

 <?php } ?>