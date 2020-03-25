<div class="row justify-content-center">
  
  <div class="col-md-12">

      <div class="panel panel-default card-view">
        
        <div class="panel-heading">

          <div class="pull-left">

            <h6 class="panel-title txt-dark ">Perubahan data pertanyaan</h6>

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
    
                      <input type="hidden" name="kode_pertanyaan" value="<?php echo $pertanyaan['kode_pertanyaan']; ?>">

                      <div class="form-group">
                        
                        <label for="pertanyaan" class="col-sm-2 control-label">Pertanyaan</label>
                        
                        <div class="col-sm-9">

                          <textarea class="form-control" placeholder="Dosen ybs memberi umpan balik terhadap hasil ujian/quiz/tugas anda" id="pertanyaan" rows="5" name="pertanyaan"><?php echo $pertanyaan['pertanyaan']; ?></textarea>

                        </div>

                      </div>

                  </div>

                </div>

              </div>

              <div class="row">
                
                <div class="col-md-10 col-md-offset-2">   

                  <button class="btn btn-success btn-lable-wrap left-label ml-5" type="submit"> 
                    
                    <span class="btn-label"><i class="fa fa-pencil-square-o"></i> </span>
                    
                    <span class="btn-text">edit</span>

                  </button>

                  <a href="<?php echo base_url();?>admin/pertanyaan">

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