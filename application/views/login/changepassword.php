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

                    <div class="col-sm-10 col-lg-9 col-md-9 col-xl-9 center p-50 background-white b-r-6" style="box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);">

                        <h4 class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">Ganti password untuk</h4>

                        <p class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3" style="font-size:13px;"><?php echo $this->session->userdata('reset_email'); ?></p>

                        <form method="POST" action="<?php echo base_url(); ?>login/changePassword">

                            <div class="form-row">

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">

                                    <?php if(form_error('password1') == FALSE){?>

                                        <small class="text-dark">Kolom password </small>

                                    <?php 

                                    } else { ?>

                                        <?php echo form_error('password1','<small class="text-danger">','</small>'); ?>

                                    <?php } ?>

                                    <div class="input-group show-hide-password">

                                        <input class="form-control <?php if(form_error('password1') == FALSE) { echo ''; } 

                                        else { echo 'border border-danger'; } ?>"

                                        name="password1" placeholder="Password" type="password">

                                        <div class="input-group-append">

                                            <span class="input-group-text">

                                                <i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i>

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">

                                    <?php if(form_error('password2') == FALSE){?>

                                        <small class="text-dark">Kolom konfirmasi password </small>

                                    <?php 

                                    } else { ?>

                                        <?php echo form_error('password2','<small class="text-danger">','</small>'); ?>

                                    <?php } ?>

                                    <div class="input-group show-hide-password">

                                        <input name="password2" type="password" class="form-control 

                                        <?php if(form_error('password2') == FALSE) { echo ''; } 

                                        else { echo 'border border-danger'; } ?>" placeholder="Confirm password">

                                        <div class="input-group-append">

                                            <span class="input-group-text">

                                                <i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i>

                                            </span>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

                            <div class="form-row justify-content-center">

                                <div class="form-group text-left col-sm-9 col-md-79col-lg-9 col-xl-9 form-group mt-4">

                                    <button type="submit" class="btn btn-rounded btn-block">Ganti password</button>

                                </div>

                            </div>

                        </form>

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

