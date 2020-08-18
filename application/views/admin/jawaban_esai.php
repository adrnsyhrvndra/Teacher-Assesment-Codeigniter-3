
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div class="row">

  <div class="col-lg-8 col-xs-12 col-md-8 col-sm-8 col-xl-8 col-12">

    <div class="panel panel-default card-view">
        
        <div class="panel-wrapper collapse in">

          <div class="panel-body">

            <div class="row">

              <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12 col-xl-12">

                  <div class="table-wrap">

                    <div class="table-responsive">

                      <table id="export" class="table table-hover display pb-30">

                        <thead>
                          
                          <tr>

                            <th>No</th>

                            <th>Mahasiswa</th>

                            <th>Matkul</th>

                            <th>Dipertahankan</th>

                            <th>Ditingkatkan</th>

                          </tr>

                        </thead>

                        <tfoot>

                          <tr>

                            <th>No</th>

                            <th>Mahasiswa</th>

                            <th>Matkul</th>

                            <th>Dipertahankan</th>

                            <th>Ditingkatkan</th>

                        </tr>

                        </tfoot>

                        <tbody>

                          <?php  

                            $NO = 1; 

                            foreach ($jawaban as $row) { 

                          ?>

                            <tr>

                              <td><?php echo $NO++; ?></td>

                              <td><?php echo $row['nama']; ?> - <?php echo $row['kelas']; ?></td>

                              <td><?php echo $row['matkul_pendek']; ?></td>

                              <td><?php echo $row['dipertahankan']; ?></td>

                              <td><?php echo $row['ditingkatkan']; ?></td>

                            </tr>

                          <?php } ?>

                        </tbody>

                      </table>

                    </div>

                  </div>

              </div>

            </div>

          </div>

        </div>

    </div>

  </div>

  <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 col-xl-4 col-12">
      
    <div class="panel panel-default card-view">
          
        <div class="panel-wrapper collapse in">

          <div class="panel-body text-center">

            <figure class="mt-2">

              <img src="<?php echo base_url(); ?>assets/img/Polban-3.png" alt="image" class="text-center"/>

              <figcaption>Data dosen</figcaption>

            </figure>

            <h6 class="mt-20 weight-500">

              <i class="fa fa-graduation-cap text-success mr-5"></i> <?php echo $data_dosen['nama_dosen']; ?>

            </h6>

          </div>

        </div>

    </div>

    <a href="<?php echo base_url(); ?>admin/pilih_jawaban_esai">

      <button class="btn btn-success btn-lable-wrap left-label" type="submit" style="margin-left:-8px;"> 
      
        <span class="btn-label"><i class="fa fa-sign-out"></i> </span>
        
        <span class="btn-text">kembali</span>
        
      </button>

    </a>

  </div>  

</div>




