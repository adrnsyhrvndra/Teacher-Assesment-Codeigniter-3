<div class="row justify-content-center">
  
  <div class="col-md-12">

      <div class="panel panel-default card-view">
        
        <div class="panel-heading">

          <div class="pull-left">

            <h6 class="panel-title txt-dark ">Perubahan data matkul</h6>

          </div>

          <div class="clearfix"></div>

        </div>

        <hr class="light-grey-hr"/>

        <form class="form-horizontal" role="form" method="POST">

          <div class="panel-wrapper collapse in">
            
            <div class="panel-body">
              
              <div class="row">
                
                <div class="col-sm-12 col-xs-12">
                  
                  <div class="form-wrap">
    
                      <input type="hidden" name="kode_matkul" value="<?php echo $matkul['kode_matkul']; ?>">

                      <div class="form-group <?php if(form_error('matkul_pendek')) { echo 'has-error'; } ?>">
                        
                        <label for="matkul_pendek" class="col-sm-2 control-label">Matkul pendek</label>
                        
                        <div class="col-sm-9">

                          <div class="input-group">

                            <input type="text" class="form-control" id="matkul_pendek" name="matkul_pendek" value="<?php echo $matkul['matkul_pendek']; ?>">

                            <div class="input-group-addon">

                              <i class="icon-user"></i>

                            </div>

                          </div>

                          <span class="help-block"> <?php echo form_error('matkul_pendek'); ?></span> 

                        </div>

                      </div>

                      <div class="form-group <?php if(form_error('matkul_panjang')) { echo 'has-error'; } ?>">
                        
                        <label for="matkul_panjang" class="col-sm-2 control-label">Matkul panjang</label>
                        
                        <div class="col-sm-9">

                          <div class="input-group">

                            <input type="text" class="form-control" id="matkul_panjang" name="matkul_panjang" value="<?php echo $matkul['matkul_panjang']; ?>">

                            <div class="input-group-addon">

                              <i class="icon-user"></i>

                            </div>

                          </div>

                          <span class="help-block"> <?php echo form_error('matkul_panjang'); ?></span> 

                        </div>

                      </div>

                  </div>

                </div>

              </div>

              <div class="row">
                
                <div class="col-md-10 col-md-offset-2">   

                  <button class="btn btn-success btn-lable-wrap left-label ml-5" type="submit"> 
                    
                    <span class="btn-label"><i class="fa fa-pencil-square-o"></i></span>
                    
                    <span class="btn-text">edit</span>

                  </button>

                  <a href="<?php echo base_url();?>admin/admin">

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