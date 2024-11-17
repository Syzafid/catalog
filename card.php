<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
        class CardItem {
            public $nama;
            public $nim;
            public $tglLahir;
            public $kotaAsal;
            public $email;
            public $image;
            public $facebook;
            public $twitter;
            public $instagram;
            public $github;
            public $deskripsi;
            
            public function __construct($nama, $nim, $tglLahir, $kotaAsal, $email, $image, $facebook, $twitter, $instagram, $github, $deskripsi) {
                $this->nama = $nama;
                $this->nim = $nim;
                $this->tglLahir = $tglLahir;
                $this->kotaAsal = $kotaAsal;
                $this->email = $email;
                $this->image = $image;
                $this->facebook = $facebook;
                $this->twitter = $twitter;
                $this->instagram = $instagram;
                $this->github = $github;
                $this->deskripsi = $deskripsi;
            }
        
            public function displayCard() {
                $link = http_build_query([
                    "nama" => $this->nama,
                    "nim" => $this->nim,
                    "tglLahir" => $this->tglLahir,
                    "kotaAsal" => $this->kotaAsal,
                    "email" => $this->email,
                    "image" => $this->image,
                    "facebook" => $this->facebook,
                    "twitter" => $this->twitter,
                    "instagram" => $this->instagram,
                    "github" => $this->github,
                    "deskripsi" => $this->deskripsi
                ]);
            
                echo <<<HTML
                <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-3 justify-content-center align-items-center">
                    <a href="detail.php?$link" style="text-decoration: none; color: inherit;">
                        <div class='frontside'>
                            <div class='card rounded-4' style='width: 14rem; height: 18rem;' id='card'>
                                <div class='card-body text-center'>
                                    <div class='col-md-12'><img class='img-fluid' src='$this->image' alt='card image'></div>
                                    <div class='col-md-12' style='height: 50px; display: flex;justify-content: center; align-items: center;margin-top:25px;'>
                                        <h5 class='card-title'>$this->nama</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            HTML;
            }
        }            
        $mahasiswaTrpl23 = [
            ["nama" => "Abraham Alex Tanuse Putra Sinaga", "nim" => "2305010024", "tglLahir" => "27 April 2005", "kotaAsal" => "Medan", "email" => "2305010024@wbi.ac.id", "image" => "gambar/Abram.jpg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/Abrhm_Sin17", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Ahmad Basral", "nim" => "2305010030", "tglLahir" => "23 Januari 2003", "kotaAsal" => "Mandailing Natal", "email" => "2305010030@wbi.ac.id", "image" => "gambar/Ahmad.jpg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Alam Larosa", "nim" => "2305010028", "tglLahir" => "17 Februari 2005", "kotaAsal" => "Gunungsitoli", "email" => "2305010028@wbi.ac.id", "image" => "gambar/Alam.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/forza.all", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Alya Nabila Dalimunthe", "nim" => "2305010020", "tglLahir" => "08 Juli 2005", "kotaAsal" => "Batu Bara", "email" => "2305010020@wbi.ac.id", "image" => "gambar/Alya.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/alyaa_dalimunthe_97", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Andronikus Pardamean Sihotang", "nim" => "2305010034", "tglLahir" => "19 Agustus 2004", "kotaAsal" => "Medan", "email" => "2305010034@wbi.ac.id", "image" => "gambar/Andro.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/androbiggens", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Ardya Pratama Putra", "nim" => "2305010038", "tglLahir" => "12 Januari 2005", "kotaAsal" => "Medan", "email" => "2305010038@wbi.ac.id", "image" => "gambar/Ardya.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Elsaday Simanjuntak", "nim" => "2305010032", "tglLahir" => "17 Maret 2004", "kotaAsal" => "Batu Bara", "email" => "2305010032@wbi.ac.id", "image" => "gambar/Elsa.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/elsadaysimanjuntak", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Firmas Habibi", "nim" => "2305010036", "tglLahir" => " 29 Agustus 2005", "kotaAsal" => "Batu Bara", "email" => "2305010036@wbi.ac.id", "image" => "gambar/Firmas.jpg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/frmshbi", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Jourdan Hutagalung", "nim" => "2305010002", "tglLahir" => "10 November 2005", "kotaAsal" => "Medan", "email" => "2305010002@wbi.ac.id", "image" => "gambar/Jourdan.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Luther Fahomouni Gea", "nim" => "2305010027", "tglLahir" => "07 Desember 2004", "kotaAsal" => "Nias", "email" => "2305010027@wbi.ac.id", "image" => "gambar/Luther.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Maulana Syahputra", "nim" => "2305010014", "tglLahir" => "02 September 2005", "kotaAsal" => "Batu Bara", "email" => "2305010014@wbi.ac.id", "image" => "gambar/Maulana.jpg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "M. Ihsan Rafli", "nim" => "2305010008", "tglLahir" => "11 Desember 2005", "kotaAsal" => "Medan", "email" => "2305010008@wbi.ac.id", "image" => "gambar/Ihsan.jpg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "Penemu TRPL"],
            ["nama" => "Nabila Azari Lubis", "nim" => "2305010016", "tglLahir" => "20 September 2005", "kotaAsal" => "Tebing Tinggi", "email" => "2305010016@wbi.ac.id", "image" => "gambar/Nabila.jpg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/abil.azlbs", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Rajif Fandi", "nim" => "2305010041", "tglLahir" => "10 May 2003", "kotaAsal" => "Aceh", "email" => "2305010041@wbi.ac.id", "image" => "gambar/Rajif.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/rjf.fandi", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Ravenza Raditya Fajar", "nim" => "2305010022", "tglLahir" => "07 Februari 2005", "kotaAsal" => "Medan", "email" => "2305010022@wbi.ac.id", "image" => "gambar/Ravenza.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Rizky Abdillah", "nim" => "2305010010", "tglLahir" => "13 Oktober 2005", "kotaAsal" => "Tebing Tinggi", "email" => "2305010010@wbi.ac.id", "image" => "gambar/Rizky.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/mas.kyy__", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Shopia Salma Siregar", "nim" => "2305010004", "tglLahir" => "10 Desember 2005", "kotaAsal" => "Padang Sidempuan", "email" => "2305010004@wbi.ac.id", "image" => "gambar/Shopia.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/piax_kth", "github" => "https://github.com", "deskripsi" => "unknown"],
            ["nama" => "Syafrizal Amri Fajar", "nim" => "2305010012", "tglLahir" => "05 April 2005", "kotaAsal" => "Batu Bara", "email" => "2305010012@wbi.ac.id", "image" => "gambar/Syafrizal.jpeg", "facebook" => "https://facebook.com/home", "twitter" => "https://twitter.com/home", "instagram" => "https://instagram.com/home", "github" => "https://github.com", "deskripsi" => "unknown"]
        ];
        
        
    
        $cards = [];
        foreach ($mahasiswaTrpl23 as $trpl23) {
            $cards[] = new CardItem($trpl23["nama"], $trpl23["nim"], $trpl23["tglLahir"],$trpl23["kotaAsal"],$trpl23["email"], $trpl23["image"], $trpl23["facebook"], $trpl23["twitter"], $trpl23["instagram"], $trpl23["github"], $trpl23["deskripsi"]);
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
            <nav class="navbar navbar-expand-xxxl navbar-dark">
              </nav>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="gambar/first.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="gambar/second.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="gambar/third.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="container mt-5 mb-10">
                <div class="row">
                    <?php
                        foreach ($cards as $card) {
                            $card->displayCard();
                        }
                    ?>

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