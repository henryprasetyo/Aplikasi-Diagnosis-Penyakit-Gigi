<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <!--     Fonts Awesome     -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee|Monda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>css/style-custom.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo1.png'); ?>" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="<?= base_url('') ?>">Dental Smile<img src="<?= base_url('assets/img/logo2.png'); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto ">
                    <!--<li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('auth') ?>">Login Admin <span class="sr-only">(current)</span></a>
                    </li>-->
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#about">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#penyakit">Info Gigi <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#sumberpakar">Sumber <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>