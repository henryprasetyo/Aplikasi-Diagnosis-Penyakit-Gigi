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
    Halaman Input Data Latih
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
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/'); ?>css/demo/demo.css" rel="stylesheet" />
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
          <li>
            <a href="<?= base_url('datalatih') ?>">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Data Latih</p>
            </a>
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
            <a class="navbar-brand" href="#pablo">Input Data Latih</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link btn-rotate" data-toggle="modal" data-target="#logoutmodal">
                  <i class="fas fa-sign-out-alt"></i>LogOut
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- Modal -->
      <div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


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
                  <form action="<?= base_url('inputdatalatih'); ?>" method="post">

                    <div class="form-group row">
                      <label for="gejala1" class="col-sm-2 col-form-label">G01 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala1" name="gejala1">
                          <option value="">Select Gejala1</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala2" class="col-sm-2 col-form-label">G02 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala2" name="gejala2">
                          <option value="">Select Gejala2</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala3" class="col-sm-2 col-form-label">G03 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala3" name="gejala3">
                          <option value="">Select Gejala3</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala4" class="col-sm-2 col-form-label">G04 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala4" name="gejala4">
                          <option value="">Select Gejala4</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala5" class="col-sm-2 col-form-label">G05 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala5" name="gejala5">
                          <option value="">Select Gejala5</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala6" class="col-sm-2 col-form-label">G06 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala6" name="gejala6">
                          <option value="">Select Gejala6</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala7" class="col-sm-2 col-form-label">G07 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala7" name="gejala7">
                          <option value="">Select Gejala7</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala8" class="col-sm-2 col-form-label">G08 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala8" name="gejala8">
                          <option value="">Select Gejala8</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala9" class="col-sm-2 col-form-label">G09 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala9" name="gejala9">
                          <option value="">Select Gejala9</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala10" class="col-sm-2 col-form-label">G10 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala10" name="gejala10">
                          <option value="">Select Gejala10</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala11" class="col-sm-2 col-form-label">G11 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala11" name="gejala11">
                          <option value="">Select Gejala11</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala12" class="col-sm-2 col-form-label">G12 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala12" name="gejala12">
                          <option value="">Select Gejala12</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala13" class="col-sm-2 col-form-label">G13 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala13" name="gejala13">
                          <option value="">Select Gejala13</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala14" class="col-sm-2 col-form-label">G14 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala14" name="gejala14">
                          <option value="">Select Gejala14</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala15" class="col-sm-2 col-form-label">G15 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala15" name="gejala15">
                          <option value="">Select Gejala15</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala16" class="col-sm-2 col-form-label">G16 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala16" name="gejala16">
                          <option value="">Select Gejala16</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala17" class="col-sm-2 col-form-label">G17 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala17" name="gejala17">
                          <option value="">Select Gejala17</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala18" class="col-sm-2 col-form-label">G18 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala18" name="gejala18">
                          <option value="">Select Gejala18</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala19" class="col-sm-2 col-form-label">G19 :</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala19" name="gejala19">
                          <option value="">Select Gejala19</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="gejala20" class="col-sm-2 col-form-label">G20 : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="gejala20" name="gejala20">
                          <option value="">Select Gejala20</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="kategori" class="col-sm-2 col-form-label">Kategori : </label>
                      <div class="col-sm-3">
                        <select class="form-control" id="kategori" name="kategori">
                          <option value="">Pilih Kategori</option>
                          <option value="Scabies">Pulpa</option>
                          <option value="Ringworm">Gingivitis</option>
                          <option value="Alergi Dermatitis">Abses Gigi</option>
                          <option value="Feline Acne">Karies</option>
                          <option value="Pyoderma">Periodontitis</option>
                          <option value="Kutu Lice">Perikoronitis</option>
                        </select>
                      </div>
                    </div>



                    <div class="form-group row mt-5">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Input Data Latih</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

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