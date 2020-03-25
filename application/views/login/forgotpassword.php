<body>

<div class="body-inner">

    <section>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

        <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashgagal'); ?>"></div>

        <div class="flash-data-email" data-flashdata="<?= $this->session->flashdata('flashaktifasi'); ?>"></div>

        <div class="flash-data-no-email" data-flashdata="<?= $this->session->flashdata('flashnoemail'); ?>"></div>

        <div class="container">

            <div class="mt-1">

                <div class="text-center m-b-30" >

                    <img src="<?php echo base_url(); ?>assets/img/Polban panjang.png" alt="Polban logo" >

                </div>

                <div class="row mt-3">

                    <div class="col-sm-10 col-lg-7 col-md-7 col-xl-7 center p-50 background-white b-r-6" style="box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);">

                        <h4 class="col-sm-12 col-md-12 col-lg-12 col-xl-12">Lupa password?</h4>

                        <form role="form" method="POST" action="<?php echo base_url(); ?>login/forgotPassword">

                            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">

                                <?php echo form_error('email','<small class="text-danger">','</small>'); ?>

                                <input name="email" type="text" class="form-control" placeholder="email address" value="<?php echo set_value('email'); ?>">

                            </div>

                            <div class="text-left col-sm-12 col-md-12 col-lg-12 col-xl-12 form-group mt-4">

                                <button type="submit" class="btn" name="login">Ganti password</button>

                            </div>

                        </form>

                        <p class="mt-5" style="font-size:13px; text-align:center;">Sudah mengganti password ? 

                            <a href="<?php echo base_url(); ?>login/index">Login sekarang</a>

                        </p>

                    </div>

                </div>

            </div>
            
        </div>

    </section>

    <footer id="footer" style="background:white;">

        <div class="copyright-content" style="background:white; ">

            <div class="container">

                <div class="copyright-text text-center">

                    &copy; <?php echo date("Y"); ?> Polban - 
                    All Rights Reserved - Developed by<a href="https://www.instagram.com/adrnsyhrvndra/" target="_blank"> Adriansyah ravindra</a> 

                </div>

            </div>

        </div>

    </footer>

</div>

<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

