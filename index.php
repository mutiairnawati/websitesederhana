<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>HMIF</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body id="home" class="scrollspy">
    <!-- navbar -->
    <div class="navbar-fixed">
            <nav class="light-green accent-4">
                <div class="container">
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <div class="nav-wrapper">
                            <a href="#home" class="brand-logo">HMIF</a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="#about">About</a></li>
                                <li><a href="#partner">Partner</a></li>
                                <li><a href="#kegiatan">Kegiatan</a></li>
                                <li><a href="#galeri">Galeri</a></li>
                                <li><a href="#kontak">Kontak</a></li>
                            </ul>
                        </div>
                </div>
            </nav>
          </div>
    <!-- mavbar-end -->

    <!-- SideNav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">About</a></li>
        <li><a href="#partner">Partner</a></li>
        <li><a href="#pelayanan">Kegiatan</a></li>
        <li><a href="#galeri">Galery</a></li>
        <li><a href="#kontak">Contact</a></li>
    </ul>
    <!-- SideNav-end -->

    <!-- Slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/slider/1.jpg">
                <div class="caption center-align">
                <h3 class="z-depth-5">BrotherHood</h3>
                <h5 class="light grey-text text-lighten-3">Teknik Informatika</h5>
                </div>
            </li>
            <li>
                    <img src="img/slider/2.JPG">
                    <div class="caption center-align">
                    <h3 class="z-depth-5">HMIF</h3>
                    <h5 class="light grey-text text-lighten-3">Himpunan Mahasiswa Teknik Informatika</h5>
                    </div>
            </li>
            <li>
                    <img src="img/slider/3.JPG">
                    <div class="caption center-align">
                    <h3 class="z-depth-5">LDK TI</h3>
                    <h5 class="light grey-text text-lighten-3">Masa Pengkaderan Himpunan</h5>
                    </div>
            </li>    
        </ul>
      </div>
    <!-- Slider-end -->

    <!-- About -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center grey-text light text-darken-3">About HMIF</h3>
                <div class="col m6 light">
                    <h6>Himpunan Mahasiswa Teknik Informatika</h6>
                    <p>
                        Menjadi wadah terbentuknya karakter yang visioner, berintegritas tinggi, dan menjadi organisasi yang dikenal luas dengan mutu dan pengembangan karakter serta karya-karyanya di bidang Computer Science.
                        Memperkuat ikatan antar sesama anggota keluarga HIMTI dengan pengetahuan, pengalaman, dan nilai-nilai baik dalam membentuk satu keluarga HMIF yang solid. BrotherHood!!
                        </p>
                </div>  
                <div class="col m6 light">
                    <h6>Proker</h6>
                    <p>Kepemimpinan</p>
                    <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                    </div>
                    <p>Pengembangan SDM</p>
                    <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                    </div>
                    <p>Keorganisasian</p>
                    <div class="progress">
                            <div class="determinate" style="width: 92%"></div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- About-end -->

    <!-- Partner -->
    <div id="partner" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/header.jpg"></div>
        <div class="container clients">
            <h3 class="center light white-text">Partner</h3>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="img/partner/permikomnas.png">
                </div>
                <div class="col m4 s12 center">
                        <img src="img/partner/codepolitan.png">
                </div>
                <div class="col m4 s12 center">
                        <img src="img/partner/vfmmn0twb17nn2epblee.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Partner-end -->

    <!-- Kegiatan -->
    <section id="kegiatan" class="services grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Kegiatan</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">developer_mode</i>
                        <h5>Ngoding</h5>
                        <p>Agenda himpunan mahasiswa teknik informatika dalam kegiatan ngoding yang dilakukan setiap hari sabtu yang dapat diikuti seluruh mahasiswa teknik informatika agar menambah pengetahuan mereka tentang bahasa pemrograman.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                        <div class="card-panel center">
                            <i class="material-icons medium">event</i>
                            <h5>Workshop</h5>
                            <p>Agenda himpunan mahasiswa teknik informatika dalam kegiatan workshop dengan menghadirkan beberapa orang yang berpengalaman dari berbagai instansi agar dapat berbagi mengenai hal yang mereka punya</p>
                        </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">school</i>
                        <h5>Seminar</h5>
                        <p>Agenda himpunan mahasiswa teknik informatika dalam kegiatan Seminar baik seminar nasional maupun lokal yang diadakan setiap tahun secara rutin agar dapat menambah pengetahuan yang didapatkan dari seminar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kegiatan-end -->

    <!-- Galeri -->
    <section class="portfolio  scrollspy" id="galeri">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Galeri</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/galeri/3.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/2.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/6.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/4.jpg" class="materialboxed responsive-img">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/galeri/a.JPG" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/b.JPG" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/c.JPG" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/d.JPG" class="materialboxed responsive-img">
                </div>
            </div>
        </div>
    </section>
    <!-- Galeri-end -->

    <!-- lontak -->
    <section id="kontak" class="kontak grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light grey-text text-darken-3 center">Kontak</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel light-green accent-4 center">
                        <i class="material-icons white-text">email</i>
                        <h5>Kontak</h5>
                        <p>Himpunan Mahasiswa Teknik Informatika Universitas Muhammadiyah Sukabumi</p> 
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h5>Alamat</h5></li>
                        <li class="collection-item">Sekretariat HMIF</li>
                        <li class="collection-item">Jl. R Syamsudin No. 50, Sukabumi</li>
                        <li class="collection-item">Jawa Barat, Indonesia</li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form action="" method="post">
                        <div class="card-panel">
                            <h5>Silahkan Isi</h5>
                            <div class="input-field">
                                <input name="nama" id="nama" type="text" class="validate" required>
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="input-field">
                                    <input name="email" id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                    <input name="nohp" id="hp" type="text" class="validate">
                                    <label for="hp">No Hp</label>
                            </div>
                            <div class="input-field">
                                <textarea name="pesan" id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Pesan</label>
                            </div>
                            <button type="submit" name="kirim" class="btn light-green accent-4">Kirim</button>
                            <button type="reset" class="btn red accent-4">Reset</button>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['kirim'])){
                            $insert = mysqli_query($conn, "INSERT INTO pesankontak VALUES(NULL,'".$_POST['nama']."',
                            '".$_POST['email']."','".$_POST['nohp']."','".$_POST['pesan']."',NULL)");
                            if($insert){
                                echo 'Data Berhasil';
                            } else {
                                echo 'Gagal';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- kontak-end -->

    <!-- footer -->
    <footer class="light-green accent-4 center">
        <p>HMIF. 2018</p>
    </footer>
    <!-- footer-end -->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators:false,
            height: 500,
            transition:600,
            interval:3000
        });

        const parallaxkeren = document.querySelectorAll('.parallax');
        M.Parallax.init(parallaxkeren);

        const materialboxjalan = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxjalan);

        const scrolloto = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrolloto, {
            scrollOffset: 50
        });
    </script>
  </body>
</html>
