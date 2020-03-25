<script src="<?php echo base_url(); ?>assets/js_login/jquery.js"></script>

<script src="<?php echo base_url(); ?>assets/js_login/plugins.js"></script>

<script src="<?php echo base_url(); ?>assets/js_login/functions.js"></script>

<!-- Sweet Alert -->

<script src="<?php echo base_url(); ?>assets/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>

<script src="<?php echo base_url(); ?>assets/dist/js/sweetalert-data.js"></script>

<script>
	
	const flashData = $('.flash-data').data('flashdata');

    if (flashData) {
        swal({   
            title: "Sukses!",   
            type: "success", 
            text: 'Proses' + flashData,
            confirmButtonColor: "#01c853",   
        });
    };

</script>

<script>
	
	const flashDataGagal = $('.flash-data-gagal').data('flashdata');

    if (flashDataGagal) {
        swal({   
            title: "Gagal!",   
            type: "error", 
            text: 'Proses' + flashDataGagal,
            confirmButtonColor: "#01c853",   
        });
    };

</script>

<script>
    
    const flashDataEmail = $('.flash-data-email').data('flashdata');

    if (flashDataEmail) {
        swal({   
            title: "Aktifasi email !!!",   
            type: "warning", 
            text: 'Anda' + flashDataEmail,
            confirmButtonColor: "#01c853",   
        });
    };

</script>

<script>
	
	const flashDataNoEmail = $('.flash-data-no-email').data('flashdata');

    if (flashDataNoEmail) {
        swal({   
            title: "Email tidak terdaftar!!!",   
            type: "warning", 
            text: 'Registrasi' + flashDataNoEmail,
            confirmButtonColor: "#01c853",   
        });
    };

</script>

</body>

</html>