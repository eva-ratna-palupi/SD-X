<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SD Negeri Kalicupak Kidul | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
        <a href="<?= base_url() ?>"><b>Login </b></a>        
  </div>
  <p class="text-center">Sistem Informasi Profil Sekolah <br>  SD Negeri Kalicupak Kidul</p>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login</p>

      <?php
        $errors = session()->getFlashdata('errors');
        if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors  as $key => $value) { ?>
                        <li><?= esc($value) ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php }  ?>

        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-warning" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        if (session()->getFlashdata('sukses')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('sukses');
            echo '</div>';
        }
        ?>

      <?php echo form_open('auth/cek_login') ?>
      <div class="form-group has-feedback">
            <input name="username" class="form-control" placeholder="Username">
            
        </div>
        <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <select name="level" class="form-control">
                <option value="">--Pilih Hak Akses--</option>
                <option value="1">1. Admin</option>
                <option value="2">2. Kepala Sekolah</option>
              </select>
        </div><br>
        <div class="row">
                <button type="submit" class="btn btn-block btn-primary">Log In</button>
        </div>
<?php echo form_close() ?>
    </div></div></div></div></div></div>
  <br><br><br>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    });    
</script>

</body>
</html>
