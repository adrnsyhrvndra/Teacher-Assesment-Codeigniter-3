<?php 

@session_start();

include 'koneksi.php';

$NIM 	= addslashes($_POST['nim']);

$QUERY 	= mysqli_query($CONNECT,"SELECT * FROM `tb_mhs` WHERE `nim` = '$NIM'");

$HASIL 	= mysqli_num_rows($QUERY);

$DATA 	= mysqli_fetch_array($QUERY);

if ($HASIL == 1) {
	
	$_SESSION['nim']=$DATA['nim'];


	header("location:pertanyaan.php");


	}

	 else{


	header("location:error_page.php");


}

 ?>

