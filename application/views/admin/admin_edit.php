
<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flashgagal'); ?>"></div>

<div class="row justify-content-center">
  
  <div class="col-md-12">

      <div class="panel panel-default card-view">
        
        <div class="panel-heading">

          <div class="pull-left">

            <h6 class="panel-title txt-dark ">Perubahan data admin</h6>

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
    
                    <input type="hidden" name="kode_admin" value="<?php echo $admin['kode_admin']; ?>">

                    <div class="form-group <?php if(form_error('nama_admin')) { echo 'has-error'; } ?>">
                      
                      <label for="nama_admin" class="col-sm-2 control-label">Nama admin</label>
                      
                      <div class="col-sm-9">

                        <div class="input-group">

                          <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="<?php echo $admin['nama_admin'] ?>">

                          <div class="input-group-addon">

                            <i class="icon-user"></i>

                          </div>

                        </div>

                        <span class="help-block"> <?php echo form_error('nama_admin'); ?></span> 

                      </div>

                    </div>

                    <div class="form-group <?php if(form_error('email')) { echo 'has-error'; } ?>">
                      
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      
                      <div class="col-sm-9">

                        <div class="input-group">

                          <input type="text" class="form-control" id="email" name="email" value="<?php echo $admin['email'] ?>">

                          <div class="input-group-addon">

                            <i class="icon-user"></i>

                          </div>

                        </div>

                        <span class="help-block"> <?php echo form_error('email'); ?></span> 

                      </div>

                    </div>

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