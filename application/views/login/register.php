<body>

<div class="body-inner">

    <section>

        <div class="container">

            <div class="mt-1">

                <div class="text-center m-b-30" >

                    <img src="<?php echo base_url(); ?>assets/img/Polban panjang.png" alt="Polban logo" >

                </div>

                <div class="row mt-3">

                    <div class="col-sm-10 col-lg-11 col-md-11 col-xl-11 center p-50 background-white b-r-6" style="box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);">

                        <h4 class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">Buat akun anda</h4>

                        <form method="POST" action="<?php echo base_url(); ?>login/register">

                            <input type="hidden" name="tanggal_pembuatan" value="<?php echo date("l,d-m-Y"); ?>">

                            <div class="form-row">

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 ">

                                     <?php if(form_error('nim') == FALSE){?>

                                        <small class="text-dark">Kolom nim</small>

                                    <?php 

                                    } else { ?>

                                        <?php echo form_error('nim','<small class="text-danger">','</small>'); ?>

                                    <?php } ?>

                                    <input name="nim" type="text" class="form-control 
                                    
                                    <?php if(form_error('nim') == FALSE) { echo ''; } 

                                    else { echo 'border border-danger'; } ?>" placeholder="Nim" value="<?php echo set_value('nim'); ?>">

                                </div>

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4"> 

                                    <?php if(form_error('nama') == FALSE){?>

                                        <small class="text-dark">Kolom nama </small>

                                    <?php 

                                    } else { ?>

                                        <?php echo form_error('nama','<small class="text-danger">','</small>'); ?>

                                    <?php } ?>

                                    <input name="nama" type="text" class="form-control 

                                    <?php if(form_error('nama') == FALSE) { echo ''; } 

                                    else { echo 'border border-danger'; } ?>" placeholder="Nama panjang" value="<?php echo set_value('nama'); ?>">

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6  mt-4">

                                    <?php if(form_error('email') == FALSE){?>

                                        <small class="text-dark">Kolom email </small>

                                    <?php 

                                    } else { ?>

                                        <?php echo form_error('email','<small class="text-danger">','</small>'); ?>

                                    <?php } ?>

                                    <input name="email" type="text" class="form-control 

                                    <?php if(form_error('email') == FALSE) { echo ''; } 

                                    else { echo 'border border-danger'; } ?>" placeholder="Email address" value="<?php echo set_value('email'); ?>">

                                </div>

                                <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6  mt-4"> 

                                    <?php if(form_error('username') == FALSE){?>

                                        <small class="text-dark">Kolom username </small>

                                    <?php 

                                    } else { ?>

                                        <?php echo form_error('username','<small class="text-danger">','</small>'); ?>

                                    <?php } ?>

                                    <input name="username" type="text" class="form-control 

                                    <?php if(form_error('username') == FALSE) { echo ''; } 

                                    else { echo 'border border-danger'; } ?>" placeholder="Username" value="<?php echo set_value('username'); ?>"> 
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-4">

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

                                <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-4">

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

                                <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-4">

                                    <small class="text-dark">Kelas</small>

                                    <select class="form-control" name="kelas" required>

                                        <option value="1mpe">1mpe</option>

                                        <option value="2mpe">2mpe</option>

                                        <option value="3mpe">3mpe</option>

                                        <option value="1mpia">1mpia</option>

                                        <option value="2mpia">2mpia</option>

                                        <option value="3mpia">3mpia</option>

                                        <option value="4mpia">4mpia</option>

                                        <option value="1mpib">1mpib</option>

                                        <option value="2mpib">2mpib</option>

                                        <option value="3mpib">3mpib</option>

                                        <option value="4mpib">4mpib</option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-row justify-content-center">

                                <div class="form-group text-left col-sm-9 col-md-79col-lg-9 col-xl-9 form-group mt-4">

                                    <button type="submit" class="btn btn-rounded btn-block">Register</button>

                                </div>

                            </div>

                        </form>

                        <p class="mt-3" style="font-size:13px; text-align:center;">Sudah mempunyai akun ? 

                            <a href="<?php echo base_url(); ?>login/index">Login sekarang</a>

                        </p>

                        <p style="font-size:13px; text-align:center;">

                            <a href="<?php echo base_url(); ?>login/forgotPassword">Lupa password?</a>

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

