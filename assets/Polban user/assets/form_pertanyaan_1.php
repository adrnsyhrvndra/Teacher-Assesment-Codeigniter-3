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

    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>

	<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>

</head>
<body>

 <?php 

 	 @session_start();

  	include 'koneksi.php';

	if (@$_SESSION['kode_matkul']) {
    
		header("pertanyaan.php");

	}

 	 if (@!$_SESSION['nim']) {
    
		  
		  header("location:../index.php");  


    }



  ?>

<div class="body-inner">

	<header id="header" data-fullwidth="true">
		
		<div class="header-inner">
			
			<div class="container">

				<div id="logo"> 
					
					<img src="img/Polban panjang1.png" alt="">
					
				</div>

				<div id="mainMenu-trigger">

					<a class="lines-button x"><span class="lines"></span></a>

				</div>

				<div id="mainMenu">

					<div class="container">

						<nav>
							
							<ul>

								<li><a href="logout.php">Logout</a></li>

							</ul>

						</nav>

					</div>

				</div>

			</div>

		</div>

	</header>

	<section id="page-title" style="background:white;">
		
		<div class="container" >

			<div class="page-title">

				<center>

					<img src="img/Polban-3.png" alt="">

				</center>

				<h3 class="mt-2">Selamat datang di website Universitas Polban</h3>
				<span>Assuring your future.</span>

			</div>

		</div>

	</section>

	<section>

		<div class="container">

			<div class="row justify-content-center text-center" style="margin-top:-50px;">
				
				<div class="col-lg-10 text-center">
					
					<h4>Halo 	

						<?php

                            $QUERY = mysqli_query($CONNECT,"SELECT * FROM tb_mhs WHERE nim='".@$_SESSION['nim']."'");

                            while ($DATA = mysqli_fetch_array($QUERY)){

                            	if ($_SESSION['nim']) {
                  
                                   echo $DATA['nama'];

                              }

                            };

							
						?>

					</h4>

				</div>

			</div>

			<form method="POST" action="cek_login2.php">

				<div class="row justify-content-center mt-4">
					
					<div class="col-lg-8 col-sm-10 col-xs-10 col-md-8 col-xl-8">

						<div class="form-group">

							<label for="inputState">Pilih dosen yang ingin dinilai</label>

							<div class="input-group mb-3">

								<select name="kode_matkul" id="inputState" class="form-control">

									<option selected="">Pilih...</option>
									
									<?php 

										$TAMPIL = "SELECT  tb_dosen. *,  tb_matkul. * FROM tb_dosen 

	                                		INNER JOIN tb_matkul on tb_dosen.kode_dosen=tb_matkul.kode_dosen ";

										$HASIL 	= mysqli_query($CONNECT, $TAMPIL);


										while ($ROW = mysqli_fetch_array($HASIL)) {

									 	$NO;
										$KODE_DOSEN 	= $ROW['kode_dosen'];
										$NAMA_DOSEN 	= $ROW['nama_dosen'];
										$KODE_MATKUL 	= $ROW['kode_matkul'];
										$MATKUL_PANJANG = $ROW['matkul_panjang'];


								 	?>

									<option value="<?php echo $KODE_MATKUL; ?>"><?php echo $NAMA_DOSEN; ?> - <?php echo $MATKUL_PANJANG; ?> </option>

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

<script src="js_user/jquery.js"></script>
<script src="js_user/plugins.js"></script>

<script src="js_user/functions.js"></script>

<script>
	
	$('.single-item').slick({

		dots: true,
		arrows :false


	});

</script>

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