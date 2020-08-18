
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

                        <th>Kode dosen</th>
                        
                        <th>Nama dosen</th>

                        <th>Aksi</th>

                      </tr>

                    </thead>

                    <tfoot>

                      <tr>

                        <th>No</th>

                        <th>Kode dosen</th>
                        
                        <th>Nama dosen</th>

                        <th>Aksi</th>

                     </tr>

                    </tfoot>

                    <tbody>

                      <?php  

                        $NO = 1; 

                        foreach ($dosen as $row) { 

                      ?>

                        <tr>

                          <td><?php echo $NO++; ?></td>
                          
                          <td><?php echo $row['kode_dosen']; ?></td>

                          <td><?php echo $row['nama_dosen']; ?></td>

                          <td>

                            <a href="<?php echo base_url();?>admin/dosenEdit/<?php echo $row['kode_dosen']; ?>" class="mr-25" data-toggle="tooltip modal" data-target="#responsive-modal" data-original-title="Edit"><i class="fa fa-pencil text-inverse m-r-10"></i> 
                            </a> 

                            <a class="delete" href="<?php echo base_url();?>admin/dosenHapus/<?php echo $row['kode_dosen']; ?>" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> 
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

    <a href="#" data-toggle="modal" data-target="#responsive-modal">

      <button type="submit" class="btn btn-success btn-lable-wrap left-label mt-3 tombolTambahData"> 

        <span class="btn-label">

          <i class="zmdi zmdi-graduation-cap"></i> 

        </span>

        <span class="btn-text">

          Tambah dosen

        </span>

      </button> 

    </a>     

  </div>

</div>

<form method="POST" action="<?php echo base_url(); ?>admin/dosenTambah">

  <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

          <h5 class="modal-title">Tambah data dosen</h5>

        </div>

        <div class="modal-body"> 

          <div class="form-group">

            <label for="kode_dosen" class="control-label mb-10">Kode dosen</label>

            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen">

          </div>

          <div class="form-group">

            <label for="nama_dosen" class="control-label mb-10">Nama dosen</label>

            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">

          </div>   

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-success">Tambah</button>

        </div>

      </div>

    </div>

  </div>

</form>




