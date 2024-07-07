@php
$site_name = get_setting_value('_site_name');
$jumbotron = get_section_data('JUMBOTRON');
$site_description = get_setting_value('_site_description');
$about = get_section_data('ABOUT');
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $site_name }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">{{ $site_name }}</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Halal Life Style</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Kisah Inspiratif</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{ Storage::url($jumbotron->thumbnail) }}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">{{ $jumbotron->title }}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">{!! strip_tags($jumbotron->content) !!}</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Halal Life Style</Style></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <style>
                    .portfolio-button {
                        background-color: #000; /* Warna latar belakang button */
                        border: none; /* Hilangkan border */
                        padding: 0; /* Hilangkan padding agar ikon berada di tengah */
                        cursor: pointer; /* Tambahkan cursor pointer */
                    }

                    .portfolio-button:focus {
                        outline: none; /* Hilangkan outline saat button difokuskan */
                    }

                    .portfolio-item-caption {
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang caption */
                        opacity: 1; /* Atur opasitas menjadi 1 agar caption tetap terlihat */
                    }

                    .portfolio-item-caption-content {
                        font-size: 3rem;
                    }

                    .portfolio-item-caption-content i {
                        color: white;
                    }
                </style>

                <div class="row justify-content-center">
                    <style>
                        .portfolio-button {
                            background-color: #000; /* Warna latar belakang button */
                            border: none; /* Hilangkan border */
                            padding: 0; /* Hilangkan padding agar ikon berada di tengah */
                            cursor: pointer; /* Tambahkan cursor pointer */
                            transition: background-color 0.3s ease; /* Efek transisi untuk perubahan warna latar belakang */
                        }

                        .portfolio-button:focus {
                            outline: none; /* Hilangkan outline saat button difokuskan */
                        }

                        .portfolio-item {
                            position: relative; /* Tambahkan posisi relative untuk item portofolio */
                            overflow: hidden; /* Hilangkan overflow agar caption tidak terlihat di luar */
                        }

                        .portfolio-item-caption {
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang caption */
                            opacity: 0; /* Atur opasitas menjadi 0 agar caption tidak terlihat saat tidak di-hover */
                            transition: opacity 0.3s ease; /* Efek transisi untuk opasitas */
                        }

                        .portfolio-item:hover .portfolio-item-caption {
                            opacity: 1; /* Tampilkan caption saat di-hover */
                        }

                        .portfolio-item-caption-content {
                            font-size: 3rem;
                        }

                        .portfolio-item-caption-content i {
                            color: white;
                        }
                    </style>

                    <div class="row justify-content-center">
                        <!-- Portfolio Item 1-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto">
                                <button class="portfolio-button" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center"><i class="fas fa-plus"></i></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Portfolio Item 2-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto">
                                <button class="portfolio-button" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center"><i class="fas fa-plus"></i></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Portfolio Item 3-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto">
                                <button class="portfolio-button" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center"><i class="fas fa-plus"></i></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Portfolio Item 4-->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="portfolio-item mx-auto">
                                <button class="portfolio-button" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center"><i class="fas fa-plus"></i></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Portfolio Item 5-->
                        <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                            <div class="portfolio-item mx-auto">
                                <button class="portfolio-button" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center"><i class="fas fa-plus"></i></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">{{ $about->title }}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-3 ms-auto text-center"><img src="{{ Storage::url($about->thumbnail) }}" class="w-75" alt="About Image" /></div>
                    <div class="col-lg-5 me-auto lead">
                        {!! $about->content !!}
                    </div>
                </div>
                <!-- About Section Button-->
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kisah Inspiratif</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- 10 Link inputs -->
<!-- List of 10 manual links -->
<ul>
    <li><a href="https://www.motivasi-islami.com/hikmah-kisah-inspiratif/" target="_blank">Motivasi Islami</a></li>
    <li><a href="https://www.genmuslim.id/khazanah/633774157/kisah-inspiratif-sahabat-nabi-saw-thalhah-bin-ubaidillah-yang-dijamin-masuk-surga-ini-cerita-hidupnya?page=2" target="_blank">Kisah Inspiratif Sahabat Nabi SAW</a></li>
    <li><a href="https://muslim.okezone.com/read/2019/05/10/614/2053966/kisah-kisah-hijrah-artis-indonesia-dewi-sandra-hingga-ayudia-bing-slamet" target="_blank">Kisah-Kisah Hijrah Artis Indonesia</a></li>
    <li><a href="https://www.bbc.com/indonesia/majalah-56005921" target="_blank">Khadijah, perempuan 'luar biasa yang inspiratif' dan 'pengubah sejarah dunia' yang berperan penting dalam kelahiran agama Islam</a></li>
    <li><a href="https://www.idxchannel.com/syariah/3-kisah-inspiratif-islami-yang-bisa-diambil-hikmahnya" target="_blank">3 Kisah Inspiratif Islami yang Bisa Diambil Hikmahnya</a></li>
    <li><a href="https://www.genmuslim.id/khazanah/632656938/kisah-inspiratif-jangan-ragu-berbuat-kebaikan-setiap-amal-balasannya-10-kali-lipat-loh-muslim-wajib-tau" target="_blank">Jangan Ragu Berbuat Kebaikan</a></li>
    <li><a href="https://www.motivasi-islami.com/akal-manusia/" target="_blank">Kisah Inspiratif Tentang Kelebihan Akal Manusia</a></li>
    <li><a href="https://kumparan.com/ragam-info/mengenal-kisah-inspiratif-islami-yang-menyentuh-hati-22ceCWp6Eiw" target="_blank">Mengenal Kisah Inspiratif Islami yang Menyentuh Hati</a></li>
    <li><a href="https://pondokislami.com/kisah-inspiratif-penghafal-al-quran.html" target="_blank">Nenek Tua Penghafal Al Quran Di Usia 82 Tahun</a></li>
    <li><a href="https://perpusteknik.com/kisah-sahabat-nabi-menuntut-ilmu/" target="_blank">Kisah Sahabat Nabi Menuntut Ilmu: Inspirasi dalam Mempelajari Pengetahuan</a></li>
