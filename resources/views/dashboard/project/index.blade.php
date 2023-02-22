@extends('dashboard.layouts.main')
@section('content')
<div class="content-admin-main">
    @include('dashboard.layouts.status-bar')

    <div class="aon-admin-heading">
        <h4>My Projects</h4>
    </div>

    <div class="card aon-card">
        <div class="card-body aon-card-body">

            <div class="sf-bd-data-tb-head aon-mob-btn-marb">
                <a class="admin-button" href="{{ route('project.create') }}">
                    <i class="fa fa-plus"></i>
                    Add Project
                </a>
            </div>

            <div class="sf-bs-data-table">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%" id="project-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Proyek</th>
                                <th>Tgl Kadaluarsa</th>
                                <th>Durasi</th>
                                <th>Thumbnail</th>
                                <th>Jenis</th>
                                <th>Biaya</th>
                                <th>Tgl Dibuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
@include('dashboard.project.scripts')