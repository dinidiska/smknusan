@extends('layout.admin')
@section('content')
@section('title', 'Detail')

<br><br><br><br>
<div class="container pt-6">

  <a class="btn btn-success" href="{{ route('prestasi.add') }}">Tambah Prestasi</a>
  <br><br>
  <h2>Data Prestasi</h2>
    <table class="table table-bordered table-striped text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Gambar</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($allDataPrestasi as $key => $Prestasi)
        <tr>
          <th scope="row">{{ $key+1 }}</th>
          <td style="text-align: left">{{ $Prestasi->title}}</td>
          <td><img src="{{ asset( $Prestasi->image_url) }}" width="60px"></td>
          <td style="text-align: left">{{ $Prestasi->description }}</td>
          <td>
            <a href="{{route('prestasi.edit', $Prestasi->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
            <a href="{{route('prestasi.delete', $Prestasi->id)}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

