
<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashgagal'); ?>"></div>

<div class="row justify-content-center">
  
  <div class="col-md-12">

      <div class="panel panel-default card-view">
        
        <div class="panel-heading">

          <div class="pull-left">

            <h6 class="panel-title txt-dark ">Ganti password</h6>

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

                    <div class="form-group <?php if(form_error('password')) { echo 'has-error'; } ?>">
                      
                      <label for="password" class="col-sm-2 control-label">Password</label>
                      
                      <div class="col-sm-9">

                        <div class="input-group">

                          <input type="password" class="form-control" id="password" name="password">

                          <div class="input-group-addon">

                            <i class="icon-user"></i>

                          </div> 

                        </div>

                        <span class="help-block"> <?php echo form_error('password'); ?></span>

                      </div>

                    </div> 

                    <div class="form-group <?php if(form_error('new_password')) { echo 'has-error'; } ?>">
                      
                      <label for="new_password" class="col-sm-2 control-label">Password Baru</label>
                      
                      <div class="col-sm-9">

                        <div class="input-group">

                          <input type="password" class="form-control" id="new_password" name="new_password">

                          <div class="input-group-addon">

                            <i class="icon-user"></i>

                          </div> 

                        </div>

                        <span class="help-block"> <?php echo form_error('new_password'); ?></span>

                      </div>

                    </div> 

                  </div>

                </div>

              </div>

              <div class="row">
                
                <div class="col-md-10 col-md-offset-2">   

                  <button class="btn btn-success btn-lable-wrap left-label ml-5" type="submit"> 
                    
                    <span class="btn-label"><i class="zmdi zmdi-key"></i></span>
                    
                    <span class="btn-text">ganti password</span>

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