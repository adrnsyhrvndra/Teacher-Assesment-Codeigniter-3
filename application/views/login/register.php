<body class="side-panel side-panel-static">

    <div id="side-panel" class="text-center dark">

        <div id="close-panel">

            <i class="fa fa-times"></i>

        </div>

        <div class="side-panel-wrap">

            <div class="text-dark text-center">

                <img src="<?php echo base_url(); ?>assets/img/Polban-3.png" alt="Polban logo">

            </div>

            <div class="widget text-light text-center text-dark">

                <h4 class="widget-title">Teacher assesment</h4>

                <p style="line-height:35px;">

                    ini adalah aplikasi untuk melakukan penilaian terhadap dosen

                </p>

            </div>

            <div class="social-icons social-icons-medium social-icons-border social-icons-rounded social-icons-colored-hover text-center">

                <h5>Support the creator</h5>

                <ul class="mt-3">

                    <li class="social-facebook px-1">

                        <a href="https://www.facebook.com/adrimedia.donnyvidi">

                            <i class="fab fa-facebook-f"></i>

                        </a>

                    </li>

                    <li class="social-youtube px-1">

                        <a href=" https://www.youtube.com/channel/UCwz5vQx62tecocSGPGn1o8Q?view_as=subscriber">

                            <i class="fab fa-youtube"></i>

                        </a>

                    </li>

                    <li class="social-instagram px-1">

                        <a href="https://www.instagram.com/adrnsyhrvndra/?hl=id">

                            <i class="fab fa-instagram"></i>

                        </a>

                    </li>

                    <li class="social-github px-1">

                        <a href="https://github.com/adrnsyhrvndra">

                            <i class="fab fa-github"></i>

                        </a>

                    </li>

                </ul>

            </div>

            <p class="small mt-4">

                &copy; <?php echo date("Y"); ?> Polban -
                All Rights Reserved - Developed by Adriansyah ravindra

            </p>

        </div>

    </div>

    <div class="body-inner">

        <header id="header" class="d-block d-md-none">

            <div class="header-inner">

                <div class="container">

                    <div class="header-extras">

                        <ul>

                            <li>

                                <a id="side-panel-trigger" href="#" class="toggle-item" data-target="body" data-class="side-panel-active">

                                    <i class="fa fa-bars"></i>
                                    <i class="fa fa-times"></i>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </header>

        <section class="p-t-50 p-b-50" style="background-image: url('<?php echo base_url(); ?>assets/img/banner.jpg');background-size: cover;">

            <div class="bg-overlay"></div>

            <div class="container">

                <div class="row">

                    <div class="col-lg-9 center text-center text-light">

                        <h1>Halaman register</h1>

                        <p class="lead">Silahkan register akun baru anda sebelum login.</p>

                        <a class="px-1" href="<?php echo base_url(); ?>login/index">

                            <button type="button" class="btn">Login</button>

                        </a>

                        <a class="px-1" href="<?php echo base_url(); ?>login/forgotPassword">

                            <button type="button" class="btn">Lupa password</button>

                        </a>

                    </div>

                </div>

            </div>

        </section>

        <section id="page-content" class="p-t-30 p-b-15">

            <div class="container-fluid">

                <div class="mt-1">

                    <div class="row">

                        <div class="col-sm-10 col-lg-11 col-md-11 col-xl-11 center p-50 background-white b-r-6" style="box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);">

                            <h4 class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">Buat akun anda</h4>

                            <form method="POST" action="<?php echo base_url(); ?>login/register">

                                <input type="hidden" name="tanggal_pembuatan" value="<?php echo date("l,d-m-Y"); ?>">

                                <div class="form-row">

                                    <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 ">

                                        <?php if (form_error('nim') == FALSE) { ?>

                                            <small class="text-dark">Kolom nim</small>

                                        <?php

                                        } else { ?>

                                            <?php echo form_error('nim', '<small class="text-danger">', '</small>'); ?>

                                        <?php } ?>

                                        <input name="nim" type="text" class="form-control 
                                    
                                    <?php if (form_error('nim') == FALSE) {
                                        echo '';
                                    } else {
                                        echo 'border border-danger';
                                    } ?>" placeholder="Nim" value="<?php echo set_value('nim'); ?>">

                                    </div>

                                    <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">

                                        <?php if (form_error('nama') == FALSE) { ?>

                                            <small class="text-dark">Kolom nama </small>

                                        <?php

                                        } else { ?>

                                            <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>

                                        <?php } ?>

                                        <input name="nama" type="text" class="form-control 

                                    <?php if (form_error('nama') == FALSE) {
                                        echo '';
                                    } else {
                                        echo 'border border-danger';
                                    } ?>" placeholder="Nama panjang" value="<?php echo set_value('nama'); ?>">

                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12  mt-4">

                                        <?php if (form_error('email') == FALSE) { ?>

                                            <small class="text-dark">Kolom email </small>

                                        <?php

                                        } else { ?>

                                            <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>

                                        <?php } ?>

                                        <input name="email" type="text" class="form-control 

                                    <?php if (form_error('email') == FALSE) {
                                        echo '';
                                    } else {
                                        echo 'border border-danger';
                                    } ?>" placeholder="Email address" value="<?php echo set_value('email'); ?>">

                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-4">

                                        <?php if (form_error('password1') == FALSE) { ?>

                                            <small class="text-dark">Kolom password </small>

                                        <?php

                                        } else { ?>

                                            <?php echo form_error('password1', '<small class="text-danger">', '</small>'); ?>

                                        <?php } ?>

                                        <div class="input-group show-hide-password">

                                            <input class="form-control <?php if (form_error('password1') == FALSE) {
                                                                            echo '';
                                                                        } else {
                                                                            echo 'border border-danger';
                                                                        } ?>" name="password1" placeholder="Password" type="password">

                                            <div class="input-group-append">

                                                <span class="input-group-text">

                                                    <i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i>

                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-4">

                                        <?php if (form_error('password2') == FALSE) { ?>

                                            <small class="text-dark">Kolom konfirmasi password </small>

                                        <?php

                                        } else { ?>

                                            <?php echo form_error('password2', '<small class="text-danger">', '</small>'); ?>

                                        <?php } ?>

                                        <div class="input-group show-hide-password">

                                            <input name="password2" type="password" class="form-control 

                                        <?php if (form_error('password2') == FALSE) {
                                            echo '';
                                        } else {
                                            echo 'border border-danger';
                                        } ?>" placeholder="Confirm password">

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

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>