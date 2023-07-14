@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
  <div class="page-header">
      <br>
  </div>
    {{-- <a href="{{ url('/dashboard/kegiatan/create') }}" class="btn btn-primary btn-sm">+Tambah Kegiatan</a> --}}
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Kegiatan</h4>
            <br>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr class="table-primery text-uppercase">
                    <th> No </th>
                    <th> Judul </th>
                    <th> Kapasitas </th>
                    <th> Harga </th>
                    <th> Tanggal </th>
                    <th> Narasumber </th>
                    <th> Tempat </th>
                    <th> Kegiatan </th>
                  </tr>
                </thead>
                <tbody>
                        <tr>
                            <td> {{ $kegiatan->id }} </td>
                            <td> {{ $kegiatan->judul }} </td>
                            <td> {{ $kegiatan->kapasitas }} </td>
                            <td> {{ $kegiatan->harga_tiket }} </td>
                            <td> {{ $kegiatan->tanggal }} </td>
                            <td> {{ $kegiatan->narasumber }} </td>
                            <td> {{ $kegiatan->tempat }} </td>
                            <td> {{ $kegiatan->jenis_kegiatan }} </td>
                        </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection