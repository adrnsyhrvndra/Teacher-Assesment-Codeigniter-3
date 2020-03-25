
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

                        <th>Kode Matkul</th>

                        <th>Matkul Pendek</th>

                        <th>Matkul Panjang</th>

                        <th>Aksi</th>

                      </tr>

                    </thead>

                    <tfoot>

                      <tr>

                        <th>No</th>

                        <th>Kode Matkul</th>

                        <th>Matkul Pendek</th>

                        <th>Matkul Panjang</th>
                        
                        <th>Aksi</th>

                     </tr>

                    </tfoot>

                    <tbody>

                      <?php  

                        $NO = 1; 

                        foreach ($matkul as $row) { 

                      ?>

                        <tr>

                          <td><?php echo $NO; ?></td>

                          <td><?php echo $row['kode_matkul']; ?></td>

                          <td><?php echo $row['matkul_pendek']; ?></td>

                          <td><?php echo $row['matkul_panjang']; ?></td>


                          <td>

                            <a href="<?php echo base_url();?>admin/matkulEdit/<?php echo $row['kode_matkul']; ?>" class="mr-25" data-toggle="tooltip modal" data-target="#responsive-modal" data-original-title="Edit"><i class="fa fa-pencil text-inverse m-r-10"></i> 
                            </a> 

                            <a class="delete" href="<?php echo base_url();?>admin/matkulHapus/<?php echo $row['kode_matkul']; ?>" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> 
                            </a> 

                          </td>

                        </tr>

                      <?php $NO++; ?>

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

          <i class="fa fa-book"></i> 

        </span>

        <span class="btn-text">

          Tambah matkul

        </span>

      </button> 

    </a>     

  </div>

</div>

<form method="POST" action="<?php echo base_url(); ?>admin/matkulTambah">

  <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

          <h5 class="modal-title">Tambah data matkul</h5>

        </div>

        <div class="modal-body"> 

          <div class="form-group">

            <label for="kode_matkul" class="control-label mb-10">Kode matkul</label>

            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul">

          </div>

          <div class="form-group">

            <label for="matkul_pendek" class="control-label mb-10">Matkul pendek</label>

            <input type="text" class="form-control" id="matkul_pendek" name="matkul_pendek">

          </div>   

          <div class="form-group">

            <label for="matkul_panjang" class="control-label mb-10">Matkul panjang</label>

            <input type="text" class="form-control" id="matkul_panjang" name="matkul_panjang">

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




