
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

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

                        <th>Nim</th>
                        
                        <th>Nama mahasiswa</th>

                        <th>Kelas</th>

                        <th>Aksi</th>

                      </tr>

                    </thead>

                    <tfoot>

                      <tr>

                        <th>No</th>

                        <th>Nim</th>
                        
                        <th>Nama mahasiswa</th>

                        <th>Kelas</th>

                        <th>Aksi</th>

                      </tr>

                    </tfoot>

                    <tbody>

                      <?php  

                        $NO = 1; 

                        foreach ($mahasiswa as $row) { 

                      ?>

                        <tr>

                          <td><?php echo $NO++; ?></td>
                          
                          <td><?php echo $row['nim']; ?></td>

                          <td><?php echo $row['nama']; ?></td>

                          <td><?php echo $row['kelas']; ?></td>

                          <td>

                            <a class="delete" href="<?php echo base_url();?>admin/mahasiswaHapus/<?php echo $row['nim']; ?>" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> 
                            </a> 

                          </td>

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





