@extends('home.layouts.main')
@section('title', 'Home')
@section('content')
<!-- BANNER SECTION START -->
<section class="aon-banner-wrap">

    <!--Left Section-->
    <div class="aon-banner-outer sf-overlay-wrapper">
        <div class="aon-banner-pic">
            <div class="aon-curve-area"></div>
            <div class="aon-overlay-main" style="opacity:0.85;"></div>
            <img src="{{ asset('assets/images/banner/bnr-pic.jpg') }}" width="1919" height="976" alt="">
        </div>
        <div class="aon-banner-text">
            <div class="container">
                <div class="aon-bnr-write">
                    <h2 class="text-top-line">Platform <span class="text-secondry">Solusi Riset</span> &
                    </h2>
                    <h2 class="text-bot-line">Pembangun Negeri</h2>
                </div>
            </div>
        </div>
    </div>
    <!--Right Section-->
    <div class="aon-find-bar aon-findBar-vertical">
        <div class="container">
            <!-- Search Form start-->
            <div class="search-form ">
                <form class="clearfix search-providers" method="get">
                    <input type="hidden" name="s" value="">

                    <div class="aon-searchbar-table">

                        <div class="aon-searchbar-left">
                            <ul class="clearfix sf-searchfileds-count-5">
                                <li>
                                    <label>Judul Penelitian</label>
                                    <input type="text" value="" placeholder="Masukkan Kata Kunci" id="keyword"
                                        name="keyword" class="form-control sf-form-control">
                                    <span class="sf-search-icon"><img
                                            src="{{ asset('assets/images/search-bar/keyword.png') }}" alt="" /></span>
                                </li>

                                <li>
                                    <label>Kategori</label>
                                    <select id="categorysrh" name="catid"
                                        class="form-control sf-form-control aon-categories-select sf-select-box"
                                        title="Pilih Kategori">
                                        <option class="bs-title-option" value="">Select a Category</option>
                                        <option value="17" data-content="<img class='childcat-img' width='50' height='auto' src={{ asset('assets/images/cat-thum/cat-1.jpg') }}>
                              <span class='childcat'>Cab Service</span>">Cab Service
                                        </option>
                                    </select>
                                    <span class="sf-search-icon"><img
                                            src="{{ asset('assets/images/search-bar/maintenance.png') }}"
                                            alt="" /></span>
                                </li>
                                <li>
                                    <label>Wilayah Penelitian</label>
                                    <select class="sf-select-box form-control sf-form-control bs-select-hidden"
                                        data-live-search="true" name="country" id="country"
                                        title="Pilih Daerah Penelitian" data-header="Select a Country">
                                        <option class="bs-title-option" value="">Select Country</option>
                                        <option value="">Select Country</option>
                                    </select>
                                    <span class="sf-search-icon"><img
                                            src="{{ asset('assets/images/search-bar/globe.png') }}" alt="" /></span>
                                </li>
                                <li>
                                    <label>Nama Peneliti</label>
                                    <select class="sf-select-box form-control sf-form-control bs-select-hidden"
                                        data-live-search="true" name="city" id="city" title="Masukkan Nama Peneliti"
                                        data-header="Select a City">
                                        <option class="bs-title-option" value="">Select City</option>
                                        <option value="">Select City</option>
                                    </select>
                                    <span class="sf-search-icon"><img
                                            src="{{ asset('assets/images/search-bar/city.png') }}" alt="" /></span>
                                </li>
                            </ul>
                        </div>
                        <div class="aon-searchbar-right">
                            <button type="button" class="site-button"><i class="fa fa-search"></i> Find
                                Provider</button>
                        </div>

                    </div>

                </form>
            </div>
            <!-- Search Form End-->
        </div>
    </div>

</section>
<!-- BANNER SECTION END -->

<!-- Services Finder categories -->
<section class="bg-white aon-categories-area sf-curve-pos">
    <div class="container">

        <!--Title Section Start-->
        <div class="section-head">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <span class="aon-sub-title">kategori</span>
                    <h2 class="aon-title">Kategori Populer</h2>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <!--Title Section End-->

        <div class="section-content">
            <div class="owl-carousel categories-carousel-owl aon-owl-arrow">
                <!-- COLUMNS 1 -->
                <div class="item">
                    <div class="aon-cat-item">
                        <div class="aon-cat-pic media-bg-animate shine-hover">
                            <a class="shine-box" href="#"><img
                                    src="{{ asset('assets/images/popular-categories/Kesehatan.jpg') }}" alt=""></a>
                        </div>
                        <h4 class="aon-cat-title">Kesehatan</h4>
                    </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="item">
                    <div class="aon-cat-item">
                        <div class="aon-cat-pic media-bg-animate shine-hover">
                            <a class="shine-box" href="#"><img
                                    src="{{ asset('assets/images/popular-categories/LingkunganHidup.jpg') }}"
                                    alt=""></a>
                        </div>
                        <h4 class="aon-cat-title">Lingkungan Hidup</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Services Finder categories END -->

