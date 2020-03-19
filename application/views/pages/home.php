<div class="jumbotron jumbotron-fluid img-shadow home">
    <div class="container">
        <h1 class="display-3 mt">Selamat Datang Di Dental Smile</h1>
        <p class="lead">Website Sistem Pakar Penyakit Gigi Terbaik</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-default form mt-n1">
                <div class="card-body">
                    <center>
                        <h1>Masukkan Data Diri Untuk Mengetahui Jenis Penyakit</h1>
                    </center>
                    <?= form_open('home/nama'); ?>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label>E-Mail:</label>
                        <input type="email" class="form-control" name="email" placeholder="E-Mail yang aktif">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" name="add" class="btn btn-success">Selanjutnya</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<section class="about paddingTB60" id='about'>
    <div class="container">
        <center>
            <h1>Siapa Kita ? </h1>
        </center><br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="card1">
                    <div class="card-body">
                        <h1 class="strong">Visi Dan Misi</h1>
                        <p class="lead">Memenuhi kebutuhan pelayanan kesehatan gigi.Kepuasan pasien adalah prioritas utama dan tujuan kami<br>easy and quick </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card1">
                    <div class="card-body">
                        <p style="text-align:justify;">Sistem cerdas penyakit gigi merupakan sistem yang memberikan pelayanan mengetahui penyakit gigi apa yang anda alami.
                            Dengan sistem ini pasien tidak lagi harus langsung ke rumah sakit atau klinik lain untuk mengetahui penyakit apa yang dialami.
                            Sistem ini melingkupi perawatan basic/dasar kedokteran gigi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="informasi" id="penyakit">
    <div class="container">
        <center>
            <h1>Informasi Penyakit Gigi </h1>
        </center><br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card penyakit">
                    <img src="<?= base_url('assets/img/gingivitis.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;"><strong>Gingivitis</strong><br>Penyakit akibat infeksi bakteri yang menyebabkan gusi meradang hingga merah dan membengkak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card penyakit">
                    <img src="<?= base_url('assets/img/pulpa.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;"><strong>Pulpa</strong><br>Pembengkakan pada pulpa, yaitu bagian tengah gigi yang berisi jaringan dan sel pembentuk gigi. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card penyakit">
                    <img src="<?= base_url('assets/img/karies.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;"><strong>Karies</strong><br>Sebuah penyakit infeksi yang merusak struktur jaringan keras gigi. Penyakit ini ditandai dengan gigi berlubang.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card penyakit">
                    <img src="<?= base_url('assets/img/abses.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;"><strong>Abses Gigi</strong><br>Abses gigi adalah terbentuknya kantung atau benjolan berisi nanah pada gigi yang disebabkan oleh infeksi bakteri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card penyakit">
                    <img src="<?= base_url('assets/img/periodontitis.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;"><strong>Periodontitis</strong><br>Periodontitis adalah infeksi gusi yang merusak jaringan lunak dan tulang penyangga gigi. Kondisi ini perlu segera diobati karena dapat menyebabkan gigi tanggal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card penyakit">
                    <img src="<?= base_url('assets/img/Perikoronitis.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;"><strong>Perikoronitis</strong><br>Perikoronitis adalah peradangan yang menyerang jaringan gusi pada gigi geraham bungsu. Geraham bungsu merupakan geraham ketiga yang letaknya paling dalam dan terakhir tumbuh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="info" id="sumberpakar">
    <div class="container">
        <center>
            <h1>Sumber Informasi</h1>
        </center><br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="card1">
                    <div class="card-body">
                        <h1 class="strong">Sumber Informasi</h1>
                        <p class="lead">Semua data dan informasi yang ada di aplikasi ini diperoleh berdasarkan data yang di dapat dari buku yang berasal dari Kementrian Kesehatan Tahun 2012</p>
                        <div class="mx-auto text-center">
                            <a class="btn btn-outline-primary btn-sm" href="http://pdgi.or.id/wp-content/uploads/2015/04/Pelayanan-Dasar.pdf" role="button">Sumber 1</a>
                            <a class="btn btn-outline-primary btn-sm" href="http://ditjenpp.kemenkumham.go.id/arsip/bn/2016/bn151-2016.pdf" role="button">Sumber 2</a>
                            <a class="btn btn-outline-primary btn-sm" href="http://pdgi.or.id/wp-content/uploads/2015/04/UKGM.pdf" role="button">Sumber 3</a>
                            <a class="btn btn-outline-primary btn-sm" href="http://pdgi.or.id/wp-content/uploads/2015/04/UKGS.pdf" role="button">Sumber 4</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card1">
                    <div class="card-body">
                        <h1 class="strong">Sumber Pakar</h1>
                        <center style="font-size: 25px;"><br>
                            <i class="fas fa-user"></i>
                            Dr. Rani Martina<br><br>
                            <i class="fas fa-phone-alt"></i>
                            (021) 29402281
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>