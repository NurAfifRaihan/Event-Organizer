@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book"></i>
            </span> Daftar 
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>Tambah Daftar</h3><br />
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form validasi -->
            <form class="forms-sample" action="{{ url('/dashboard/daftar/store', $daftar->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal Daftar</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                          </div>
                        </div> 
                        <input id="tanggal_daftar" name="tanggal_daftar" 
                        value="{{ old('tanggal') }}"
                        type="date" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alasan" class="col-sm-4 col-form-label">Alasan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="alasan" name="alasan"
                            placeholder="Alasan" value="{{ $daftar->alasan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_peserta" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_peserta" name="nama_peserta"
                            placeholder="Nama" value="{{ $daftar->nama_peserta }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_kegiatan" class="col-sm-4 col-form-label">Kegiatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                            placeholder="Kegiatan" value="{{ $daftar->nama_kegiatan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori_peserta" class="col-sm-4 col-form-label">Kategori</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kategori_peserta" name="kategori_peserta"
                            placeholder="Kategori" value="{{ $daftar->kategori_peserta }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection