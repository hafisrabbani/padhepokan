@extends('home.layouts.main')
@section('title', 'Home')
@section('content')


<!-- Banner Area -->
<div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/pexxel.jpg)">
        <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
        <div class="sf-banner-heading-wrap">
            <div class="sf-banner-heading-area">
                <div class="sf-banner-heading-large">Business Matching</div>
                <div class="sf-banner-breadcrumbs-nav">
                    <ul class="list-inline">
                        <li><a href="index.html"> Beranda </a></li>
                        <li>Business Matching</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Left & right section -->
<div class="aon-page-jobs-wrap">
    <div class="container">
        <div class="row">

            <!-- Side bar start -->
            <div class="col-lg-4 col-md-12">

                <aside class="side-bar sf-rounded-sidebar">
                    <!--Find a Job-->
                    <div class="sf-job-sidebar-blocks">
                        <h4 class="sf-title">Temukan Kata Kunci</h4>
                        <div class="form-group">
                            <input type="text" placeholder="Cari Kata Kunci" class="form-control">
                        </div>
                        <button class="sf-btn-large" type="submit">Temukan</button>
                    </div>

                    <!--Location-->
                    <div class="sf-job-sidebar-blocks">
                        <h4 class="sf-title">Lokasi</h4>
                        <div class="form-group sf-location-ring-wrap">
                            <input type="text" placeholder="Masukan Lokasi" class="form-control">
                            <a href="#" class="sf-location-ring"></a>
                        </div>
                    </div>

                    <!--Category-->
                    <div class="sf-job-sidebar-blocks">
                        <h4 class="sf-title">Kategori</h4>

                        <div class="category-select">
                            <select class="form-control sf-select-box" title="Semua Kategori">
                                <option> Select a Category </option>
                                <option>Automotive</option>
                                <option>Cab Service</option>
                                <option>Car Dealers</option>
                                <option>Car care and Servicing</option>
                                <option>Beauty and Personal Care</option>
                            </select>
                        </div>

                    </div>
                    <!--Jobs Filter-->
                    <div class="sf-job-sidebar-blocks">
                        <h4 class="sf-title">Filter Lewat Tipe</h4>

                        <div class="sf-trettype-wrap sf-job_types">

                            <div class="checkbox sf-radio-checkbox">
                                <input id="any111" name="abc" value="five" type="checkbox">
                                <label for="any111">Perusahaan Swasta</label>
                            </div>
                            <div class="checkbox sf-radio-checkbox">
                                <input id="body111" name="abc" value="five" type="checkbox">
                                <label for="body111">Lembaga Pemerintah & BUMN</label>
                            </div>
                            <div class="checkbox sf-radio-checkbox">
                                <input id="nails111" name="abc" value="five" type="checkbox">
                                <label for="nails111">Penelitian Independen</label>
                            </div>
                            <div class="checkbox sf-radio-checkbox">
                                <input id="hair111" name="abc" value="five" type="checkbox">
                                <label for="hair111">Akademik / Pendidikan</label>
                            </div>
                            <div class="checkbox sf-radio-checkbox">
                                <input id="massage111" name="abc" value="five" type="checkbox">
                                <label for="massage111">Kolaborasi Antar Lembaga</label>
                            </div>


                        </div>

                    </div>

                </aside>

            </div>
            <!-- Side bar END -->

            <!-- Right part start -->
            <div class="col-lg-8 col-md-12">
                <!--Showing results topbar Start-->
                <div class="aon-search-result-top flex-wrap d-flex justify-content-between">
                    <div class="aon-search-result-title">
                        <h5><span>(16)</span> Proyek</h5>
                    </div>
                    <div class="aon-search-result-option">
                        <ul class="aon-search-sortby">
                            <li class="aon-select-sort-by">
                                <select class="sf-select-box form-control sf-form-control bs-select-hidden"
                                    title="SORT BY" name="setorderby" id="setorderby">
                                    <option class="bs-title-option" value="">SORT BY</option>
                                    <option value="rating">Rating</option>
                                    <option value="title">Title</option>
                                    <option value="distance">Distance</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="aon-search-grid-option" id="viewTypes">
                            <li data-view="grid-3">
                                <button type="button" class="btn btn-border btn-icon"><i class="fa fa-th"></i></button>
                            </li>
                            <li data-view="listview" class="active">
                                <button type="button" class="btn btn-border btn-icon"><i
                                        class="fa fa-th-list"></i></button>
                            </li>
                        </ul>
                    </div>
                    <!--Showing results topbar End-->
                </div>

                <ul class="job_listings job_listings-two">
                    <!-- COLUMNS 1 -->
                    @foreach($data as $item)
                    <li class="job_listing type-job_listing job-type-hourly">
                        <a class="job-clickable-box" href="{{ route('business.detail',$item->id) }}"></a>
                        <div class="job-comapny-logo"><img class="company_logo"
                                src="{{ asset('storage/thumbnails/'.$item->thumbnail) }}" alt="">
                        </div>
                        <div class="job-comapny-info">
                            <div class="position">
                                <h3>{{ $item->name }}</h3>
                                <div class="company"> <strong>{{ $item->user->first_name }} {{ $item->user->last_name
                                        }}</strong> </div>
                            </div>

                            <ul class="meta">
                                <li class="date">
                                    <span>
                                        {{ $item->created_at->diffForHumans() }}
                                    </span>
                                </li>
                            </ul>

                            <!-- <div class="job-location"><i class="fa fa-map-marker"></i> Tangerang </div> -->
                            <div class="job-amount"><i class="fa fa-money"></i> <span>Rp. {{ number_format($item->biaya)
                                    }}</span> </div>

                        </div>
                    </li>
                    @endforeach
                </ul>

                <!-- Pagination Start-->
                <div class="site-pagination s-p-center">
                </div>
                <!-- Pagination End-->

            </div>
            <!-- Right part END -->

        </div>
    </div>
</div>
<!-- Left & right section  END -->

@endsection