<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<!-- Main Content -->

<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view">

            <div class="panel-wrapper collapse in">

                <div class="panel-body">

                    <div class="calendar-wrap">

                        <div id="calendar_small" class="small-calendar"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php

    // Api weathermap

    $apiurl = "http://api.openweathermap.org/data/2.5/weather?id=1650357&appid=d7cb653ed7fd07fdbb5eaba82354d5c6";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_URL, $apiurl);

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    curl_setopt($ch, CURLOPT_VERBOSE, 0);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response);

    ?>

    <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0 weather-inverse">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="row ma-0">

                        <div class="col-xs-6 pa-0">

                            <div class="left-block-wrap pa-30">

                                <h6><?php echo $data->name; ?></h6>

                                <p class="text-muted" style="font-size:12px;">

                                    <?php echo date("l,Y-m-d"); ?>

                                </p>

                                <div class="left-block  mt-15">

                                    <span class="block temprature "> <?php echo $data->main->temp; ?> <span class="unit">°C</span></span>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-6 pa-0">

                            <div class="right-block-wrap pa-30">

                                <div class="right-block">

                                    <span class="block temprature-icon ">

                                        <?php if ($data->weather[0]->description == "overcast clouds") { ?>

                                            <img src="<?php echo base_url(); ?>assets/img/28.svg">

                                        <?php } elseif ($data->weather[0]->description == "light rain") { ?>

                                            <img src="<?php echo base_url(); ?>assets/img/10.svg">

                                        <?php } elseif ($data->weather[0]->description == "moderate rain") { ?>

                                            <img src="<?php echo base_url(); ?>assets/img/5.svg">

                                        <?php } ?>

                                    </span>

                                    <h6>

                                        <?php if ($data->weather[0]->description == "overcast clouds") { ?>

                                            Overcast clouds

                                        <?php } elseif ($data->weather[0]->description == "light rain") { ?>

                                            Light rain

                                        <?php } elseif ($data->weather[0]->description == "moderate rain") { ?>

                                            Moderate rain

                                        <?php } ?>

                                    </h6>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter">

                                        <span class="counter-anim"><?php echo $jumlahdatadosen; ?></span>

                                    </span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">Data dosen</span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="zmdi zmdi-graduation-cap txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter">

                                        <span class="counter-anim"><?php echo $jumlahdatamatkul; ?></span>

                                    </span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">Data matkul</span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="fa fa-book txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter">

                                        <span class="counter-anim"><?php echo $jumlahdatamahasiswa; ?></span>

                                    </span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">Data mahasiswa</span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="fa fa-group (alias) txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter">

                                        <span class="counter-anim"><?php echo $jumlahdatapertanyaan; ?></span>

                                    </span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">Data pertanyaan</span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="fa fa-question-circle-o txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter"><span class="counter-anim"><?php echo $jumlahdatapengajaran; ?></span></span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">Data pengajaran</span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="zmdi zmdi-developer-board txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter">

                                        <span class="counter-anim">

                                            <?php echo $jumlahdatajawabanskala; ?>

                                        </span>

                                    </span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">

                                        Data jawaban skala

                                    </span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="fa fa-list-ul txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="sm-data-box bg-green">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                    <span class="txt-light block counter">

                                        <span class="counter-anim">

                                            <?php echo $jumlahdatajawabanesai; ?>

                                        </span>

                                    </span>

                                    <span class="weight-500 uppercase-font txt-light block font-13">

                                        Data saran dan masukan

                                    </span>

                                </div>

                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">

                                    <i class="fa fa-list-ul txt-light data-right-rep-icon"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>