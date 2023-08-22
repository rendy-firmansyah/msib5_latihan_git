<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas msib5 gits latihan1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .header-text{
            font-family: 'Lobster', 'sans-serif';
        }
        .header-text::before{
            content:"";
            position: absolute;
            height: 10px;
            width: 20px;
            border-left: 3px solid black;
            border-top: 3px solid black;
            left: 50px;
            top: 10px;
        }
        .header-text::after{
            content:"";
            position: absolute;
            height: 10px;
            width: 20px;
            border-right: 3px solid black;
            border-bottom: 3px solid black;
            left: 155px;
            top: 35px;
        }
        .icon-save{
            margin-left: 145px;
        }
        .text-like{
            font-size: 9px;
            font-weight: bold;
        }
        .card-text{
            font-size: 13px
        }
        .card-text span{
            font-weight:bold;
        }
        .mob-data{
            position: absolute;
            top: 0;
        }
        .sub-text-judul h1{
            font-family: 'Poppins', sans-serif;
        }
        .title-text h5{
            font-weight: 300;
            font-family: 'Poppins', sans-serif;
        }
        .img-profile-mini{
            height: 25px;
            width: 25px;
            border-radius: 50%;
        }
        .komentar p{
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
        $nama_lengkap = "Mohammad<br>Rendy Firmansyah";
        $domisili = "Banyuwangi";
        $instansi = "Universitas Jember";
        $prodi = "Fakultas Ilmu Komputer - Informatika";
        $tagline_brand = "This is My Bio";
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top border-bottom">
        <div class="container-fluid">
            <div class="navbar-brand ms-5 header-text" href="#"><?php echo $tagline_brand?></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="pos d-flex align-items-center me-3">
                        <i class="fa-brands fa-instagram" style="color: #0b60db;"></i>
                        <a class="nav-link active text-dark" aria-current="page" href="https://www.instagram.com/rendyfirmansah__/">Instagram</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="pos d-flex align-items-center">
                        <i class="fa-brands fa-whatsapp" style="color: #0b60db;"></i>
                        <a class="nav-link text-dark" href="https://wa.me/6285648408330">Whatsapp</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="sub-text-judul">
                    <h1><?php echo $nama_lengkap?></h1>
                    <div class="title-text d-flex">
                        <h5><?php echo $domisili ?></h5>
                        <h5 class="ms-auto"><?php echo $instansi ?></h5>
                    </div>
                    <h5 style='font-weight: 300;'><?php echo $prodi ?></h5>
                    <a href="https://www.instagram.com/rendyfirmansah__/"><button class='btn btn-primary btn-lg mt-3 rounded-pill shadow'>Cari tahu saya</button></a>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="card mt-3 shadow-lg" style="width: 18rem;">
                    <img src="profiler.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-title">
                            <!-- <i class="fa-solid fa-heart fa-beat fa-lg me-2"></i> -->
                            <i class="fa-solid fa-heart fa-beat fa-lg me-2" style="color: #ff0026;"></i>
                            <i class="fa-sharp fa-regular fa-comment fa-flip-horizontal fa-lg me-2"></i>
                            <i class="fa-regular fa-paper-plane fa-lg"></i>
                            <i class="fa-sharp fa-solid fa-bookmark fa-lg icon-save"></i>
                        </div>
                        <p class="text-like mb-1">50.596 suka</p>
                        <p class="card-text"><span>rendyfirmansah__</span> Your partner to scale impact with technology.</p>
                        <div class="komentar d-flex">
                            <img class="img-profile-mini" src="profiler.jpg" alt="">
                            <p class="ms-2">Tambahkan komentar...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>