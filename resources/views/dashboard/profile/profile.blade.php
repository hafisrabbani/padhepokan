@extends('dashboard.layouts.main')
@section('content')
<div class="content-admin-main">

    @include('dashboard.layouts.status-bar')

    <div class="aon-provi-tabs d-flex flex-wrap justify-content-between">
        <div class="aon-provi-left">
            <ul class="aon-provi-links">
                <li><a href="#aon-about-panel">About</a></li>
                <li><a href="#aon-contact-panel">Contact</a></li>
                <li><a href="#aon-adress-panel">Adress</a></li>
                <li><a href="#aon-serviceArea-panel">Service Area</a></li>
                <li><a href="#aon-servicePer-panel">Service Perform</a></li>
                <li><a href="#aon-socialMedia-panel">Social Media</a></li>
                <li><a href="#aon-passUpdate-panel">Password</a></li>
                <li><a href="#aon-category-panel">Category</a></li>
                <li><a href="#aon-amenities-panel">Amenities</a></li>
                <li><a href="#aon-languages-panel">Languages</a></li>
                <li><a href="#aon-gallery-panel">Gallery</a></li>
                <li><a href="#aon-video-panel">Video</a></li>
            </ul>
        </div>
        <div class="aon-provi-right">

        </div>
    </div>


    <div class="aon-admin-heading">
        <h4>Edit Profile</h4>
    </div>

    <div class="card aon-card">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-user"></i> About me</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#about-me"
                        aria-expanded="false" aria-controls="about-me">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>

        </div>
        <div class="card-body aon-card-body collapse" id="about-me">
            <form id="about-form">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="aon-staff-avtar">
                            <div class="aon-staff-avtar-header">
                                <div class="aon-pro-avtar-pic ">
                                    <img src="{{ ($user->avatar) ? asset('storage/avatars/'.$user->avatar) : asset('assets/images/user.jpg') }}"
                                        alt="">
                                    <button class="admin-button has-toltip">
                                        <i class="fa fa-camera"></i>
                                        <span class="header-toltip">Upload Avtar</span>
                                        <input type="file" name="avatar">
                                    </button>
                                </div>
                                <div class="aon-pro-cover-wrap">
                                    <div class="aon-pro-cover-pic">
                                        <img src="{{ ($user->banner) ? asset('storage/banners/'.$user->banner) : asset('assets/images/user.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="admin-button-upload">
                                        <span>Upload Cover Image</span>
                                        <input type="file" name="banner">
                                    </div>
                                </div>
                            </div>
                            <div class="aon-staff-avtar-footer">
                                <h4 class="aon-staff-avtar-title">Upload Your Avatar</h4>
                                <ul>
                                    <li>Min width and height: <span>600 x 600 px</span></li>
                                    <li>Max Upload Size: <span>512MB</span></li>
                                    <li>Extensions: <span>JPEG,PNG,GIF,PNG</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="username" type="text"
                                            value="{{$user->username }}">
                                        <i class="aon-input-icon fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institusi</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="institusi" type="text"
                                            value="{{$user->institusi }}">
                                        <i class="aon-input-icon fa fa-building-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="first_name" type="text"
                                            value="{{$user->first_name }}">
                                        <i class="aon-input-icon fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="last_name" type="text"
                                            value="{{$user->last_name }}">
                                        <i class="aon-input-icon fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 breck-w1400">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="aon-inputicon-box">
                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                            class="form-control sf-form-control">
                                            <option value=""> -- Pilih Jenis Kelamin -- </option>
                                            <option value="L" {{ $user->jenis_kelamin == 'L' ? 'selected' : ''
                                                }}>
                                                Laki-laki</option>
                                            <option value="P" {{ $user->jenis_kelamin == 'P' ? 'selected' : ''
                                                }}>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 breck-w1400">
                                <div class="form-group">
                                    <label>TagLine</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="tagline" type="text"
                                            value="{{ $user->tagline }}">
                                        <i class="aon-input-icon fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Biography</label>
                                    <div class="editer-wrap">
                                        <div class="editer-textarea">
                                            <textarea class="form-control" rows="4"
                                                name="biografi">{{ $user->bio }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn site-btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card aon-card" id="aon-contact-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-envelope"></i> Contact Detail</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse"
                        data-target="#contact-detail" aria-expanded="false" aria-controls="contact-detail">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="contact-detail">
            <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Telp</label>
                            <div class="aon-inputicon-box">
                                <input class="form-control sf-form-control" name="telp" type="text"
                                    value="{{$user->detail->telp }}">
                                <i class="aon-input-icon fa fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="aon-inputicon-box">
                                <input class="form-control sf-form-control" name="email" type="email"
                                    value="{{$user->email }}" readonly>
                                <i class="aon-input-icon fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Website</label>
                            <div class="aon-inputicon-box">
                                <input class="form-control sf-form-control" name="website" type="text"
                                    value="{{$user->detail->website }}">
                                <i class="aon-input-icon fa fa-globe"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn site-btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card aon-card" id="aon-adress-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-address-card"></i> Address</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#address"
                        aria-expanded="false" aria-controls="address">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="address">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-globe"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Apt/Suite #</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-map-marker"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-map-marker"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>State</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-map-marker"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Postal Code</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-map-marker"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Country</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-map-marker"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label> Latitude</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-street-view"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Longitude</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-street-view"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card aon-card" id="aon-servicePer-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-building-o"></i> Service to Perform At</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse"
                        data-target="#service-perform" aria-expanded="false" aria-controls="service-perform">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="service-perform">
            <div class="row">


                <div class="col-md-12">
                    <div class="aon-inputicon-box">

                        <div class="radio-inline-box service-perform-list">

                            <div class="checkbox sf-radio-checkbox sf-radio-check-2">
                                <input id="loc11" name="abc" value="five" type="radio">
                                <label for="loc11">My Location</label>
                            </div>
                            <div class="checkbox sf-radio-checkbox sf-radio-check-2">
                                <input id="loc22" name="abc" value="five" type="radio">
                                <label for="loc22">Customer Location</label>
                            </div>
                            <div class="checkbox sf-radio-checkbox sf-radio-check-2">
                                <input id="loc33" name="abc" value="five" type="radio">
                                <label for="loc33">Both</label>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="card aon-card" id="aon-socialMedia-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-share-alt"></i> Social Media</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse"
                        data-target="#social-media" aria-expanded="false" aria-controls="social-media">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="social-media">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Facebook</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-facebook"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Twitter</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-twitter"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Linkedin</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-linkedin"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Pinterest</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-pinterest"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Digg</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-digg"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Instagram</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card aon-card" id="aon-passUpdate-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-lock"></i> Password Update</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#pass-update"
                        aria-expanded="false" aria-controls="pass-update">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="pass-update">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>New Password</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="company_name" type="text">
                            <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                    </div>
                </div>

            </div>
            <p>Enter same password in both fields. Use an uppercase letter and a number for stronger password.</p>
        </div>
    </div>

    <div class="card aon-card" id="aon-category-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-list-alt"></i> Category</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#category"
                        aria-expanded="false" aria-controls="category">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="category">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <div class="alert alert-info">Currently you can choose 10 categories. You can increase it by
                            upgrade membership plan</div>
                        <select class="selectpicker" multiple data-live-search="true">
                            <option>Laoundry</option>
                            <option>Cab Services</option>
                            <option>Car Dealer</option>
                            <option>Event Organizer</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Primary Category</label>
                        <div class="radio-inline-box">

                            <div class="checkbox sf-radio-checkbox">
                                <input id="lau1" name="abc" value="five" type="radio">
                                <label for="lau1">Laundry</label>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <p>Enter same password in both fields. Use an uppercase letter and a number for stronger password.</p>
        </div>
    </div>

    <div class="card aon-card" id="aon-amenities-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-shield"></i> Amenities</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#amenities"
                        aria-expanded="false" aria-controls="amenities">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="amenities">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Amenities</label>
                        <select class="selectpicker" multiple data-live-search="true">
                            <option>Laoundry</option>
                            <option>Cab Services</option>
                            <option>Car Dealer</option>
                            <option>Event Organizer</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card aon-card" id="aon-languages-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-language"></i> Languages</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#languages"
                        aria-expanded="false" aria-controls="languages">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body aon-card-body collapse" id="languages">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Languages</label>
                        <select class="selectpicker" multiple data-live-search="true">
                            <option>Laoundry</option>
                            <option>Cab Services</option>
                            <option>Car Dealer</option>
                            <option>Event Organizer</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card aon-card" id="aon-gallery-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-image"></i> Gallery Images</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#gallery"
                        aria-expanded="false" aria-controls="gallery">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="card-body aon-card-body collapse" id="gallery">
            <form action="upload.php" class="dropzone dropzone-custom"></form>
        </div>
    </div>

    <div class="card aon-card" id="aon-video-panel">
        <div class="card-header aon-card-header">
            <div class="row">
                <div class="col text-left">
                    <h4><i class="fa fa-video-camera"></i> Video Upload</h4>
                </div>
                <div class="col text-right">
                    <button class="btn site-btn-primary" type="button" data-toggle="collapse" data-target="#video"
                        aria-expanded="false" aria-controls="video">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="card-body aon-card-body collapse" id="video">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Insert YouTube or Vimeo or Facebook Vedio Url"
                    aria-label="Recipient's username">
                <div class="input-group-append">
                    <button class="btn admin-button" type="button">Priview</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@include('dashboard.profile.script')