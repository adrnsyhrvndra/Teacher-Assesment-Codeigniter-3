
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

                        <th>Kode pengajaran</th>
                        
                        <th>Kode dosen</th>

                        <th>Nama dosen</th>

                        <th>Kode matkul</th>

                        <th>Nama matkul</th>

                        <th>Kelas</th>

                        <th>Aksi</th>

                      </tr>

                    </thead>

                    <tfoot>

                      <tr>

                        <th>No</th>

                        <th>Kode pengajaran</th>
                        
                        <th>Kode dosen</th>

                        <th>Nama dosen</th>

                        <th>Kode matkul</th>

                        <th>Nama matkul</th>

                        <th>Kelas</th>

                        <th>Aksi</th>

                     </tr>

                    </tfoot>

                    <tbody>

                      <?php  

                        $NO = 1; 

                        foreach ($pengajaran as $row) { 

                      ?>

                        <tr>

                          <td><?php echo $NO++; ?></td>
                          
                          <td><?php echo $row['kode_pengajaran']; ?></td>

                          <td><?php echo $row['kode_dosen']; ?></td>

                          <td><?php echo $row['nama_dosen']; ?></td>

                          <td><?php echo $row['kode_matkul']; ?></td>

                          <td><?php echo $row['matkul_panjang']; ?></td>

                          <td><?php echo $row['kelas']; ?></td>

                          <td>

                            <a href="<?php echo base_url();?>admin/pengajaranEdit/<?php echo $row['kode_pengajaran']; ?>" class="mr-25"  data-original-title="Edit"><i class="fa fa-pencil text-inverse m-r-10"></i> 
                            </a> 

                            <a class="delete" href="<?php echo base_url();?>admin/pengajaranHapus/<?php echo $row['kode_pengajaran']; ?>" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> 
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

<div class="row">

  <div class="col-lg-10 col-xs-10 col-md-10 col-xl-10 ">

    <a href="<?php echo base_url(); ?>admin/tambahDataPengajaran">

      <button type="submit" class="btn btn-success btn-lable-wrap left-label mt-3 tombolTambahData"> 

        <span class="btn-label">

          <i class="zmdi zmdi-developer-board"></i> 

        </span>

        <span class="btn-text">

          Tambah pengajaran

        </span>

      </button> 

    </a>     

  </div>

</div>