</ul>


                            <!-- Submit success message-->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <h4 class="text-uppercase mb-4 text-center">About Site</h4>
                        <p class="lead mb-0 text-center">
                            {!! strip_tags($site_description) !!}
                        </p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; {{$site_name}} 2024</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
       <!-- Portfolio Modal 1: Makanan Halal -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Makanan Halal</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/halal_food.png" alt="Makanan Halal" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Makanan halal adalah makanan yang diperbolehkan dalam Islam. Contohnya termasuk daging ayam, sapi, sayuran, dan buah-buahan. Pastikan makanan yang dikonsumsi memiliki sertifikasi halal.</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2: Keuangan Syariah -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Keuangan Syariah</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/islamic_finance.png" alt="Keuangan Syariah" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Keuangan syariah melibatkan praktik perbankan dan investasi yang sesuai dengan prinsip-prinsip Islam. Ini termasuk larangan riba (bunga), gharar (ketidakpastian), dan investasi dalam industri yang haram.</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3: Pakaian Halal -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Pakaian Halal</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/halal_clothing.png" alt="Pakaian Halal" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Pakaian halal adalah pakaian yang memenuhi standar kesopanan dan kepatutan dalam Islam. Ini termasuk pakaian yang menutup aurat dan tidak terlalu ketat.</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4: Perawatan Kesehatan Halal -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Perawatan Kesehatan Halal</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/halal_healthcare.png" alt="Perawatan Kesehatan Halal" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Produk dan layanan kesehatan halal meliputi obat-obatan dan perawatan medis yang bebas dari bahan haram dan diproses sesuai dengan prinsip Islam.</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5: Hiburan Halal -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Hiburan Halal</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/halal_entertainment.png" alt="Hiburan Halal" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Hiburan halal mencakup film, musik, dan acara yang sesuai dengan prinsip Islam dan tidak melibatkan konten yang haram.</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

