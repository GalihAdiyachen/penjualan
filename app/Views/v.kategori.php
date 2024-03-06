<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i class="fas fa-plus"></i>
                  Tambah Data
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                if (session()->getFlashdata('pesan')){
                    echo '  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5>
                  </div>';
                }
                ?>
                    <!-- <table class="table teble-responsive table-bordered"> -->
                    <table class="table table-bordered">
                       <thead>
                       <tr class="text-center">
                            <th width="50px">No</th>
                            <th>Kategori</th>
                            <th width="100px">Aksi</th>
                        </tr>
                       </thead>
                       <tbody>
                        <?php $no = 1;
                        foreach ($kategori as $key => $value){ ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama_kategori']?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal"data-target="#edit-data<?=$value['id_kategori'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-danger btn-sm btn-flat " data-toggle="modal"data-target="#delete-data<?=$value['id_kategori'] ?>"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>

                        <?php } ?>
                        </tbody>

                    </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>

             <!-- Modall add Data -->
          </div>
          <div class="modal fade" id="tambah-data">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('kategori/InsertData')?>
            <div class="modal-body">
                 <div class="form-group">
                  <label for="">Nama kategori</label>
                  <input name="nama_kategori" class="form-control" placeholder="kategori" required>
                 </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat"data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
            <?php echo form_close()?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

   <!-- Modall Edit Data -->
   <?php foreach ($kategori as $key => $value){ ?>
   </div>
          <div class="modal fade" id="edit-data<?= $value['id_kategori']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('kategori/UpdateData/' .$value['id_kategori']) ?>
            <div class="modal-body">
                 <div class="form-group">
                  <label for="">Nama kategori</label>
                  <input name="nama_kategori" value= "<?= $value['nama_kategori']?>" class="form-control" placeholder="kategori" required>
                 </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat"data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning btn-flat">Simpan</button>
            </div>
            <?php echo form_close()?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php } ?>

<!-- Modall Hapus Data -->
<?php foreach ($kategori as $key => $value){ ?>
   </div>
          <div class="modal fade" id="delete-data<?= $value['id_kategori']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <p>Apakah Anda Yakin Ingin Hapus Data Ini ->
                  <b><?= $value['nama_kategori'] ?>..???</b>
                </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat"data-dismiss="modal">Close</button>
              <a href="<?= base_url('kategori/DeleteData/'.$value['id_kategori'])  ?>" class="btn btn-danger btn-flat">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php } ?>
