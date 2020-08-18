<div class="row ">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
        
        <div class="panel panel-default card-view pa-0">

            <div class="panel-wrapper collapse in">

                <div class="panel-body pa-0">

                    <div class="row">

                        <div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 col-xl-6 col-12 pa-0 text-center">

                            <div class="left-block-wrap pa-30 text-center">

                                <figure class="mt-10">

                                    <img src="<?php echo base_url(); ?>assets/img/Polban panjang.png" alt="image" class="text-center"/>

                                    <figcaption>Assuring your future</figcaption>

                                </figure>

                            </div>

                        </div>

                        <div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 col-xl-6 col-12 pa-0 bg-green txt-light">

                            <div class="right-block-wrap pa-30 txt-light">

                                <div class="right-block txt-light">

                                    <i class="fa fa-list fa-5x"></i>

                                    <span class="weight-50 txt-light block" style="margin-top:15px; font-size:19px;">
                                        
                                        Data saran & masukan

                                    </span>

                                    <span class="txt-light block counter" style="margin-top:10px; font-size:19px;"><span class="counter-anim">87</span></span>

                                </div>

                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">

        <div class="panel panel-default card-view ">
            
            <div class="panel-wrapper collapse in">

                <div class="panel-body">

                    <div class="row">

                        <form action="<?php echo base_url(); ?>admin/pilih_jawaban_esai" method="POST">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
                            
                                <div class="form-wrap mt-10">

                                    <div class="form-group">

                                        <label class="control-label mb-10" for="kode_dosen">Pilih dosen</label>

                                        <select class="form-control select2" id="kode_dosen" name="kode_dosen">

                                            <?php  

                                                foreach ($pengajaran as $row) { 

                                            ?>

                                                <option value="<?php echo $row['kode_dosen']; ?>">
                                                
                                                    <?php echo $row['nama_dosen']; ?> - <?php echo $row['kelas']; ?>
                                                    
                                                </option>

                                            <?php
                                            
                                                }
                                            
                                            ?>

                                        </select>

                                    </div>	

                                </div>
                                
                                <button type="submit" class="btn btn-success">Submit</button>
                
                            </div>

                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>

    </div>

</div>