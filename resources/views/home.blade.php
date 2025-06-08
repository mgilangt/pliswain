@extends('partials.master')
@section('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .btn-radio-group {
            display: flex;
            gap: 12px;
        }

        .btn-radio-group input[type="radio"] {
            display: none;
        }

        .btn-radio-group label {
            padding: 10px 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: white;
            color: #05bd93;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-radio-group label:hover {
            background-color: #f0f4ff;
            border-color: #00B295;
        }

        .btn-radio-group input[type="radio"]:checked+label {
            background-color: #05bd93;
            color: white;
            border-color: #05bd93;
        }
    </style>
@endsection

@section('content')
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index-2">
                <img src="{{ URL::asset('images/pliswain-logo.png') }}" class="logo-light" alt="logo-light" height="22">
                <img src="{{ URL::asset('images/pliswain-logo.png') }}" class="logo-dark" alt="logo-dark" height="22">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a href="#process" class="nav-link">Cara Pakai</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonial" class="nav-link">Testimonial</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#pricing" class="nav-link">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontak</a>
                    </li>
                </ul>
            </div>
            <!--end navabar-collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- Navbar End -->

    <!-- START HOME -->
    <section class="bg-home2" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h5 class="sub-title text-uppercase mb-3 text-white"><span class="text-primary">PlisWain</span></h5>
                        <h1 class="text-white mb-4">Platform No 1 Kirim <span class="text-primary">WhatsApp</span> Gratis
                        </h1>
                        {{-- <p class="text-white-50 fs-17">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p> --}}
                        <div class="mt-4 pt-2">
                            <a href="#" class="btn btn-primary">Cobain Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative">
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440"
                height="150" preserveAspectRatio="none" viewBox="0 0 1440 150">
                <g mask="url(&quot;#SvgjsMask1022&quot;)" fill="none">
                    <path d="M 0,58 C 144,73 432,131.8 720,133 C 1008,134.2 1296,77.8 1440,64L1440 250L0 250z"
                        fill="rgba(255, 255, 255, 1)"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1022">
                        <rect width="1440" height="250" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>
    </div>
    <!-- END HOME -->


    <!-- START FEATURE -->
    {{-- <div class="container">
            <div class="bg-feature">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box mt-3 mt-lg-0">
                            <div class="d-flex">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="uil uil-analytics"></i>
                                </div>
                                <div class="feature-content ms-3 flex-grow-1">
                                    <h6 class="fs-17 mb-1">Time Capsul Digital Anda</h6>
                                    <p class="text-muted mb-0">Tulis ide, catatan, atau motivasi sekarang. Kami kirimkan ke WhatsApp Anda nanti, tepat saat Anda membutuhkannya.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box mt-3 mt-lg-0">
                            <div class="d-flex">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="uil uil-crosshair"></i>
                                </div>
                                <div class="feature-content ms-3 flex-grow-1">
                                    <h6 class="fs-17 mb-1">Alarm yang Pasti Anda Lihat</h6>
                                    <p class="text-muted mb-0">Atur alarm untuk meeting, deadline, atau minum obat. Pengingat masuk ke WhatsApp, lebih efektif dari alarm biasa.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box mt-3 mt-lg-0">
                            <div class="d-flex">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="uil uil-search"></i>
                                </div>
                                <div class="feature-content ms-3 flex-grow-1">
                                    <h6 class="fs-17 mb-1">Kirim Perhatian, Tanpa Lupa</h6>
                                    <p class="text-muted mb-0">Jadwalkan ucapan ultah atau hari jadi. Buat orang terkasih merasa spesial dengan pesanmu yang datang tepat waktu.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end bg-feature-->
        </div> --}}
    <!--end container-->
    <!-- END FEATURE -->

    <!-- START SERVICE -->
    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">Buat Apa Sih Pake <span
                                class="text-primary">PLISWAIN</span>?</p>
                        <h3>Bukan Sekadar Kirim WA!</h3>
                        <div class="title-border mt-3"></div>
                        <p class="text-muted mt-3">Ada fitur-fitur yang mungkin belum pernah kamu bayangin sebelumnya.
                            Scroll ke bawah, cobain semua!</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center mt-4">
                        <img src="{{ URL::asset('images/feature/img-01.png') }}" alt="" class="img-fluid">
                        <h5 class="fs-18 mt-4">Time Capsul Digital Anda</h5>
                        <div class="lighlight-border mt-3"></div>
                        <p class="text-muted mt-3">Tulis ide, catatan, atau motivasi sekarang. Kami kirimkan ke WhatsApp
                            Anda nanti, tepat saat Anda membutuhkannya.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center mt-4 box-shadow">
                        <img src="{{ URL::asset('images/feature/img-02.png') }}" alt="" class="img-fluid">
                        <h5 class="fs-18 mt-4">Alarm yang Pasti Anda Lihat</h5>
                        <div class="lighlight-border mt-3"></div>
                        <p class="text-muted mt-3 mb-0">Atur alarm untuk meeting, deadline, atau minum obat. Pengingat
                            masuk ke WhatsApp, lebih efektif dari alarm biasa.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center mt-4">
                        <img src="{{ URL::asset('images/feature/img-03.png') }}" alt="" class="img-fluid">
                        <h5 class="fs-18 mt-4">Kirim Perhatian, Tanpa Lupa</h5>
                        <div class="lighlight-border mt-3"></div>
                        <p class="text-muted mt-3 mb-0">Jadwalkan ucapan ultah atau hari jadi. Buat orang terkasih merasa
                            spesial dengan pesanmu yang datang tepat waktu.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END SERVICE -->

    <!-- START PROCESS -->
    <section class="bg-light section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2"><span class="text-primary">PLISWAIN</span> Jalanin Semua
                            Secara Otomatis</p>
                        <h3>Gimana Sih Caranya?</h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3"><span class="text-primary">PLISWAIN</span> bikin semuanya
                            simpel, terstruktur, dan tepat
                            sasaran. Yuk intip alurnya!</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-5 pt-2">
                <div class="col-lg-3 col-md-6">
                    <div class="process-box process-border text-center">
                        <div class="process-count text-white mt-4">
                            <h3 class="process-number">01</h3>
                        </div>

                        <div class="process-content bg-white mt-5 rounded p-4">
                            <h5 class="fs-18">Tulis Pesanmu</h5>
                            <p class="text-muted mb-0">Punya ide, reminder, atau ucapan spesial? Tulis dulu pesannya
                                sekarang.</p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="process-box process-border text-center">
                        <div class="process-count text-white mt-4">
                            <h3 class="process-number">02</h3>
                        </div>

                        <div class="process-content bg-white mt-5 rounded p-4">
                            <h5 class="fs-18">Atur Waktu Kirim</h5>
                            <p class="text-muted mb-0">Mau dikirim besok, minggu depan, atau tahun depan? Kamu yang
                                tentuin!</p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="process-box process-border text-center">
                        <div class="process-count text-white mt-4">
                            <h3 class="process-number">03</h3>
                        </div>

                        <div class="process-content bg-white mt-5 rounded p-4">
                            <h5 class="fs-18">Kami Siapkan & Jaga</h5>
                            <p class="text-muted mb-0">Sistem <span class="text-primary">PLISWAIN</span> akan simpan
                                pesanmu aman, dan ingat waktu pengirimannya.
                            </p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="process-box text-center">
                        <div class="process-count text-white mt-4">
                            <h3 class="process-number">04</h3>
                        </div>

                        <div class="process-content bg-white mt-5 rounded p-4">
                            <h5 class="fs-18">Pesan Terkirim Otomatis!</h5>
                            <p class="text-muted mb-0">Tepat waktu. Langsung ke WhatsApp. Bikin kamu (atau orang lain)
                                tersenyum.</p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END PROCESS -->

    <!-- START PLISWAIN -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-4">
                        <p class="text-uppercase text-muted mb-2">JANGAN CUMA SCROLL!</p>
                        <h3 class="text-uppercase"><span class="text-primary">PLISWAIN</span> SEKARANG JUGA!!!</h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">Cobain sekarang... nanti juga balik lagi sendiri 😎</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-5 pt-2 justify-content-center">

                <div class="col-lg-9">
                    <div class="custom-form">
                        <form method="POST" action="{{ route('send.message') }}" name="form">
                            @csrf
                            <p id="error-msg"></p>
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Oops!</strong> Ada kesalahan pada input kamu:<br><br>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                            <!-- end row -->

                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Kamu</label>
                                        <input name="sender_name" id="sender_name" type="text" class="form-control"
                                            placeholder="Enter your name">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label for="sender" class="form-label">Nomor WhatsApp Kamu</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="https://flagcdn.com/w40/id.png" alt="ID" width="20"
                                                    class="me-1">
                                                +62
                                            </span>
                                            <input type="tel" class="form-control" name="sender_number" id="sender_number"
                                                placeholder="812345678" />
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Tujuan<span
                                                class="text-danger">*</span></label>
                                        <input name="recipient_name" id="recipient_name" type="text" class="form-control"
                                            placeholder="Enter your name">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label for="destiny" class="form-label">Nomor WhatsApp Tujuan<span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="https://flagcdn.com/w40/id.png" alt="ID" width="20"
                                                    class="me-1">
                                                +62
                                            </span>
                                            <input type="tel" class="form-control" name="recipient_number" id="recipient_number"
                                                placeholder="812345678" />
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <!-- Tempat Quill akan muncul -->
                                        <div id="editor"></div>

                                        <!-- Hidden input untuk simpan isi -->
                                        <input type="hidden" name="original_content" id="original_content">
                                    </div>
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->

                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Mau dikirim kapan?<span
                                                class="text-danger">*</span></label>
                                        <div class="btn-radio-group">
                                            <input type="radio" name="send_time_option" id="send_now" value="now">
                                            <label for="send_now">Sekarang</label>

                                            <input type="radio" name="send_time_option" id="send_later"
                                                value="later">
                                            <label for="send_later">Nanti aja</label>
                                        </div>

                                        <div id="datetime-container" class="mt-3" style="display: none;">
                                            <label for="scheduled_time" class="form-label">Pilih waktu pengiriman:</label>
                                            <input type="datetime-local" id="scheduled_time" name="scheduled_time"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- {!! RecaptchaV3::field('send_message') !!} --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-3 text-end">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-primary" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END PLISWAIN -->

    <!-- START TESTIMONIAL -->
    <section class="section" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">Testimonial</p>
                        <h3>Ini Kata Mereka loh yaaa, bukan kata <span class="text-primary">PLISWAIN</span></h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3"><span class="text-primary">PLISWAIN</span> bantu banyak orang kirim WhatsApp otomatis dengan mudah. Nih, katanya:</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-5 pt-2">
                <div class="col-lg-12">
                    <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"><img
                                    src="{{ URL::asset('images/users/img-5.jpg') }}" alt=""
                                    class="testi-img  img-fluid rounded mx-auto d-block"></button>
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="1"
                                aria-label="Slide 2"> <img src="{{ URL::asset('images/users/img-6.jpg') }}"
                                    alt="" class="testi-img img-fluid mx-auto d-block"></button>
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="2"
                                aria-label="Slide 3">
                                <img src="{{ URL::asset('images/users/img-7.jpg') }}" alt=""
                                    class=" testi-img img-fluid rounded mx-auto d-block">
                            </button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-box text-center mt-4">
                                    <div class="testimonial-content rounded">
                                        <p class="text-muted mb-0">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                    </div>
                                    <i class="mdi mdi-format-quote-close text-primary display-3"></i>
                                    <h5 class="fs-18">Jennifer Shapiro</h5>
                                    <p class="text-muted mb-0">Frontend</p>
                                </div>
                            </div><!--end carousal-item-->

                            <div class="carousel-item">
                                <div class="testimonial-box text-center mt-4">
                                    <div class="testimonial-content rounded">
                                        <p class="text-muted mb-0">" It looks perfect on all major browsers, tablets,
                                            and mobile devices. All files are organized we believe it will be easy to
                                            use and edit them. This template is well organized and very easy to
                                            customize. "</p>
                                    </div>
                                    <i class="mdi mdi-format-quote-close text-primary display-3"></i>
                                    <h5 class="fs-18">Brandon Carney</h5>
                                    <p class="text-muted mb-0">Designer</p>
                                </div>
                            </div><!--end carousal-item-->

                            <div class="carousel-item">
                                <div class="testimonial-box text-center mt-4">
                                    <div class="testimonial-content rounded">
                                        <p class="text-muted mb-0">" All your client websites if you are an agency or
                                            freelancer. It got all the tools needs to create super fast responsive
                                            websites with amazing user experience. We have added a Dark version with RTL
                                            supported. "</p>
                                    </div>
                                    <i class="mdi mdi-format-quote-close text-primary display-3"></i>
                                    <h5 class="fs-18">William Mooneyhan</h5>
                                    <p class="text-muted mb-0">Developer</p>
                                </div>
                            </div><!--end carousal-item-->
                        </div><!--end carousal-inner-->

                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END TESTIMONIAL -->

    <!-- START PRICING -->
    {{-- <section class="section bg-light" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center mb-4">
                            <p class="text-uppercase text-muted mb-2">Offers</p>
                            <h3>Choose Your Best Plan</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div><!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                            <p class="price-title mb-4 pb-3">Classic</p>
                            <h1 class="mb-0 price">$34.99</h1>
                            <div class="pricing-features mt-4 pt-4">
                                <p>Customizad Plans</p>
                                <p>Billing Report</p>
                                <p>Access to Asana</p>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="btn btn-primary w-100">Purchase Now</a>
                            </div>
                        </div><!--end pricing-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                            <div class="pricing-label">
                                <h5 class="text-white fs-16">Sale</h5>
                            </div>

                            <p class="price-title mb-4 pb-3">Popular</p>
                            <h1 class="mb-0 price">$49.99</h1>
                            <div class="pricing-features mt-4 pt-4">
                                <p>Customizad Plans</p>
                                <p>Billing Report</p>
                                <p>Access to Asana</p>
                                <p>Unlimited themes</p>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="btn btn-primary w-100">Purchase Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                            <p class="price-title mb-4 pb-3">Ultimate</p>
                            <h1 class="mb-0 price">$89.99</h1>
                            <div class="pricing-features mt-4 pt-4">
                                <p>Customizad Plans</p>
                                <p>Billing Report</p>
                                <p>Access to Asana</p>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="btn btn-primary w-100">Purchase Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section> --}}
    <!-- END PRICING -->

    <!-- START BLOG -->
    {{-- <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center mb-5">
                            <p class="text-uppercase text-muted mb-2">News</p>
                            <h3>Latest Articles And News</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-box box-shadow rounded mt-4 p-3">
                            <div class="blog-img">
                                <img src="{{ URL::asset('images/blog/img-1.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="read-more">
                                    <a href="#"><i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="primary-link">
                                    <h5 class="fs-19 mb-1">How to be appreciated for your hard work as a developer</h5>
                                </a>
                                <p class="text-muted mt-2">The final text is not yet available. Dummy texts have Internet
                                    tend been in use by typesetters since the 16th century.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ URL::asset('images/users/img-5.jpg')}}" alt="" height="45" class="rounded-circle me-2">
                                        <p class="text-muted mb-0">admin</p>
                                    </div>
                                    <p class="mb-0 float-end text-muted"><i
                                            class="mdi mdi-clock-time-four-outline align-middle me-1 text-primary"></i> 24
                                        min</p>
                                </div>
                            </div>
                        </div>
                        <!--end blog-->
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="blog-box box-shadow rounded mt-4 p-3">
                            <div class="blog-img">
                                <img src="{{ URL::asset('images/blog/img-2.jpg')}}" class="img-fluid rounded" alt="">
                                <div class="read-more">
                                    <a href="#"><i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="primary-link">
                                    <h5 class="fs-19 mb-1">Developers watch out for these burnout symptoms</h5>
                                </a>
                                <p class="text-muted mt-2">Allegedly, a Latin scholar established the origin of the
                                    established text Internet by compiling unusual word.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ URL::asset('images/users/img-6.jpg')}}" alt="" height="45" class="rounded-circle me-2">
                                        <p class="text-muted mb-0">admin</p>
                                    </div>
                                    <p class="mb-0 float-end text-muted"><i
                                            class="mdi mdi-clock-time-four-outline align-middle me-1 text-primary"></i> 32
                                        min</p>
                                </div>
                            </div>
                        </div>
                        <!--end blog-->
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="blog-box box-shadow rounded mt-4 p-3">
                            <div class="blog-img">
                                <img src="{{ URL::asset('images/blog/img-3.jpg')}}" class="img-fluid rounded" alt="Blog">
                                <div class="read-more">
                                    <a href="#"><i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="primary-link">
                                    <h5 class="fs-19 mb-1">How designers and developers can collaborate better</h5>
                                </a>
                                <p class="text-muted mt-2">It seems that only fragments of the original text remain in only
                                    fragments the Lorem Ipsum texts used today.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ URL::asset('images/users/img-7.jpg')}}" alt="" height="45" class="rounded-circle me-2">
                                        <p class="text-muted mb-0">admin</p>
                                    </div>
                                    <p class="mb-0 float-end text-muted"><i
                                            class="mdi mdi-clock-time-four-outline align-middle me-1 text-primary"></i> 45
                                        min</p>
                                </div>
                            </div>
                        </div>
                        <!--end blog-->
                    </div><!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section> --}}
    <!-- END BLOG -->

    <!-- START CTA -->
    <section class="bg-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="header-title text-center">
                        <h2>Gabung Komunitas <span class="text-primary">PLISWAIN</span> Sekarang</h2>
                        <p class="title-desc text-muted mt-3"> Jadi bagian dari komunitas pengguna <span class="text-primary">PLISWAIN</span> yang kirim WhatsApp otomatis setiap hari!  
                            Yuk, kita bangun koneksi, promosi, dan pertumbuhan bareng-bareng 🚀. </p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-primary mt-2">Ayoo Gabung!</a>
                        </div>
                    </div>

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END CTA -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-4">
                        <p class="text-uppercase text-muted mb-2">Kontak</p>
                        <h3 class="text-uppercase">Kontak <span class="text-primary">PLISWAIN</span></h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">Punya pertanyaan atau butuh bantuan? Hubungi <span class="text-primary">PLISWAIN</span> kapan aja ya 👇.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-map-marker text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Main Office</h6>
                            <p class="text-muted mb-0">2276 Lynn Ogden Lane Beaumont Lodgeville Road TX 77701</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-phone text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Phone & Email</h6>
                            <p class="text-muted mb-0">Phone: +71 612-234-4023</p>
                            <p class="text-muted mb-0">Fax: +954-627-9727</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-email text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Contact</h6>
                            <p class="text-muted mb-0"> www.exampledesign.com</p>
                            <p class="text-muted mb-0"> example@design.com</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-calendar-clock text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Working Hours</h6>
                            <p class="text-muted mb-0"> Monday-friday: 9:00- 06:00</p>
                            <p class="text-muted mb-0"> Saturday-Sunday: Holiday</p>

                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->

            <div class="row mt-5 pt-2 justify-content-center">

                <div class="col-lg-9">
                    <div class="custom-form">
                        {{-- <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name* :</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Enter your name">
                                    </div>
                                </div><!--end col-->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address* :</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter your email">
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="number" class="form-label">Phone number* :</label>
                                        <input type="tel" class="form-control" name="number" id="number"
                                            placeholder="Enter your number">
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label">Comments :</label>
                                        <textarea class="form-control" placeholder="Leave a comment here" name="comments" id="comments"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-3 text-end">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-primary" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </form> --}}
                        <!-- end form -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    @include('partials.footer')
    <!-- END FOOTER -->
