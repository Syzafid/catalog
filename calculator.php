<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">     
    <title>Document</title>
</head>
<body>
    <div class="container-xxl";>    
    <div class="row">

    </div>  
    <div class="row">
        <div class="col col-lg-2 ml-4">
        <div class="container-side-bar">
            <div class="d-inline-flex p-2">
                <img src="gambar/File.png"class="img-fluid rounded-circle" style="width: 35px; height: 35px; margin-right:10px;">
                <h4>TRPL 23</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-light" href="card.php"><img src="gambar/catalogue.png" alt=""> Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="calculator.php"><img src="gambar/calculator.png" alt=""> Calculator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="logout.php"><img src="gambar/Logout.png" alt="">Logout</a>
                </li>
            </ul>
        </div>
        </div>
        <div class="col col-lg-9 justify-content-center ml-5 ">
            <div class="container-isi">
                <div class="container mt-5 mb-10">
                <div class="row">
                    <div class="container-fluid">   
                        <div class="container-calculator">
                            <h2>Kalkulator Ulang Tahun</h2>
                            <p class="text-center">Masukkan nama dan tanggal lahir Anda</p>

                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tglLahir">Tanggal Lahir:</label>
                                    <input type="date" id="tglLahir" name="tglLahir" class="form-control" required>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Submit">
                            </form>
                        </div>
                            <?php
                            if (isset($_POST['nama'], $_POST['tglLahir'])) {
                                $nama = $_POST['nama'];
                                $tglLahir = $_POST['tglLahir'];

                                $pisahTanggalLahir = explode('-', $tglLahir);
                                $tanggalLahir = $pisahTanggalLahir[2];
                                $bulanLahir = $pisahTanggalLahir[1];
                                $tahunLahir = $pisahTanggalLahir[0];
                                $birthDate = new DateTime($tglLahir);
                                $tglSkrg = new DateTime();
                                $hariKelahiran = $birthDate->format('l');
                                $diff = $birthDate->diff($tglSkrg);
                                $tahun = $diff->y;
                                $bulan = $diff->m;
                                $hari = $diff->d;
                                $tahunSkrg = (int)$tglSkrg->format('Y');
                                $ulangTahunBerikut = DateTime::createFromFormat('Y-m-d', $tahunSkrg . '-' . $birthDate->format('m-d'));
                                if ($ulangTahunBerikut < $tglSkrg) {
                                    $ulangTahunBerikut->modify('+1 year');
                                }
                                $jarakTanggal = $tglSkrg->diff($ulangTahunBerikut);
                                $jarakTanggalUlangTahun = $jarakTanggal->days;

                                $sifat = "";

                                function getZodiac($tanggalLahir, $bulanLahir)
                                {
                                    if (($bulanLahir == 1 && $tanggalLahir >= 20) || ($bulanLahir == 2 && $tanggalLahir <= 18)) {
                                        return "Aquarius ♒";
                                    } elseif (($bulanLahir == 2 && $tanggalLahir >= 19) || ($bulanLahir == 3 && $tanggalLahir <= 20)) {
                                        return "Pisces ♓";
                                    } elseif (($bulanLahir == 3 && $tanggalLahir >= 21) || ($bulanLahir == 4 && $tanggalLahir <= 19)) {
                                        return "Aries ♈";
                                    } elseif (($bulanLahir == 4 && $tanggalLahir >= 20) || ($bulanLahir == 5 && $tanggalLahir <= 20)) {
                                        return "Taurus ♉";
                                    } elseif (($bulanLahir == 5 && $tanggalLahir >= 21) || ($bulanLahir == 6 && $tanggalLahir <= 20)) {
                                        return "Gemini ♊";
                                    } elseif (($bulanLahir == 6 && $tanggalLahir >= 21) || ($bulanLahir == 7 && $tanggalLahir <= 22)) {
                                        return "Cancer ♋";
                                    } elseif (($bulanLahir == 7 && $tanggalLahir >= 23) || ($bulanLahir == 8 && $tanggalLahir <= 22)) {
                                        return "Leo ♌";
                                    } elseif (($bulanLahir == 8 && $tanggalLahir >= 23) || ($bulanLahir == 9 && $tanggalLahir <= 22)) {
                                        return "Virgo ♍";
                                    } elseif (($bulanLahir == 9 && $tanggalLahir >= 23) || ($bulanLahir == 10 && $tanggalLahir <= 22)) {
                                        return "Libra ♎";
                                    } elseif (($bulanLahir == 10 && $tanggalLahir >= 23) || ($bulanLahir == 11 && $tanggalLahir <= 21)) {
                                        return "Scorpio ♏";
                                    } elseif (($bulanLahir == 11 && $tanggalLahir >= 22) || ($bulanLahir == 12 && $tanggalLahir <= 21)) {
                                        return "Sagittarius ♐";
                                    } elseif (($bulanLahir == 12 && $tanggalLahir >= 22) || ($bulanLahir == 1 && $tanggalLahir <= 19)) {
                                        return "Capricorn ♑";
                                    }
                                    return "Unknown";
                                }

                                function getShio($tahunLahir)
                                {
                                    $hewan = array(
                                        "Monyet 🐒",
                                        "Ayam 🐓",
                                        "Anjing 🐕",
                                        "Babi 🐖",
                                        "Tikus 🐀",
                                        "Kerbau 🐂",
                                        "Harimau 🐅",
                                        "Kelinci 🐇",
                                        "Naga 🐉",
                                        "Ular 🐍",
                                        "Kuda 🐎",
                                        "Kambing 🐐"
                                    );
                                    $index = ($tahunLahir) % 12;
                                    return $hewan[$index];
                                }

                                $zodiak = getZodiac($tanggalLahir, $bulanLahir);
                                $shio = getShio((int)$tahunLahir);

                                function getSifat ($zodiak){
                                    if($zodiak =="Aquarius ♒"){
                                        return "anda adalah seorang pemikir yang suka membantu orang, anda merasa nyaman dalam kelompok atau komunitas";
                                    }elseif($zodiak =="Pisces ♓"){
                                        return "anda adalah seorang yang sangat terhubung dengan musik dan berbagai jenis seni, anda  tergolonga romantis sejati.";
                                    }elseif($zodiak =="Aries ♈"){
                                        return "anda adalah seorang pemberani dan bersemangat, Kelemahannya anda sedikit tidak sabaran dan agresif";
                                    }elseif($zodiak =="Taurus ♉"){
                                        return "anda adalah seseorang yang bisa diandalkan dan setia, kelemahannya  keras kepala dan posesif.";
                                    }elseif($zodiak =="Gemini ♊"){
                                        return "anda adalah seorang denga kepribadian yang penyayang dan penuh rasa penasaran";
                                    }elseif($zodiak =="Cancer ♋"){
                                        return "anda adalah seorang yang sangat imajinatif, setia, dan simpatik";
                                    }elseif($zodiak =="Leo ♌"){
                                        return "anda adalah seorang yang kreatif dan berhati hangat";
                                    }elseif($zodiak =="Virgo ♍"){
                                        return "anda adalah seorang yang setia dan pekerja keras";
                                    }elseif($zodiak =="Libra ♎"){
                                        return "anda adalah seorang yang bersikap kooperatif dan berpikiran adil";
                                    }elseif($zodiak =="Scorpio ♏"){
                                        return "anda adalah seorang yang pemberani dan banyak akal";
                                    }elseif($zodiak =="Sagittarius ♐"){
                                        return "anda adalah seorang yang idealis dan memiliki selera humor yang tinggi";
                                    }elseif($zodiak =="Capricorn ♑"){
                                        return "anda adalah seorang yang bertanggung jawab, disiplin dan memiliki kendali diri";
                                    }else{
                                        return "jangan percaya zodiak ya, haram hukumnya ";
                                    }
                                }

                                $sifat = getSifat($zodiak);
                                $angkaKeburuntungan = rand(1,10);
                                $warna=array("pelangi","merah","jingga","kuning","hijau","biru","nila","ungu","hitam","putih","emas");

                                echo <<<HTML
                                <div class="result-container mt-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="custom-card-calculator text-center p-4">
                                                <span class="card-icon-calculator display-4">🤓</span>
                                                <h4 class="mt-3">Nama Kamu</h4>
                                                <p class="lead" style="font-size: 1.5rem; font-weight: bold; color: #333;">$nama</p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="custom-card-calculator text-center p-4">
                                                <span class="card-icon-calculator display-4">&#127881;</span>
                                                <h5 class="mt-3">Hari Lahir</h5>
                                                <p class="lead">$hariKelahiran</p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="custom-card-calculator text-center p-4">
                                                <span class="card-icon-calculator display-4">&#127878;</span>
                                                <h5 class="mt-3">Umur Kamu</h5>
                                                <p class="lead">$tahun Tahun $bulan Bulan $hari Hari</p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="custom-card-calculator text-center p-4">
                                                <span class="card-icon-calculator display-4" ><img src="gambar/zodiac.png" alt="" srcset="" style="width: 30px; height: 30px;"></a></span>
                                                <h5 class="mt-3">Zodiak Kamu</h5>
                                                <p class="lead">$zodiak</p>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="custom-card-calculator text-center p-4">
                                                <span class="card-icon-calculator display-4">&#127811;</span>
                                                <h5 class="mt-3">Shio Kamu</h5>
                                                <p class="lead">$shio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="article-section mt-5">
                                    <h3>Artikel Menarik Tentang Zodiak dan Shio</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <h5 class="card-title">Apa Itu Zodiak?</h5>
                                                    <p class="card-text">Zodiak adalah pembagian rasi bintang dalam astrologi yang mencerminkan karakteristik seseorang berdasarkan tanggal lahir...</p>
                                                    <a href="#" class="btn btn-primary">Baca lebih lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <h5 class="card-title">Apa Itu Shio?</h5>
                                                    <p class="card-text">Shio berasal dari astrologi Tionghoa yang didasarkan pada tahun kelahiran seseorang, yang mengaitkan kepribadian dengan hewan tertentu...</p>
                                                    <a href="#" class="btn btn-primary">Baca lebih lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="custom-card-calculator text-center p-4">
                                        <span class="card-icon-calculator display-4">&#128161;</span>
                                        <h5 class="mt-3">Fun Fact!</h5>
                                        <p class="lead">Sebagai seorang <strong>$zodiak</strong>, $sifat</p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="custom-card-calculator text-center p-4">
                                        <span class="card-icon-calculator display-4">&#127874;</span>
                                        <h5 class="mt-3">Hitung Mundur Ulang Tahun!</h5>
                                        <p class="lead">Hari ulang tahun kamu tinggal <strong>$jarakTanggalUlangTahun Hari lagi!</strong></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                        <div class="custom-card-calculator text-center p-4">
                                            <span class="card-icon-calculator display-4">&#127912;</span>
                                            <h5 class="mt-3">Angka Keberuntungan Kamu</h5>
                                            <p class="lead">Angka keberuntungan kamu untuk hari ini adalah <strong>$angkaKeburuntungan</strong>!</p>
                                        </div>
                                    </div>

                                    <div class="col-6 mt-4">
                                        <div class="custom-card-calculator text-center p-4">
                                            <span class="card-icon-calculator display-4">&#127752;</span>
                                            <h5 class="mt-3">Warna Keberuntungan Kamu</h5>
                                            <p class="lead">Warna keberuntungan kamu untuk bulan ini adalah <strong>$warna[$angkaKeburuntungan]</strong>!</p>
                                        </div>
                                </div>
                                    </div>
                                </div>
                                HTML;
                                        }
                                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="gambar/File.png" alt="footer_logo" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                        </a>
                        <p class="footer-info-text">
                           Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>Politeknik Wilmar Bisnis Indonesia</h3>
                                    <p>Laut Dendang, Jl. Warakauri</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>(+62) 1234567890</h3>
                                    <p>Give us a call</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="#">Faq</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Subscribe</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p>
                                Reference site about Lorem Ipsum, giving information on its origins, as well.</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span>Copyright © SyzafTech 2024, All Right Reserved</span>
                    </div>
                    <div class="copyright-menu col-lg-6">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <a href="#atas">
                    <i class="fa fa-angle-up"></i>
                </a>
            </button>
        </div>  
</footer>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>