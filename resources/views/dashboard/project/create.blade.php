@extends('dashboard.layouts.main')
@section('content')
<div class="content-admin-main">
    @include('dashboard.layouts.status-bar')

    <div class="aon-admin-heading">
        <h4>Buat Project</h4>
    </div>

    <div class="card aon-card">
        <div class="card-body aon-card-body">

            <form id="project-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Proyek</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <input type="date" name="expired" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Durasi (bulan)</label>
                            <input type="number" name="duration" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <div class="custom-file">
                                <input type="file" class="form-control" id="customFile" name="thumbnail">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis</label>
                            <select name="jenis" class="form-control">
                                <option selected disabled>-- Pilih Jenis --</option>
                                <option value="kontrak">Kontrak</option>
                                <option value="non-kontrak">Non Kontrak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="number" name="biaya" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Link Gmaps</label>
                            <input type="text" name="gmaps" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="10" id="ckeditor"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="galeri" multiple name="galeri[]">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn site-btn-primary" type="submit">Submit</button>
            </form>

        </div>
    </div>
</div>

@endsection
@include('dashboard.project.scripts')