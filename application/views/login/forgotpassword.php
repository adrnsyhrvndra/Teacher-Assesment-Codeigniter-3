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

                        <h1>Halaman lupa password</h1>

                        <p class="lead">Silahkan lakukan proses ini jika anda lupa password.</p>

                        <a class="px-1" href="<?php echo base_url(); ?>login/index">

                            <button type="button" class="btn">Login</button>

                        </a>

                        <a class="px-1" href="<?php echo base_url(); ?>login/register">

                            <button type="button" class="btn">Register</button>

                        </a>

                    </div>

                </div>

            </div>

        </section>

        <section id="page-content" class="p-t-30 p-b-15">

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

            <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashgagal'); ?>"></div>

            <div class="flash-data-email" data-flashdata="<?= $this->session->flashdata('flashaktifasi'); ?>"></div>

            <div class="flash-data-no-email" data-flashdata="<?= $this->session->flashdata('flashnoemail'); ?>"></div>

            <div class="container-fluid">

                <div class="mt-1">

                    <div class="row">

                        <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 center p-50 background-white b-r-6" style="box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);">

                            <h4 class="col-sm-12 col-md-12 col-lg-12 col-xl-12">Lupa password?</h4>

                            <form role="form" method="POST" action="<?php echo base_url(); ?>login/forgotPassword">

                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">

                                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>

                                    <input name="email" type="text" class="form-control" placeholder="email address" value="<?php echo set_value('email'); ?>">

                                </div>

                                <div class="text-left col-sm-12 col-md-12 col-lg-12 col-xl-12 form-group mt-4">

                                    <button type="submit" class="btn" name="login">Ganti password</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>