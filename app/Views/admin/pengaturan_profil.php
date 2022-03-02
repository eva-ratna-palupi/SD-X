<?= $this->extend('layout/theme-backend') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- dropzonejs -->
   <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
          <h1><?= $title?></h1>
      </div>
    </section> 

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h2 class="card-title">Data Profil</h2>
                <div class="card-tools">
                <?php foreach ($pengaturan as $key => $value) { ?>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $value['id'] ?>">
                          <i class="fas fa-edit"></i>
                          <span>Edit</span>
                <?php } ?>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">    
                  <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <?php foreach ($pengaturan as $key => $value) { ?>
                        <tr>
                          <th>Nama Sekolah</th><td> <?= $value['nama_sekolah'] ?> </td>
                        </tr>
                        <tr>
                          <th>NSS</th><td> <?= $value['nss'] ?> </td>
                        </tr>
                        <tr>
                          <th>NPSN</th><td> <?= $value['npsn'] ?> </td>
                        </tr>
                        <tr>
                          <th>Alamat</th> <td> <?= $value['alamat'] ?> </td>
                        </tr>
                        <tr>
                          <th>Desa</th><td> <?= $value['desa'] ?> </td>
                        </tr>
                        <tr>
                          <th>Kec.</th><td> <?= $value['kecamatan'] ?> </td>
                        </tr>
                        <tr>
                          <th>Kab.</th><td> <?= $value['kabupaten'] ?> </td>
                        </tr>                         
                        <tr>
                          <th>Prov.</th><td> <?= $value['provinsi'] ?> </td>
                        </tr>
                        <tr>
                          <th>Tahun Berdiri</th><td> <?= $value['tahun_pendirian'] ?> </td>
                        </tr>
                        <tr>
                          <th>Luas Tanah</th><td> <?= $value['luas_tanah'] ?> </td>
                        </tr>
                        <tr>
                          <th>Status</th><td> <?= $value['status'] ?> </td>
                        </tr>
                        <tr>
                          <th>Status Dalam Gugus</th><td> <?= $value['status_gugus'] ?> </td>
                        </tr>
                        <tr>
                        </tr>
                          <th>Akreditasi</th><td> <?= $value['akreditasi'] ?> </td>
                        </tr>
                        </thead>
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

<!--/modal edit / -->
      <?php foreach ($pengaturan as $key => $value) { ?>
      <div class="modal fade" id="edit<?= $value['id'] ?>">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Profil</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php echo form_open('pengaturanprofil/edit/' . $value['id'])?>
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-10">
                      <input name="nama sekolah" class="form-control" placeholder="Nama Sekolah" value="<?= $value['nama_sekolah'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">NSS</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="" placeholder="NSS" value="<?= $value['nss'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">NPSN</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="" placeholder="NPSN" value="<?= $value['npsn'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Alamat" value="<?= $value['alamat'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Desa" value="<?= $value['desa'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Kecamatan" value="<?= $value['kecamatan'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Kabupaten</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Kabupaten" value="<?= $value['kabupaten'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Provinsi" value="<?= $value['provinsi'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Tahun Berdiri</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Tahun Berdiri" value="<?= $value['tahun_pendirian'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Luas Tanah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Luas Tanah" value="<?= $value['luas_tanah'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Status" value="<?= $value['status'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Status Dalam Gugus</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Status Dalam Gugus" value="<?= $value['status_gugus'] ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Akreditasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Akreditasi" value="<?= $value['akreditasi'] ?>" required>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                      <button type="button" class="btn bg-gradient-danger btn-block" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                      <button type="submit" class="btn bg-gradient-primary btn-block"><i class="fas fa-save"></i> Simpan</button>
                </div>
                </form>
            </div>
          <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>
      <!-- /.modal -->

</section>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?= $this->endSection() ?>