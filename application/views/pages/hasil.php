<!-- Start Card -->
<div class="container" style="margin-top:150px;">
  <div class="row justify-content-md-center">
    <div class="col-md-9">
      <div class="card content">
        <div class="card-header">
          <h4>Form Gejala-Gejala Terkait Penyakit</h4>
        </div>
        <div class="card-body">
          <p>Hai <b><?= $this->session->userdata('nama'); ?></b></p>
          <p> Berikut hasil dari diagnosa penyakit.</p>
          <!-- <p>Email: <b><?= $this->session->userdata('email'); ?></b></p>-->
          <table class="table table-hover mt-4">
            <?php $i = 1 ?>
            <!-- pengulangan untuk menampilkan nama gejala & gejala yang dipilih -->
            <?php foreach ($gejala as $g) : ?>
              <tr>
                <td>
                  <label>
                    <?= $g['gejala'] ?>
                  </label>
                </td>
                <td>
                  <!-- unutk menampilkan data gejala yang dipilih melalui session -->
                  <?= $this->session->userdata('gejala' . $i++); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php

  //pengulangan untuk penyerderhanaan variable
  for ($i = 1; $i <= 25; $i++) {
    $gejala[$i] = strip_tags($this->session->userdata('gejala' . $i));
  }

  //jumlah datalatih per penyakit
  $jumK1 = getOut("Pulpa");
  $jumK2 = getOut("Gingivitis");
  $jumK3 = getOut("Abses Gigi");
  $jumK4 = getOut("Karies");
  $jumK5 = getOut("Periodontitis");
  $jumK6 = getOut("Perikoronitis");

  //jumlah total datalatih
  $totK = $jumK1 + $jumK2 + $jumK3 + $jumK4 + $jumK5 + $jumK6;

  //jumlah gejala
  for ($i = 1; $i <= 25; $i++) {
    //jumlah penyakit
    for ($j = 1; $j <= 6; $j++) {
      $jum[$i][$j] = getKK($gejala[$i], $penyakit[$j - 1]['nama_penyakit'], 'gejala' . $i);
    }
  }

  //rumus perhitungan Naive Bayes
  $P1 = ($jumK1 / $totK) * ($jum[1][1] / $jumK1) * ($jum[2][1] / $jumK1) * ($jum[3][1] / $jumK1) * ($jum[4][1] / $jumK1) * ($jum[5][1] / $jumK1) * ($jum[6][1] / $jumK1) * ($jum[7][1] / $jumK1) * ($jum[8][1] / $jumK1) * ($jum[9][1] / $jumK1) * ($jum[10][1] / $jumK1) * ($jum[11][1] / $jumK1) * ($jum[12][1] / $jumK1) * ($jum[13][1] / $jumK1) * ($jum[14][1] / $jumK1) * ($jum[15][1] / $jumK1) * ($jum[16][1] / $jumK1) * ($jum[17][1] / $jumK1) * ($jum[18][1] / $jumK1) * ($jum[19][1] / $jumK1) * ($jum[20][1] / $jumK1) * ($jum[21][1] / $jumK1) * ($jum[22][1] / $jumK1) * ($jum[23][1] / $jumK1) * ($jum[24][1] / $jumK1) * ($jum[25][1] / $jumK1);

  $P2 = ($jumK2 / $totK) * ($jum[1][2] / $jumK2) * ($jum[2][2] / $jumK2) * ($jum[3][2] / $jumK2) * ($jum[4][2] / $jumK2) * ($jum[5][2] / $jumK2) * ($jum[6][2] / $jumK2) * ($jum[7][2] / $jumK2) * ($jum[8][2] / $jumK2) * ($jum[9][2] / $jumK2) * ($jum[10][2] / $jumK2) * ($jum[11][2] / $jumK2) * ($jum[12][2] / $jumK2) * ($jum[13][2] / $jumK2) * ($jum[14][2] / $jumK2) * ($jum[15][2] / $jumK2) * ($jum[16][2] / $jumK2) * ($jum[17][2] / $jumK2) * ($jum[18][2] / $jumK2) * ($jum[19][2] / $jumK2) * ($jum[20][2] / $jumK2) * ($jum[21][2] / $jumK2) * ($jum[22][2] / $jumK2) * ($jum[23][2] / $jumK2) * ($jum[24][2] / $jumK2) * ($jum[25][2] / $jumK2);

  $P3 = ($jumK3 / $totK) * ($jum[1][3] / $jumK3) * ($jum[2][3] / $jumK3) * ($jum[3][3] / $jumK3) * ($jum[4][3] / $jumK3) * ($jum[5][3] / $jumK3) * ($jum[6][3] / $jumK3) * ($jum[7][3] / $jumK3) * ($jum[8][3] / $jumK3) * ($jum[9][3] / $jumK3) * ($jum[10][3] / $jumK3) * ($jum[11][3] / $jumK3) * ($jum[12][3] / $jumK3) * ($jum[13][3] / $jumK3) * ($jum[14][3] / $jumK3) * ($jum[15][3] / $jumK3) * ($jum[16][3] / $jumK3) * ($jum[17][3] / $jumK3) * ($jum[18][3] / $jumK3) * ($jum[19][3] / $jumK3) * ($jum[20][3] / $jumK3) * ($jum[21][3] / $jumK3) * ($jum[22][3] / $jumK3) * ($jum[23][3] / $jumK3) * ($jum[24][3] / $jumK3) * ($jum[25][3] / $jumK3);

  $P4 = ($jumK4 / $totK) * ($jum[1][4] / $jumK4) * ($jum[2][4] / $jumK4) * ($jum[3][4] / $jumK4) * ($jum[4][4] / $jumK4) * ($jum[5][4] / $jumK4) * ($jum[6][4] / $jumK4) * ($jum[7][4] / $jumK4) * ($jum[8][4] / $jumK4) * ($jum[9][4] / $jumK4) * ($jum[10][4] / $jumK4) * ($jum[11][4] / $jumK4) * ($jum[12][4] / $jumK4) * ($jum[13][4] / $jumK4) * ($jum[14][4] / $jumK4) * ($jum[15][4] / $jumK4) * ($jum[16][4] / $jumK4) * ($jum[17][4] / $jumK4) * ($jum[18][4] / $jumK4) * ($jum[19][4] / $jumK4) * ($jum[20][4] / $jumK4) * ($jum[21][4] / $jumK4) * ($jum[22][4] / $jumK4) * ($jum[23][4] / $jumK4) * ($jum[24][4] / $jumK4) * ($jum[25][4] / $jumK4);

  $P5 = ($jumK5 / $totK) * ($jum[1][5] / $jumK5) * ($jum[2][5] / $jumK5) * ($jum[3][5] / $jumK5) * ($jum[4][5] / $jumK5) * ($jum[5][5] / $jumK5) * ($jum[6][5] / $jumK5) * ($jum[7][5] / $jumK5) * ($jum[8][5] / $jumK5) * ($jum[9][5] / $jumK5) * ($jum[10][5] / $jumK5) * ($jum[11][5] / $jumK5) * ($jum[12][5] / $jumK5) * ($jum[13][5] / $jumK5) * ($jum[14][5] / $jumK5) * ($jum[15][5] / $jumK5) * ($jum[16][5] / $jumK5) * ($jum[17][5] / $jumK5) * ($jum[18][5] / $jumK5) * ($jum[19][5] / $jumK5) * ($jum[20][5] / $jumK5) * ($jum[21][5] / $jumK5) * ($jum[22][5] / $jumK5) * ($jum[23][5] / $jumK5) * ($jum[24][5] / $jumK5) * ($jum[25][5] / $jumK5);

  $P6 = ($jumK6 / $totK) * ($jum[1][6] / $jumK6) * ($jum[2][6] / $jumK6) * ($jum[3][6] / $jumK6) * ($jum[4][6] / $jumK6) * ($jum[5][6] / $jumK6) * ($jum[6][6] / $jumK6) * ($jum[7][6] / $jumK6) * ($jum[8][6] / $jumK6) * ($jum[9][6] / $jumK6) * ($jum[10][6] / $jumK6) * ($jum[11][6] / $jumK6) * ($jum[12][6] / $jumK6) * ($jum[13][6] / $jumK6) * ($jum[14][6] / $jumK6) * ($jum[15][6] / $jumK6) * ($jum[16][6] / $jumK6) * ($jum[17][6] / $jumK6) * ($jum[18][6] / $jumK6) * ($jum[19][6] / $jumK6) * ($jum[20][6] / $jumK6) * ($jum[21][6] / $jumK6) * ($jum[22][6] / $jumK6) * ($jum[23][6] / $jumK6) * ($jum[24][6] / $jumK6) * ($jum[25][6] / $jumK6);

  //Tampilan rumus perhitungan Naive Bayes
  $H1 = ($jumK1 . "/" . $totK) . "*" . ($jum[1][1] . "/" . $jumK1) . "*" . ($jum[2][1] . "/" . $jumK1) . "*" . ($jum[3][1] . "/" . $jumK1) . "*" . ($jum[4][1] . "/" . $jumK1) . "*" . ($jum[5][1] . "/" . $jumK1) . "*" . ($jum[6][1] . "/" . $jumK1) . "*" . ($jum[7][1] . "/" . $jumK1) . "*" . ($jum[8][1] . "/" . $jumK1) . "*" . ($jum[9][1] . "/" . $jumK1) . "*" . ($jum[10][1] . "/" . $jumK1) . "*" . ($jum[11][1] . "/" . $jumK1) . "*" . ($jum[12][1] . "/" . $jumK1) . "*" . ($jum[13][1] . "/" . $jumK1) . "*" . ($jum[14][1] . "/" . $jumK1) . "*" . ($jum[15][1] . "/" . $jumK1) . "*" . ($jum[16][1] . "/" . $jumK1) . "*" . ($jum[17][1] . "/" . $jumK1) . "*" . ($jum[18][1] . "/" . $jumK1) . "*" . ($jum[19][1] . "/" . $jumK1) . "*" . ($jum[20][1] . "/" . $jumK1) . "*" . ($jum[21][1] . "/" . $jumK1) . "*" . ($jum[22][1] . "/" . $jumK1) . "*" . ($jum[23][1] . "/" . $jumK1) . "*" . ($jum[24][1] . "/" . $jumK1) . "*" . ($jum[25][1] . "/" . $jumK1);

  $H2 = ($jumK2 . "/" . $totK) . "*" . ($jum[1][2] . "/" . $jumK2) . "*" . ($jum[2][2] . "/" . $jumK2) . "*" . ($jum[3][2] . "/" . $jumK2) . "*" . ($jum[4][2] . "/" . $jumK2) . "*" . ($jum[5][2] . "/" . $jumK2) . "*" . ($jum[6][2] . "/" . $jumK2) . "*" . ($jum[7][2] . "/" . $jumK2) . "*" . ($jum[8][2] . "/" . $jumK2) . "*" . ($jum[9][2] . "/" . $jumK2) . "*" . ($jum[10][2] . "/" . $jumK2) . "*" . ($jum[11][2] . "/" . $jumK2) . "*" . ($jum[12][2] . "/" . $jumK2) . "*" . ($jum[13][2] . "/" . $jumK2) . "*" . ($jum[14][2] . "/" . $jumK2) . "*" . ($jum[15][2] . "/" . $jumK2) . "*" . ($jum[16][2] . "/" . $jumK2) . "*" . ($jum[17][2] . "/" . $jumK2) . "*" . ($jum[18][2] . "/" . $jumK2) . "*" . ($jum[19][2] . "/" . $jumK2) . "*" . ($jum[20][2] . "/" . $jumK2) . "*" . ($jum[21][2] . "/" . $jumK2) . "*" . ($jum[22][2] . "/" . $jumK2) . "*" . ($jum[23][2] . "/" . $jumK2) . "*" . ($jum[24][2] . "/" . $jumK2) . "*" . ($jum[25][2] . "/" . $jumK2);

  $H3 = ($jumK3 . "/" . $totK) . "*" . ($jum[1][3] . "/" . $jumK3) . "*" . ($jum[2][3] . "/" . $jumK3) . "*" . ($jum[3][3] . "/" . $jumK3) . "*" . ($jum[4][3] . "/" . $jumK3) . "*" . ($jum[5][3] . "/" . $jumK3) . "*" . ($jum[6][3] . "/" . $jumK3) . "*" . ($jum[7][3] . "/" . $jumK3) . "*" . ($jum[8][3] . "/" . $jumK3) . "*" . ($jum[9][3] . "/" . $jumK3) . "*" . ($jum[10][3] . "/" . $jumK3) . "*" . ($jum[11][3] . "/" . $jumK3) . "*" . ($jum[12][3] . "/" . $jumK3) . "*" . ($jum[13][3] . "/" . $jumK3) . "*" . ($jum[14][3] . "/" . $jumK3) . "*" . ($jum[15][3] . "/" . $jumK3) . "*" . ($jum[16][3] . "/" . $jumK3) . "*" . ($jum[17][3] . "/" . $jumK3) . "*" . ($jum[18][3] . "/" . $jumK3) . "*" . ($jum[19][3] . "/" . $jumK3) . "*" . ($jum[20][3] . "/" . $jumK3) . "*" . ($jum[21][3] . "/" . $jumK3) . "*" . ($jum[22][3] . "/" . $jumK3) . "*" . ($jum[23][3] . "/" . $jumK3) . "*" . ($jum[24][3] . "/" . $jumK3) . "*" . ($jum[25][3] . "/" . $jumK3);

  $H4 = ($jumK4 . "/" . $totK) . "*" . ($jum[1][4] . "/" . $jumK4) . "*" . ($jum[2][4] . "/" . $jumK4) . "*" . ($jum[3][4] . "/" . $jumK4) . "*" . ($jum[4][4] . "/" . $jumK4) . "*" . ($jum[5][4] . "/" . $jumK4) . "*" . ($jum[6][4] . "/" . $jumK4) . "*" . ($jum[7][4] . "/" . $jumK4) . "*" . ($jum[8][4] . "/" . $jumK4) . "*" . ($jum[9][4] . "/" . $jumK4) . "*" . ($jum[10][4] . "/" . $jumK4) . "*" . ($jum[11][4] . "/" . $jumK4) . "*" . ($jum[12][4] . "/" . $jumK4) . "*" . ($jum[13][4] . "/" . $jumK4) . "*" . ($jum[14][4] . "/" . $jumK4) . "*" . ($jum[15][4] . "/" . $jumK4) . "*" . ($jum[16][4] . "/" . $jumK4) . "*" . ($jum[17][4] . "/" . $jumK4) . "*" . ($jum[18][4] . "/" . $jumK4) . "*" . ($jum[19][4] . "/" . $jumK4) . "*" . ($jum[20][4] . "/" . $jumK4) . "*" . ($jum[21][4] . "/" . $jumK4) . "*" . ($jum[22][4] . "/" . $jumK4) . "*" . ($jum[23][4] . "/" . $jumK4) . "*" . ($jum[24][4] . "/" . $jumK4) . "*" . ($jum[25][4] . "/" . $jumK4);

  $H5 = ($jumK5 . "/" . $totK) . "*" . ($jum[1][5] . "/" . $jumK5) . "*" . ($jum[2][5] . "/" . $jumK5) . "*" . ($jum[3][5] . "/" . $jumK5) . "*" . ($jum[4][5] . "/" . $jumK5) . "*" . ($jum[5][5] . "/" . $jumK5) . "*" . ($jum[6][5] . "/" . $jumK5) . "*" . ($jum[7][5] . "/" . $jumK5) . "*" . ($jum[8][5] . "/" . $jumK5) . "*" . ($jum[9][5] . "/" . $jumK5) . "*" . ($jum[10][5] . "/" . $jumK5) . "*" . ($jum[11][5] . "/" . $jumK5) . "*" . ($jum[12][5] . "/" . $jumK5) . "*" . ($jum[13][5] . "/" . $jumK5) . "*" . ($jum[14][5] . "/" . $jumK5) . "*" . ($jum[15][5] . "/" . $jumK5) . "*" . ($jum[16][5] . "/" . $jumK5) . "*" . ($jum[17][5] . "/" . $jumK5) . "*" . ($jum[18][5] . "/" . $jumK5) . "*" . ($jum[19][5] . "/" . $jumK5) . "*" . ($jum[20][5] . "/" . $jumK5) . "*" . ($jum[21][5] . "/" . $jumK5) . "*" . ($jum[22][5] . "/" . $jumK5) . "*" . ($jum[23][5] . "/" . $jumK5) . "*" . ($jum[24][5] . "/" . $jumK5) . "*" . ($jum[25][5] . "/" . $jumK5);

  $H6 = ($jumK6 . "/" . $totK) . "*" . ($jum[1][6] . "/" . $jumK6) . "*" . ($jum[2][6] . "/" . $jumK6) . "*" . ($jum[3][6] . "/" . $jumK6) . "*" . ($jum[4][6] . "/" . $jumK6) . "*" . ($jum[5][6] . "/" . $jumK6) . "*" . ($jum[6][6] . "/" . $jumK6) . "*" . ($jum[7][6] . "/" . $jumK6) . "*" . ($jum[8][6] . "/" . $jumK6) . "*" . ($jum[9][6] . "/" . $jumK6) . "*" . ($jum[10][6] . "/" . $jumK6) . "*" . ($jum[11][6] . "/" . $jumK6) . "*" . ($jum[12][6] . "/" . $jumK6) . "*" . ($jum[13][6] . "/" . $jumK6) . "*" . ($jum[14][6] . "/" . $jumK6) . "*" . ($jum[15][6] . "/" . $jumK6) . "*" . ($jum[16][6] . "/" . $jumK6) . "*" . ($jum[17][6] . "/" . $jumK6) . "*" . ($jum[18][6] . "/" . $jumK6) . "*" . ($jum[19][6] . "/" . $jumK6) . "*" . ($jum[20][6] . "/" . $jumK6) . "*" . ($jum[21][6] . "/" . $jumK6) . "*" . ($jum[22][6] . "/" . $jumK6) . "*" . ($jum[23][6] . "/" . $jumK6) . "*" . ($jum[24][6] . "/" . $jumK6) . "*" . ($jum[25][6] . "/" . $jumK6);

  //kondisi untuk memilih penyakit dengan nilai mendekati angka 1        

  if ($P1 >= $P2 && $P1 >= $P3 && $P1 >= $P4 && $P1 >= $P5 && $P1 >= $P6) {
    $max        = $P1;
    $kode_penyakit = $penyakit[0]['kode_penyakit'];
    $out        = $penyakit[0]['nama_penyakit'];
    $penyebab   = $penyakit[0]['penyebab'];
    $solusi     = $penyakit[0]['solusi'];
    $saran      = $penyakit[0]['saran'];
  } else if ($P2 >= $P1 && $P2 >= $P3 && $P2 >= $P4 && $P2 >= $P5 && $P2 >= $P6) {
    $max        = $P2;
    $kode_penyakit = $penyakit[1]['kode_penyakit'];
    $out        = $penyakit[1]['nama_penyakit'];
    $penyebab   = $penyakit[1]['penyebab'];
    $solusi     = $penyakit[1]['solusi'];
    $saran      = $penyakit[1]['saran'];
  } else if ($P3 >= $P1 && $P3 >= $P2 && $P3 >= $P4 && $P3 >= $P5 && $P3 >= $P6) {
    $max        = $P3;
    $kode_penyakit = $penyakit[2]['kode_penyakit'];
    $out        = $penyakit[2]['nama_penyakit'];
    $penyebab   = $penyakit[2]['penyebab'];
    $solusi     = $penyakit[2]['solusi'];
    $saran      = $penyakit[2]['saran'];
  } else if ($P4 >= $P1 && $P4 >= $P2 && $P4 >= $P3 && $P4 >= $P5 && $P4 >= $P6) {
    $max        = $P4;
    $kode_penyakit = $penyakit[3]['kode_penyakit'];
    $out        = $penyakit[3]['nama_penyakit'];
    $penyebab   = $penyakit[3]['penyebab'];
    $solusi     = $penyakit[3]['solusi'];
    $saran      = $penyakit[3]['saran'];
  } else if ($P5 >= $P1 && $P5 >= $P2 && $P5 >= $P3 && $P5 >= $P4 && $P5 >= $P6) {
    $max        = $P5;
    $kode_penyakit = $penyakit[4]['kode_penyakit'];
    $out        = $penyakit[4]['nama_penyakit'];
    $penyebab   = $penyakit[4]['penyebab'];
    $solusi     = $penyakit[4]['solusi'];
    $saran      = $penyakit[4]['saran'];
  } else if ($P6 >= $P1 && $P6 >= $P2 && $P6 >= $P3 && $P6 >= $P4 && $P6 >= $P5) {
    $max        = $P6;
    $kode_penyakit = $penyakit[5]['kode_penyakit'];
    $out        = $penyakit[5]['nama_penyakit'];
    $penyebab   = $penyakit[5]['penyebab'];
    $solusi     = $penyakit[5]['solusi'];
    $saran      = $penyakit[5]['saran'];
  }
  ?>

  <div class="row justify-content-md-center mt-4">
    <div class="col-md-9">
      <div class="card content">
        <div class="card-header">
          <h4>Hasil Diagnosa</h4>
        </div>
        <div class="card-body">
          <!-- kondisi untuk mengecek apakah gejala yang dipilih terdapat kata Tidak -->
          <?php if ($gejala[1] == "Tidak" && $gejala[2] == "Tidak" && $gejala[3] == "Tidak" && $gejala[4] == "Tidak" && $gejala[5] == "Tidak" && $gejala[6] == "Tidak" && $gejala[7] == "Tidak" && $gejala[8] == "Tidak" && $gejala[9] == "Tidak" && $gejala[10] == "Tidak" && $gejala[11] == "Tidak" && $gejala[12] == "Tidak" && $gejala[13] == "Tidak" && $gejala[14] == "Tidak" && $gejala[15] == "Tidak" && $gejala[16] == "Tidak" && $gejala[17] == "Tidak" && $gejala[18] == "Tidak" && $gejala[19] == "Tidak" && $gejala[20] == "Tidak" && $gejala[21] == "Tidak" && $gejala[22] == "Tidak" && $gejala[23] == "Tidak" && $gejala[24] == "Tidak" && $gejala[25] == "Tidak") { ?>

            <!-- Jika tidak ada -->
            <p>Selamat <b>Gigi Anda Sehat</b></p>

            <!-- Jika Ya Semua -->
          <?php } elseif ($gejala[1] == "Ya" && $gejala[2] == "Ya" && $gejala[3] == "Ya" && $gejala[4] == "Ya" && $gejala[5] == "Ya" && $gejala[6] == "Ya" && $gejala[7] == "Ya" && $gejala[8] == "Ya" && $gejala[9] == "Ya" && $gejala[10] == "Ya" && $gejala[11] == "Ya" && $gejala[12] == "Ya" && $gejala[13] == "Ya" && $gejala[14] == "Ya" && $gejala[15] == "Ya" && $gejala[16] == "Ya" && $gejala[17] == "Ya" && $gejala[18] == "Ya" && $gejala[19] == "Ya" && $gejala[20] == "Ya" && $gejala[21] == "Ya" && $gejala[22] == "Ya" && $gejala[23] == "Ya" && $gejala[24] == "Ya" && $gejala[25] == "Ya") { ?>

            <p>Penyakit Tidak Terdeteksi <b>Pilih Gejala Yang Benar</b></p>

          <?php } else { ?>

            <!-- Jika ada maka tampilkan hasil diagnosanya-->
            <p>Gigi Anda Terdiagnosa Penyakit: <b><?= $out; ?></b></p>
            <p>Probabilitas: <b><?= $max; ?></b></p>

            <p>List Nilai Probabilitas:<br>
              <?php

                $total1 = $P1 / ($P1 + $P2 + $P3 + $P4 + $P5 + $P6) * 100;
                $total2 = $P2 / ($P1 + $P2 + $P3 + $P4 + $P5 + $P6) * 100;
                $total3 = $P3 / ($P1 + $P2 + $P3 + $P4 + $P5 + $P6) * 100;
                $total4 = $P4 / ($P1 + $P2 + $P3 + $P4 + $P5 + $P6) * 100;
                $total5 = $P5 / ($P1 + $P2 + $P3 + $P4 + $P5 + $P6) * 100;
                $total6 = $P6 / ($P1 + $P2 + $P3 + $P4 + $P5 + $P6) * 100;

                saveResult($kode_penyakit);


                echo "Pulpa: " . substr(round($total1, 2), 0, 5) . "%<br>";
                echo "Gingivitis: " . substr(round($total2, 2), 0, 5) . "%<br>";
                echo "Abses Gigi: " . substr(round($total3, 2), 0, 5) . "%<br>";
                echo "Karies: " . substr(round($total4, 2), 0, 5) . "%<br>";
                echo "Periodontitis: " . substr(round($total5, 2), 0, 5) . "%<br>";
                echo "Perikoronitis: " . substr(round($total6, 2), 0, 5) . "%<br>";
                ?>
            </p>


            <b>PENYEBAB:</b>
            <p><?= $penyebab; ?></p>

            <br>

            <b>SOLUSI :</b>
            <p><?= $solusi; ?></p>

            <br>

            <b>SARAN :</b>
            <p><?= $saran; ?></p>



          <?php } ?>

          <a href="<?= base_url() ?>" class="btn btn-primary mt-4">Kembali</a>
          <a href="<?= base_url('hasil/cetak/') . $kode_penyakit; ?>" class="btn btn-primary mt-4 " target="_blank">Print</a>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End Card -->