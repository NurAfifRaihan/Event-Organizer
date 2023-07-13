@extends('admin.layout.index')
@section('content')
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
    <a href="{{ url('/dashboard/kegiatan/create') }}" class="btn btn-primary btn-sm">+Tambah Kegiatan</a>
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
                    <th> Judul </th>
                    <th> Kapasitas </th>
                    <th> Harga </th>
                    <th> Tanggal </th>
                    <th> Narasumber </th>
                    <th> Tempat </th>
                    <th> Kegiatan </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($kegiatans as $kegiatan)  
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $kegiatan->judul }} </td>
                            <td> {{ $kegiatan->kapasitas }} </td>
                            <td> {{ $kegiatan->harga_tiket }} </td>
                            <td> {{ $kegiatan->tanggal }} </td>
                            <td> {{ $kegiatan->narasumber }} </td>
                            <td> {{ $kegiatan->tempat }} </td>
                            <td> {{ $kegiatan->jenis_kegiatan }} </td>
                            <td>
                                <a href="{{ url('/dashboard/kegiatan/show',$kegiatan->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ url('/dashboard/kegiatan/edit',$kegiatan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ url('/dashboard/kegiatan/destroy',$kegiatan->id) }}" method="POST" class=d-inline>
                                  @csrf
                                  @method('delete')
                                  <button type="Submit" class="btn btn-primary btn-sm" onclick="if(!confirm('Anda Yakin Menghapus Data Produk{{ $kegiatan->id }}" {return false}>Delete</button>
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