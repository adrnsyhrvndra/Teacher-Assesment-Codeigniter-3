<?php 

ob_start();
include ("koneksi.php");

$NIM 						= $_POST['nim'];
$SESI 						= $_POST['sesi'];
$NILAI 						= $_POST['nilai'];
$KODE_DOSEN 				= $_POST['kode_dosen'];
$KODE_PERTANYAAN 			= $_POST['kode_pertanyaan'];
$KODE_MATKUL 				= $_POST['kode_matkul'];

$JUMLAH_DIPILIH1 = count($SESI);
$JUMLAH_DIPILIH2 = count($NILAI);
$JUMLAH_DIPILIH3 = count($KODE_PERTANYAAN);
$JUMLAH_DIPILIH4 = count($KODE_DOSEN);
$JUMLAH_DIPILIH5 = count($KODE_MATKUL);


if (

	$NIM 	   				== "" && 
	$SESI 	   				== "" &&   
	$KODE_DOSEN 			== "" && 
	$NILAI 					== "" && 
	$KODE_PERTANYAAN 		== "" && 
	$KODE_MATKUL   			== "" 

) {


?>

<script>
 	
	alert('Maaf anda belum menjawab semua pertanyaan,halaman ini akan direset kembali');

</script>

<meta http-equiv="refresh" content="1; url=pertanyaan_esai.php">


<?php

} 

else{


	for($X=0;$X<$JUMLAH_DIPILIH1 && $X<$JUMLAH_DIPILIH2 && $X<$JUMLAH_DIPILIH3 && $X<$JUMLAH_DIPILIH4 && $X<$JUMLAH_DIPILIH5;$X++){

	mysqli_query($CONNECT,"INSERT INTO tb_jawaban_skala SET

 		nim 					= '$NIM',
 		sesi 					= '$SESI[$X]',
 		kode_dosen 				= '$KODE_DOSEN[$X]',
 		kode_pertanyaan 		= '$KODE_PERTANYAAN[$X]',
		nilai 					= '$NILAI[$X]',
 		kode_matkul 			= '$KODE_MATKUL[$X]';")

		or die("Gagal" .mysqli_error($CONNECT));

	}
	
 ?>

 <script>
 	
	alert('Jawaban anda telah terkirim');

 </script>

<meta http-equiv="refresh" content="1; url=pertanyaan_esai.php">


 <?php } ?>