<div class="row justify-content-center">
  
  <div class="col-md-12">

      <div class="panel panel-default card-view">
        
        <div class="panel-heading">

          <div class="pull-left">

            <h6 class="panel-title txt-dark ">Perubahan data pengajaran</h6>

          </div>

          <div class="clearfix"></div>

        </div>

        <hr class="light-grey-hr"/>

        <form class="form-horizontal" role="form" method="POST" action="">

          <div class="panel-wrapper collapse in">
            
            <div class="panel-body">
              
              <div class="row">
                
                <div class="col-sm-12 col-xs-12">
                  
                  <div class="form-wrap">

                    <input type="hidden" class="form-control" id="kode_pengajaran" value="<?php echo $pengajaran['kode_pengajaran']; ?>" name="kode_pengajaran">

                    <div class="form-group <?php if(form_error('kode_dosen')) { echo 'has-error'; } ?>">
                      
                      <label for="kode_dosen" class="col-sm-2 control-label">Nama dosen</label>
                      
                      <div class="col-sm-9">

                        <select class="form-control select2 selectpicker" data-style="form-control btn-default btn-outline" name="kode_dosen" id="kode_dosen">

                          <?php foreach ($dosen as $row) { ?>

                            <?php if($row['kode_dosen'] == $pengajaran['kode_dosen']){ ?>

                              <option value="<?php echo $row['kode_dosen']; ?>" selected>

                                <?php echo $row['nama_dosen']; ?>
                                  
                              </option>

                            <?php } else { ?>

                              <option value="<?php echo $row['kode_dosen']; ?>">

                                <?php echo $row['nama_dosen']; ?>
                                  
                              </option>

                            <?php }  ?>

                          <?php } ?>

                        </select>

                        <span class="help-block"> <?php echo form_error('kode_dosen'); ?></span> 

                      </div>

                    </div>

                    <div class="form-group <?php if(form_error('kode_matkul')) { echo 'has-error'; } ?>">
                      
                      <label for="kode_matkul" class="col-sm-2 control-label">Nama matkul</label>
                      
                      <div class="col-sm-9">

                        <select class="form-control select2 selectpicker" data-style="form-control btn-default btn-outline" name="kode_matkul" id="kode_matkul">

                          <?php foreach ($matkul as $row) { ?>

                            <?php if($row['kode_matkul'] == $pengajaran['kode_matkul']){ ?>

                              <option value="<?php echo $row['kode_matkul']; ?>" selected>

                                <?php echo $row['matkul_panjang']; ?>
                                  
                              </option>

                            <?php } else { ?>

                              <option value="<?php echo $row['kode_matkul']; ?>">

                                <?php echo $row['matkul_panjang']; ?>
                                  
                              </option>

                            <?php }  ?>

                          <?php } ?>

                        </select>

                        <span class="help-block"> <?php echo form_error('kode_matkul'); ?></span> 

                      </div>

                    </div>

                    <div class="form-group <?php if(form_error('kelas')) { echo 'has-error'; } ?>">
                      
                      <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                      
                      <div class="col-sm-9">

                        <select class="selectpicker form-control select2" data-style="form-control btn-default btn-outline" name="kelas" id="kelas">

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

                        <span class="help-block"> <?php echo form_error('kelas'); ?></span> 

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="row">
                
                <div class="col-md-10 col-md-offset-2">   

                  <button class="btn btn-success btn-lable-wrap left-label ml-5" type="submit"> 
                    
                    <span class="btn-label"><i class="fa fa-pencil-square-o"></i></span>
                    
                    <span class="btn-text">Edit</span>

                  </button>

                  <a href="<?php echo base_url();?>admin/pengajaran">

                    <button class="btn btn-success btn-lable-wrap left-label ml-5" type="button"> 
                      
                      <span class="btn-label"><i class="fa fa-sign-out"></i> </span>
                      
                      <span class="btn-text">kembali</span>

                    </button>

                  </a>
                
                </div>

              </div>

            </div>

          </div>

        </form>

      </div> 

  </div>

</div>