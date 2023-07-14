@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h1 class="mt-4">Daftar Peserta</h1>
      
    </div>
    <br>
    <a href="{{ url('/dashboard/daftar/create') }}" class="btn btn-primary btn-sm">+Tambah Peserta</a>
    <div class="row">
      <div class="col-12 grid-margin">
        <br>
        <div class="card">
          <div class="card-body">
            {{-- <h4 class="card-title">Daftar Anggota</h4> --}}
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
                    @foreach ($daftars as $daftar)  
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $daftar->tanggal_daftar }} </td>
                            <td> {{ $daftar->alasan }} </td>
                            <td> {{ $daftar->nama_peserta }} </td>
                            <td> {{ $daftar->nama_kegiatan }} </td>
                            <td> {{ $daftar->kategori_peserta }} </td>
                            <td>
                                <a href="{{ url('/dashboard/daftar/show',$daftar->id) }}" class="btn btn-outline-primary">View</a>
                                <a href="{{ url('/dashboard/daftar/edit',$daftar->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form action="{{ url('/dashboard/daftar/destroy',$daftar->id) }}" method="POST" class=d-inline>
                                  @csrf
                                  @method('delete')
                                  <button type="Submit" class="btn btn-outline-danger" onclick="if(!confirm('Anda Yakin Menghapus Data Produk{{ $daftar->id }}" {return false}>Delete</button>
                                </form> 
                            </td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection