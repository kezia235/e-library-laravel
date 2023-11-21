<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pasundan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset/img/favicon.png" rel="icon">
    <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="asset/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/">Pasundan<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="asset/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('arsip') }}" class="get-started-btn scrollto">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="get-started-btn scrollto">Log in</a>
                @endauth
            @endif

            {{-- <a href="/home" class="get-started-btn scrollto">Login</a> --}}
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>SMK Pasundan 1 Cianjur</h1>
                    {{-- <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, temporibus!</h2> --}}
                    <a href="{{ url('arsip') }}" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="team" class="team ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Teacher</h2>

                </div>

                <div class="row justify-content-center">
                    @foreach ($data->where('role', 'guru')->take(4) as $item)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('storage/profile/' . $item->photo) }}" class="img-fluid"
                                        alt="{{ $item->name }}'s Profile Photo">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->name }}</h4>
                                    <span>{{ $item->email }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <h2 align="center"><a href="">See More</a></h2>
                </div>

        </section><!-- End Frequently Asked Questions Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container d-md-flex py-4">


        </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="asset/vendor/aos/aos.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="asset/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="asset/js/main.js"></script>

</body>

</html>
