@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <br>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>Edit Kegiatan</h3><br />
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
            <form class="forms-sample" action="{{ url('/dashboard/kegiatan/update', $kegiatan->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="judul" name="judul"
                            placeholder="Judul" value="{{ $kegiatan->judul }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kapasitas" class="col-sm-4 col-form-label">Kapasitas</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas"
                            placeholder="Kapasitas" value="{{ $kegiatan->kapasitas }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_tiket" class="col-sm-4 col-form-label">Harga Tiket</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="harga_tiket" name="harga_tiket"
                            placeholder="Harga" value="{{ $kegiatan->harga_tiket }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                          </div>
                        </div> 
                        <input id="tanggal" name="tanggal" 
                        value="{{ old('tanggal') }}"
                        type="date" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="narasumber" class="col-sm-4 col-form-label">Narasumber</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="narasumber" name="narasumber"
                            placeholder="Narasumber" value="{{ $kegiatan->narasumber }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat" class="col-sm-4 col-form-label">Tempat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tempat" name="tempat"
                            placeholder="Tempat" value="{{ $kegiatan->tempat }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kegiatan" class="col-sm-4 col-form-label">Jenis Kegiatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan"
                            placeholder="jenis_kegiatan" value="{{ $kegiatan->jenis_kegiatan }}">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection