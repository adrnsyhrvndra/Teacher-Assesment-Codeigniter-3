<div class="row justify-content-center">
  
  <div class="col-md-12">

      <div class="panel panel-default card-view">
        
        <div class="panel-heading">

          <div class="pull-left">

            <h6 class="panel-title txt-dark ">Perubahan data dosen</h6>

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
    
                      <input type="hidden" name="kode_dosen" value="<?php echo $dosen['kode_dosen']; ?>">

                      <div class="form-group <?php if(form_error('nama_dosen')) { echo 'has-error'; } ?>">
                        
                        <label for="nama_dosen" class="col-sm-2 control-label">Nama admin</label>
                        
                        <div class="col-sm-9">

                          <div class="input-group">

                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo $dosen['nama_dosen']; ?>">

                            <div class="input-group-addon">

                              <i class="icon-user"></i>

                            </div>

                          </div>

                          <span class="help-block"> <?php echo form_error('nama_dosen'); ?></span> 

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

                  <a href="<?php echo base_url();?>admin/dosen">

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