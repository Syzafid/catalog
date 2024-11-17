<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css"> 
    <title>Detail mahasiswa</title>
</head>
<body>
<div class="container-xxl">
            <nav class="navbar navbar-expand-xxxl navbar-dark">
                <div class="container-fluid">
                    <div class="row w-100">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <a class="navb  ar-brand" href="#" id="atas"><h4 class="text-light">TRPL 23</h4></a>

                            </div>
                            <div class="row" style="padding-top: -5px;">
                                <p class="fw-lighter text-light " style="font-size: 15px;">keep strong and stay healthy</p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-end">
                            <div class="row ">
                                <div class="col-6 text-start">
                                    <a href="card.php" class="link-offset-2 link-underline link-underline-opacity-0"><p style="right: 0; font-size: 10px;" class="text-light">Katalog</p></a>
                                </div>
                                <div class="col-6 text-start">
                                    <a href="https://" class="link-offset-2 link-underline link-underline-opacity-0"><p style="right: 0; font-size: 10px; margin-left: -30px;" class="text-light">Kalkulator</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-6 col-sm-6 col-6 text-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                        </div>
                    </div>
                  <div class="offcanvas offcanvas-end mt-3 me-2 rounded text-bg-dark " data-bs-backdrop="false" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="width: 300px; height: 500px;">
                    <div class="offcanvas-header">
                        <div class="row">
                            <div class="col-3">
                                <img src="gambar/File.png" alt="" id="syzaf" style="width: 45px; height: 50px; border-radius: 100%;">
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <p class="offcanvas-title" id="offcanvasDarkNavbarLabel">TRPL 23</p>
                                    <p class="fw-lighter">unknown@wbi.ac.id</p>
                                </div>
                            </div>

                        </div>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#"><h5>TRPL 23</h5></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#project">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services & Prices</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                </div>
              </nav>
            
            <div class="container mt-5">
    <div class="row justify-content-center" id="card-detail">
        <div class="col-md-4 col-lg-3 text-center">
            <div class="bento-card">
                <img src="<?= ($_GET["image"]) ?>" alt="Profile Image" class="img-fluid rounded-5" style="width: 250px; height: 250px; object-fit: cover;">
            </div>
        </div>

        <div class="col-md-4 col-lg-3 text-center">
            <div class="bento-card">
                <h4><?= ($_GET["nama"]) ?></h4>
                <p class="text-muted">NIM: <?= ($_GET["nim"]) ?></p>
                <p>Tanggal Lahir: <?= ($_GET["tglLahir"]) ?></p>
                <p>Kota Asal: <?= ($_GET["kotaAsal"]) ?></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 text-center">
            <div class="bento-card">
                <h5>Skills</h5>
                <span class="badge badge-primary">Programming</span>
                <span class="badge badge-secondary">Design</span>
                <span class="badge badge-success">Writing</span>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 text-center">
            <div class="bento-card">
                <h5>Hobby</h5>
                <div>
                    <i class="fa fa-book"></i> Reading
                    <i class="fa fa-camera"></i> Photography
                    <i class="fa fa-plane"></i> Travel
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3" id="card-detail">
    <div class="col-md-4 col-lg-3 text-center">
        <div class="bento-card">
            <h5>Contact</h5>
            <p>Email: <?= ($_GET["email"]) ?></p>
            <div class="social-icons">
                <a href="<?= ($_GET["facebook"]) ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="<?= ($_GET["twitter"]) ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="<?= ($_GET["instagram"]) ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?= ($_GET["github"]) ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>
    </div>
</div>


<a href="card.php">Kembali ke Daftar Mahasiswa</a>


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
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
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
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
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
                                            <i class="fa-solid fa-paper-plane"></i>
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
