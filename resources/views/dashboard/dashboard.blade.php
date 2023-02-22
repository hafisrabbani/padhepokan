@extends('dashboard.layouts.main')
@section('content')
<div class="content-admin-main">
    @include('dashboard.layouts.status-bar')
    <div class="row">
        <div class="col-xl-8 col-lg-12 m-b30 break-1300">
            <div class="card aon-card">
                <div class="card-body aon-card-body">
                    <div class="row">
                        <div class="col-lg-4 m-b30">
                            <div class="panel panel-default ser-card-default">
                                <div class="panel-body ser-card-body ser-puple p-a30">
                                    <div class="ser-card-title">E-Wallet</div>
                                    <div class="ser-card-icons"><img src="{{ asset('assets/images/wallet.png') }}"
                                            alt="" /></div>
                                    <div class="ser-card-amount">$252.45</div>
                                    <div class="ser-card-table">
                                        <div class="ser-card-left">
                                            <div class="ser-card-total">
                                                <div class="ser-total-table">
                                                    <div class="ser-total-cell1">Total</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ser-card-right">
                                            <div class="ser-card-icon"><i class="glyph-icon flaticon-money-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="ser-card-circle-bg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-b30">
                            <div class="panel panel-default ser-card-default">
                                <div class="panel-body ser-card-body ser-orange p-a30">
                                    <div class="ser-card-title">Total Proyek</div>
                                    <div class="ser-card-icons"><img src="{{ asset('assets/images/booking.png') }}"
                                            alt="" /></div>
                                    <div class="ser-card-amount">465</div>
                                    <div class="ser-card-table">
                                        <div class="ser-card-left">
                                            <div class="ser-card-total">
                                                <div class="ser-total-table">
                                                    <div class="ser-total-cell1">Proyek</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ser-card-right">
                                            <div class="ser-card-icon"><i class="glyph-icon flaticon-wallet"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="ser-card-circle-bg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-b30">
                            <div class="panel panel-default ser-card-default">
                                <div class="panel-body ser-card-body ser-blue p-a30">
                                    <div class="ser-card-title">Pendapatan</div>
                                    <div class="ser-card-icons"><img src="{{ asset('assets/images/earning.png') }}"
                                            alt="" /></div>
                                    <div class="ser-card-amount">$124.00</div>
                                    <div class="ser-card-table">
                                        <div class="ser-card-left">
                                            <div class="ser-card-total">
                                                <div class="ser-total-table">
                                                    <div class="ser-total-cell1">Complete</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ser-card-right">
                                            <div class="ser-card-icon"><i class="glyph-icon flaticon-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="ser-card-circle-bg"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-4 col-lg-12 m-b30 break-1300">
            <div class="card aon-card">
                <div class="card-header aon-card-header aon-card-header2">
                    <h4><i class="feather-bell"></i> Notifications</h4>
                </div>
                <div class="card-body aon-card-body">

                    <div class="tab-content">
                        <div id="accepted11" class="tab-pane active">
                            <div class="ws-poptab-list-wrap notification-scroll">
                                <!-- notification here -->
                            </div>

                            <div class="ws-poptab-all text-center">
                                <a href="#" class="btn-link-type">View All</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-8 m-b30">
            <div class="card aon-card">
                <div class="card-header aon-card-header aon-card-header2">
                    <h4><i class="feather-pie-chart"></i> Data Ketertarikan Satu Bulan</h4>
                </div>
                <div class="card-body aon-card-body">
                    <div class="dx-viewport demo-container">
                        <div id="chart-demo">
                            <div id="chart"></div>
                            <div class="action">
                                <div class="label">Choose a temperature threshold, &deg;C: </div>
                                <div id="choose-temperature"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="col-xl-4">
            <div class="card aon-card">
                <div class="card-header aon-card-header aon-card-header2">
                    <h4><i class="feather-pie-chart"></i> Status Proyek</h4>
                </div>
                <div class="card-body aon-card-body">
                    <div>
                        <ul class="list-unstyled">
                            <li class="py-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs rounded-circle m-r10">
                                        <i class="feather-check-circle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted mb-2">Completed</p>
                                        <div class="progress progress-sm animated-progess">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs rounded-circle m-r10">
                                        <i class="feather-calendar"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted mb-2">Pending</p>
                                        <div class="progress progress-sm animated-progess">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs align-self-center me-3">
                                        <div class="avatar-xs rounded-circle m-r10">
                                            <i class="feather-x-circle"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted mb-2">Cancel</p>
                                        <div class="progress progress-sm animated-progess">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 19%"
                                                aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="text-center">
                        <div class="row aon-states-row">
                            <div class="col-4">
                                <div class="mt-2">
                                    <p class="text-muted mb-2">Completed</p>
                                    <h5 class="font-size-16 mb-0">70</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <p class="text-muted mb-2">Pending</p>
                                    <h5 class="font-size-16 mb-0">45</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-2">
                                    <p class="text-muted mb-2">Cancel</p>
                                    <h5 class="font-size-16 mb-0">19</h5>
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

@push('scripts')
<script>
    $(document).ready(function () {
        $('.aon-card-header').click(function () {
            $('.aon-card-header').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
@endpush