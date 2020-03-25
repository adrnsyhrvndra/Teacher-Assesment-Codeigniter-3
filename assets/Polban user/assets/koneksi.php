<?php  


$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "db_polban_login";

$CONNECT = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

 if(mysqli_connect_error()){

  echo "<script>alert('KONEKSI GAGAL');</script>" . mysqli_connect_error();

 } 


 ?>