<!-- How it Work -->
<section class="bg-white aon-how-service-area sf-curve-pos">
    <div class="container">

        <div class="section-content">
            <div class="row">
                <!--Title Section Start-->
                <div class="col-lg-4 col-md-12">
                    <span class="aon-sub-title">Langkah - langkah</span>
                    <h2 class="sf-title">Bagaimana Kami Membantu Anda</h2>
                </div>
                <!--Title Section End-->

                <div class="col-lg-8 col-md-12">
                    <!-- Steps Block Start-->
                    <div class="aon-step-blocks">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="aon-step-section step-position-1 aon-icon-effect">
                                    <div class="aon-step-icon aon-icon-box">
                                        <span>
                                            <i class="aon-icon"><img src="{{ asset('assets/images/step-icon/1.png') }}"
                                                    alt=""></i>
                                        </span>
                                    </div>
                                    <div class="aon-step-info">
                                        <h4 class="aon-title">Deskripsikan Riset Anda</h4>
                                        <p>Ini membantu kami menentukan rekomendasi pilihan layanan yang
                                            terbaik untuk riset anda.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="aon-step-section step-position-2 aon-icon-effect">
                                    <div class="aon-step-icon">
                                        <span>
                                            <i class="aon-icon"><img src="{{ asset('assets/images/step-icon/2.png') }}"
                                                    alt=""></i>
                                        </span>
                                    </div>
                                    <div class="aon-step-info">
                                        <h4 class="aon-title">Pilih Riset</h4>
                                        <p>Tahapan ini membantu kami mengetahui preferensi periset yang anda
                                            cari.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="aon-step-section  step-position-3  aon-icon-effect">
                                    <div class="aon-step-icon">
                                        <span>
                                            <i class="aon-icon"><img src="{{ asset('assets/images/step-icon/3.png') }}"
                                                    alt=""></i>
                                        </span>
                                    </div>
                                    <div class="aon-step-info">
                                        <h4 class="aon-title">Kembangkan Ide</h4>
                                        <p>Jabarkan ide anda dan sesuaikan dengan kompetensi rekan peneliti
                                            anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Steps Block End-->
                </div>

            </div>
        </div>

    </div>
</section>
<!-- How it Work END -->

<!-- Why Choose us -->
<div class="aon-whycoose-area sf-curve-pos">
    <div class="container-fluid">
        <div class="sf-whycoose-section">
            <div class="row sf-w-choose-bg-outer d-flex flex-wrap a-b-none">
                <!-- Left Section -->
                <div class="col-md-7 margin-b-50 sf-w-choose-left-cell">
                    <div class="sf-w-choose-info-left">
                        <!--Title Section Start-->
                        <div class="section-head">
                            <div class="row">
                                <div class="col-md-12  margin-b-50">
                                    <span class="aon-sub-title">Pilihan</span>
                                    <h2 class="sf-title">Mengapa memilih kami ?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!--Title Section End-->

                        <!-- COLUMNS 1 -->
                        <div class="sf-w-choose margin-b-20">
                            <div class="sf-w-choose-icon">
                                <span>
                                    <img src="{{ asset('assets/images/whychoose/1.png') }}" alt="">
                                </span>
                            </div>
                            <div class="sf-w-choose-info">
                                <h4 class="sf-title">Meet new customers</h4>
                                <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet
                                    turpis elementum lobortis.</p>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="sf-w-choose margin-b-20">
                            <div class="sf-w-choose-icon">
                                <span>
                                    <img src="{{ asset('assets/images/whychoose/2.png') }}" alt="">
                                </span>
                            </div>
                            <div class="sf-w-choose-info">
                                <h4 class="sf-title">Grow your revenue</h4>
                                <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet
                                    turpis elementum lobortis.</p>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="sf-w-choose">
                            <div class="sf-w-choose-icon">
                                <span>
                                    <img src="{{ asset('assets/images/whychoose/3.png') }}" alt="">
                                </span>
                            </div>
                            <div class="sf-w-choose-info">
                                <h4 class="sf-title">Build your online reputation</h4>
                                <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet
                                    turpis elementum lobortis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Section -->
                <div class="col-md-5 sf-w-choose-bg-wrap sf-w-choose-right-cell">
                    <div class="sf-w-choose-bg" style="background-image: url(images/background/whychoose.jpg);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose us END -->

<!-- Jobs Section -->
<div class="aon-recent-post-area sf-curve-pos">
    <div class="container">
        <!--Title Section Start-->
        <div class="section-head">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <span class="aon-sub-title">Proyek</span>
                    <h2 class="sf-title">PROYEK PENELITIAN TERSEDIA</h2>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <!--Title Section End-->


        <div class="section-content">
            <div class="sf-blog-section-1-wrap">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="media-bg-animate">
                            <div class="sf-jobs-section">

                                <div class="sf-jobs-head">
                                    <a href="#" class="sf-jobs-media"><img src="{{ asset('assets/images/jobs/2.jpg') }}"
                                            alt=""></a>
                                    <span class="sf-jobs-position">Mid Term</span>
                                </div>

                                <div class="sf-jobs-info">
                                    <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                    <h4 class="sf-title"><a href="job-detail.html">Project Manager
                                            Required</a></h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod
                                        temp incididunt ut labore et dolore magna aliqua. Quis ipsum
                                        suspendisse</p>
                                </div>

                                <div class="sf-jobs-footer">
                                    <div class="sf-job-location"><i class="fa fa-map-marker"></i>Mojokerto
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
