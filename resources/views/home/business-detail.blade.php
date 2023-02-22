@extends('home.layouts.main')
@section('title', 'Home')
@section('content')
<div class="sf-job-benner sf-overlay-wrapper">
    <div class="banner-job-row">
        <div class="sf-overlay-main" style="opacity:0;"></div>
        <div class="sf-banner-job-heading-wrap">
            <div class="sf-banner-job-heading-area">
                <div class="sf-banner-job-logo-pic"><img src="{{ asset('storage/thumbnails/'.$data->thumbnail) }}"
                        alt=""></div>
                <div class="sf-banner-job-heading-large">Survey Desain Rumah Minimalis Anti Gempa</div>
                <ul class="sf-banner-job-dutation">
                    <li><i class="fa fa-clock-o"></i> Tanggal Posting: <span class="jobs-timing">2 tahun lalu</span>
                    </li>
                    <li><i class="fa fa-hourglass-o"></i> Expired: <span class="jobs-date-label">January 26, 2022</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section-content ">
    <!-- Left & right section start -->
    <div class="container">
        <!--Job Information Start-->
        <div class="sf-job-details-fileds sf-job-details-fileds-two">
            <ul class="job-listing-meta meta">
                <li class="location">
                    <span class="job-meta-icon"><img src="{{ asset('assets/images/job-cin/location.png') }}"
                            alt=""></span>
                    <div class="sf-job-meta-info">
                        <h5 class="job-meta-title">Lokasi:</h5>
                        <span class="job-meta-text"><a class="google_map_link" href="http://maps.google.com"
                                target="">Lihat diGoogle Maps</a></span>
                    </div>
                </li>
                <li>
                    <span class="job-meta-icon"><img src="{{ asset('assets/images/job-cin/money.png') }}" alt=""></span>
                    <div class="sf-job-meta-info">
                        <h5 class="job-meta-title">Biaya:</h5>
                        <span class="job-meta-text text-red">Rp. {{ number_format($data->biaya) }}</span>
                    </div>
                </li>
                <li class="job-type hourly">
                    <span class="job-meta-icon"><img src="{{ asset('assets/images/job-cin/brifcase.png') }}"
                            alt=""></span>
                    <div class="sf-job-meta-info">
                        <h5 class="job-meta-title">Jenis Pekerjaan:</h5>
                        <span class="job-meta-text">{{ $data->jenis }}</span>
                    </div>
                </li>
                <li class="location">
                    <span class="job-meta-icon"><img src="{{ asset('assets/images/job-cin/tag.png') }}" alt=""></span>
                    <div class="sf-job-meta-info">
                        <h5 class="job-meta-title">Kategori:</h5>
                        <span class="job-meta-text">Arsitektur, Statistik, Survey</span>
                    </div>
                </li>
                <li>
                    <span class="job-meta-icon"><img src="{{ asset('assets/images/job-cin/clock.png') }}" alt=""></span>
                    <div class="sf-job-meta-info">
                        <h5 class="job-meta-title">Durasi:</h5>
                        <span class="job-meta-text">{{ $data->duration }} Bulan</span>
                    </div>
                </li>
                <li class="date-posted">
                    <span class="job-meta-icon"><img src="{{ asset('assets/images/job-cin/user.png') }}" alt=""></span>
                    <div class="sf-job-meta-info">
                        <h5 class="job-meta-title">Di Posting:</h5>
                        <span class="job-meta-text">3 tahun lalu</span>
                    </div>
                </li>
            </ul>
        </div>
        <!--Job Information End-->

        <div class="row">

            <!-- Left part start -->
            <div class="col-lg-8 col-md-12">
                <h3 class="m-b30">Deskripsi : </h3>
                {!! $data->deskripsi !!}


                <div class="aon-job-gallery">
                    <h3 class="m-b30">Photos</h3>
                    <ul class="job-gallery clearfix mfp-gallery">
                        <li>
                            <div class="job-gallery-pic"
                                style="background-image:url({{ asset('assets/images/job-gallery/pic.jpg') }})">
                                <a href="{{ asset('assets/images/job-gallery/pic.jpg') }}"
                                    class="mfp-link job-gallery-link"></a>
                            </div>
                        </li>
                        <li>
                            <div class="job-gallery-pic"
                                style="background-image:url({{ asset('assets/images/job-gallery/pic4.jpg') }})">
                                <a href="#" class="job-gallery-link">24+</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Job Description End-->
            </div>
            <!-- Left part END -->

            <!-- Side bar start -->
            <div class="col-lg-4 col-md-12">

                <aside class="sf-jobdetail-sidebar">

                    <div class="sf-jobdetail-blocks">
                        <a class="sf-btn-large2" href="#">Daftar Sekarang <i class="fa fa-send"></i></a>
                    </div>
                    <!--Job Post-->
                    <div class="sf-jobdetail-blocks">
                        <div class="sf-related-jobs">
                            <div class="sf-related-job-pic">
                                <img src="{{ asset('storage/avatars/'.$data->user->avatar) }}" alt="">
                            </div>
                            <div class="sf-related-job-location">
                                <i class="feather-map-pin"></i> Yogyakarta
                            </div>
                            <div class="sf-related-job-name">
                                InwaveThemes <span class="feather-check"></span>
                            </div>
                            <div class="sf-related-job-rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star text-gray"></span>
                                <span class="sf-rating-lable"> 5 Ratings </span>
                            </div>
                        </div>
                    </div>
                    <!--Location-->
                    <div class="sf-jobdetail-blocks">
                        <h4 class="sf-title">Lokasi</h4>
                        <a class="sf-btn-large2" href="#">Lihat Lokasi <i class="feather-map-pin"></i></a>
                    </div>

                </aside>

            </div>
            <!-- Side bar END -->

        </div>
    </div>
</div>
@endsection