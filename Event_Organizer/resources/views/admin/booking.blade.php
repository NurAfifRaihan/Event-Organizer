<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking Area</title>
</head>
<body>
    


    <div class="container" >
        <div class="row justify-content-center" >
            <div class="col-lg-8" >
                <div class="card mt-5">
                    <div class="card-body" style="background-color: rgba(123, 123, 124, 0.364)">
                <h3>Tambah Peserta</h3><br />
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
                <form class="forms-sample" action="{{ url('/dashboard/daftar/store') }}" method="POST">
                    @csrf
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
                                placeholder="Alasan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_peserta" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_peserta" name="nama_peserta"
                                placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_kegiatan" class="col-sm-4 col-form-label">Kegiatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                                placeholder="Kegiatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_peserta" class="col-sm-4 col-form-label">Kategori</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kategori_peserta" name="kategori_peserta"
                                placeholder="Kategori">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

