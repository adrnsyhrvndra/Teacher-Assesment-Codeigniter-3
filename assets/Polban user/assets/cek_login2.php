<?php 

@session_start();

include 'koneksi.php';

$NAM 	= addslashes($_POST['kode_matkul']);

$QUERY 	= mysqli_query($CONNECT,"SELECT * FROM `tb_matkul` WHERE `kode_matkul` = '$NAM' ");

$HASIL 	= mysqli_num_rows($QUERY);

$DATA 	= mysqli_fetch_array($QUERY);

if ($HASIL == 1) {
	
	$_SESSION['kode_matkul']=$DATA['kode_matkul'];


	header("location:pertanyaan.php");


	}

	 else{


	header("location:error_page.php");


}

 ?>