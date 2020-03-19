    <!-- Start Jumbotron -->
    <div class="jumbotron">
      <div class="container">
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Start Card -->
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
          <div class="card content formdiagnosa">
            <div class="card-header">
              <h3>Form Diagnosa Penyakit Gigi</h3>
            </div>
            <div class="card-body">

              <p>Selamat Datang <b><?= $this->session->userdata('nama'); ?></b></p>
              <p> Silahkan checklist kuisioner di bawah sesuai gejala yang anda rasakan.</p>
              <!-- <p>Email: <b><?= $this->session->userdata('email'); ?></b></p>-->

              <div class="funkyradio">
                <?= form_open('Diagnosa/pertanyaan'); ?>
                <?php $i = 1 ?>
                <!-- pengulangan untuk menampilkan nama gejala & gejala yang dipilih -->
                <?php foreach ($gejala as $g) : ?>
                  <div class="boxes">
                    <input type="checkbox" name="gejala<?= $i; ?>" value="Y" id="checkbox<?= $i; ?>">
                    <label for="checkbox<?= $i; ?>"><?= $g['gejala'] ?></label>
                  </div>
                  <?php $i++ ?>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-primary mt-5">Selanjutnya</button>
                <?= form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->