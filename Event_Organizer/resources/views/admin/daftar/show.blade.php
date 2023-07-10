@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <a target="_blank" href="https://datatables.net/">official DataTables</a>
        </div>
    </div>
    <a href="{{ url('/dashboard/daftar/create') }}" class="btn btn-primary btn-sm">+Tambah Anggota</a>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Anggota</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr class="table-primery text-uppercase">
                    <th> No </th>
                    <th> Tanggal Daftar </th>
                    <th> Alasan </th>
                    <th> Nama </th>
                    <th> Kegiatan </th>
                    <th> Kategori </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $daftar->tanggal_daftar }} </td>
                            <td> {{ $daftar->alasan }} </td>
                            <td> {{ $daftar->nama_peserta }} </td>
                            <td> {{ $daftar->nama_kegiatan }} </td>
                            <td> {{ $daftar->kategori_peserta }} </td>
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