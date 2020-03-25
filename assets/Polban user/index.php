<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo">
<link rel="shortcut icon" href="assets/img/favicon.ico">

<title>User interface</title>

	<link href="assets/css_user/plugins.css" rel="stylesheet">
	<link href="assets/css_user/style.css" rel="stylesheet">

	<link href='plugins/datatables/datatables.min.css' rel='stylesheet' />

	<!-- Link untuk icon font awesome -->

    <link href="assets/Font awesome/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet">

</head>
<body>

<div class="body-inner">

	<?php 


		include 'assets/koneksi.php';
	 

	 ?>

	<header id="header" data-fullwidth="true">
		
		<div class="header-inner">
			
			<div class="container">

				<div id="logo"> 
					
					<img src="assets/img/Polban panjang1.png" alt="">
					
				</div>

			</div>

		</div>

	</header>

	<section id="page-title" style="background:white;">
		
		<div class="container" >

			<div class="page-title">

				<center>

					<img src="assets/img/Polban-3.png" alt="">

				</center>

				<h3 class="mt-2">Selamat datang di program dosen assesment Politeknik bandung</h3>
				<span>Assuring your future.</span>

			</div>

		</div>

	</section>


	<section id="page-content" class="no-sidebar" style="margin-top:-80px;"> 
		
		<div class="container">

			<form class="form-auth-small" action="assets/cek_login.php" method="POST">

				<div class="row justify-content-center mb-5">
					
					<div class="col-lg-8 col-sm-10 col-xs-10 col-md-8 col-xl-8">				

						<div class="form-group">

							<label for="inputState">Pilih nama anda</label>

							<div class="input-group mb-3">

								<select name="nim" id="inputState" class="form-control">

									<option selected="">Pilih...</option>
									
									<?php 

										$TAMPIL = "SELECT * FROM tb_mhs WHERE kelas = '1mpe' ";

										$HASIL 	= mysqli_query($CONNECT, $TAMPIL);


										while ($ROW = mysqli_fetch_array($HASIL)) {

										 	$NO;
											$NAMA 			= $ROW['nama'];
											$NIM 			= $ROW['nim'];
											$KELAS 			= $ROW['kelas'];

									 ?>

									<option value="<?php echo $NIM; ?>"><?php echo $NAMA; ?> - <?php echo $KELAS; ?> </option>

									<?php } ?>

								</select>

								<div class="input-group-append">

									<input type="submit" value="Pilih" class="btn btn-success">
								
								</div>

							</div>

						</div>					

					</div>

				</div>

			</form>

		</div>

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

<script src="assets/js_user/jquery.js"></script>
<script src="assets/js_user/plugins.js"></script>

<script src="plugins/popper/popper.min.js"></script>

<script src="assets/js_user/functions.js"></script>

<script src='plugins/datatables/datatables.min.js'></script>

<script>

        $(document).ready(function () {
            var table = $('#datatable').DataTable({
                buttons: [{
                    extend: 'print',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'pdf',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'excel',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'csv',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'copy',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }]
            });
            table.buttons().container().appendTo('#export_buttons');
            $("#export_buttons .btn").removeClass('btn-secondary').addClass('btn-light');
        });

    </script>

</body>

</html>