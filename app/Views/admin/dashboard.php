<?= $this->extend('layout/theme-backend') ?>

<?= $this->section('content') ?>
<div class="jumbotron">
     <h1 class="display-4"><strong>Selamat Datang 
     <?php if (session()->get('username') == "") { ?>
        <?php } else { ?>
                            <?= session()->get('nama') ?>
                    <?php } ?>
     </strong></h1>
     <p class="lead">Administrasi Sistem Informasi Profil Sekolah SD Negeri Kalicupak Kidul</p>
     <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
   </div>
<?= $this->endSection() ?>
   