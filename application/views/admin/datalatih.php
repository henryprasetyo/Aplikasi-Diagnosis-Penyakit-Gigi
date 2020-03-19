<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Halaman Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts Awesome     -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        </a>
        <a href="<?= base_url('dashboard') ?>" class="simple-text logo-normal">
          Dashboard
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="<?= base_url('dashboard') ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('tables') ?>">
              <i class="nc-icon nc-single-02"></i>
              <p>Data Pasien</p>
            </a>
          </li>
          <li class="active ">
            <a href="<?= base_url('datalatih') ?>">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Data Latih</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('penyakit') ?>">
              <i class="nc-icon nc-layout-11"></i>
              <p>Penyakit</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('gejala') ?>">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Gejala</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Data Latih</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="fas fa-sign-out-alt"></i>LogOut
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Keluar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah Anda Yakin Ingin Keluar?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <a href="<?= base_url('auth/logout') ?>"><button type="button" class="btn btn-danger"> Keluar</button></a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Latih</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Kode</th>
                      <th>Gejala1</th>
                      <th>Gejala2</th>
                      <th>Gejala3</th>
                      <th>Gejala4</th>
                      <th>Gejala5</th>
                      <th>Gejala6</th>
                      <th>Gejala7</th>
                      <th>Gejala8</th>
                      <th>Gejala9</th>
                      <th>Gejala10</th>
                      <th>Gejala11</th>
                      <th>Gejala12</th>
                      <th>Gejala13</th>
                      <th>Gejala14</th>
                      <th>Gejala15</th>
                      <th>Gejala16</th>
                      <th>Gejala17</th>
                      <th>Gejala18</th>
                      <th>Gejala19</th>
                      <th>Gejala20</th>
                      <th>Gejala21</th>
                      <th>Gejala22</th>
                      <th>Gejala23</th>
                      <th>Gejala24</th>
                      <th>Gejala25</th>
                      <th>Kategori</th>
                    </thead>
                    <tbody>
                      <?php foreach ($datalatih as $latih) : ?>
                        <tr>
                          <td><?= $latih['kode_datalatih']; ?></td>
                          <td><?= $latih['gejala1']; ?></td>
                          <td><?= $latih['gejala2']; ?></td>
                          <td><?= $latih['gejala3']; ?></td>
                          <td><?= $latih['gejala4']; ?></td>
                          <td><?= $latih['gejala5']; ?></td>
                          <td><?= $latih['gejala6']; ?></td>
                          <td><?= $latih['gejala7']; ?></td>
                          <td><?= $latih['gejala8']; ?></td>
                          <td><?= $latih['gejala9']; ?></td>
                          <td><?= $latih['gejala10']; ?></td>
                          <td><?= $latih['gejala11']; ?></td>
                          <td><?= $latih['gejala12']; ?></td>
                          <td><?= $latih['gejala13']; ?></td>
                          <td><?= $latih['gejala14']; ?></td>
                          <td><?= $latih['gejala15']; ?></td>
                          <td><?= $latih['gejala16']; ?></td>
                          <td><?= $latih['gejala17']; ?></td>
                          <td><?= $latih['gejala18']; ?></td>
                          <td><?= $latih['gejala19']; ?></td>
                          <td><?= $latih['gejala20']; ?></td>
                          <td><?= $latih['gejala21']; ?></td>
                          <td><?= $latih['gejala22']; ?></td>
                          <td><?= $latih['gejala23']; ?></td>
                          <td><?= $latih['gejala24']; ?></td>
                          <td><?= $latih['gejala25']; ?></td>
                          <td><?= $latih['kategori']; ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <a href="<?= base_url('inputdatalatih') ?>"><button type="button" class="btn btn-primary" name="tambah-data">
                        Tambah Data
                      </button>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/'); ?>js/core/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('assets/'); ?>js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/'); ?>js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
</body>

</html>