@endsection
@section('scripts')
    {{-- <script>
        // === Toolbar Setup ===
        const toolbarOptions = [
            ['bold', 'italic', 'strike', 'underline'],
            ['clean']
        ];

        // === Inisialisasi Quill ===
        const quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        // === Debug isi editor setiap perubahan ===
        quill.on('text-change', function(delta, oldDelta, source) {
            console.log('Isi editor saat ini:', quill.root.innerHTML);
        });

        // Validasi saat submit form
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {

                // Isi konten Quill (jika kamu pakai)
                const contentInput = document.querySelector('input[name="content"]');
                if (contentInput) {
                    contentInput.value = quill.root.innerHTML;
                }
            });
        }
    </script> --}}
    <script>
        $(document).ready(function () {
            const quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [['bold', 'italic', 'strike'], ['clean']]
                }
            });
    
            $('form[name="form"]').on('submit', function (e) {
                e.preventDefault(); // cegah form submit biasa
    
                // ambil konten dari quill editor
                const content = quill.root.innerHTML;
                $('#original_content').val(content);
    
                const formData = $(this).serialize(); // ambil semua input (termasuk hidden content)
    
                $.ajax({
                    type: 'POST',
                    url: "{{ route('send.message') }}",
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Pesan berhasil dikirim!',
                            confirmButtonColor: '#05bd93'
                        });
                        $('form')[0].reset(); // reset form
                        quill.root.innerHTML = ''; // reset editor
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            let msg = '';
                            $.each(errors, function (key, value) {
                                msg += `• ${value[0]}<br>`;
                            });
                            Swal.fire({
                                icon: 'warning',
                                title: 'Validasi Gagal',
                                html: msg,
                                confirmButtonColor: '#ffc107'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: 'Terjadi kesalahan saat mengirim pesan.',
                                confirmButtonColor: '#dc3545'
                            });
                        }
                    }
                });
            });
        });
    </script>    
@endsection
