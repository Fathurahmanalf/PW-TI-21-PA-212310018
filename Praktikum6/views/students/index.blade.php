@extends('layout.template')       
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">id</th>
                <th class="col-md-3">Email</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">Tanggal Lahir</th>
                <th class="col-md-2">Jenis Kelamin</th>
                <th class="col-md-2">No Telphone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>212310016</td>
                <td>Fathur</td>
                <td>Bogor</td>
                <td>16-12-2002</td>
                <td>Pria</td>
                <td>09029309</td>
                <td></td>
                <td>
                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                    <a href='' class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
   
</div>
<!-- AKHIR DATA -->
@endsection
    