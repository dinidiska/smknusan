@extends('layout.admin')
@section('content')
@section('title', 'Admin')

<br><br><br><br>


<div class="container pt-4">
  <a class="btn btn-success" href="{{ route('berita.add') }}">Tambah Berita</a>
  <br><br>
  <h2>Data Berita</h2>
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
        @foreach($allDataNews as $key => $News)
        <tr>
          <th scope="row">{{ $key+1 }}</th>
          <td style="text-align: left">{{ $News->title }}</td>
          <td><img src="{{ asset($News->image_url) }}" width="60px"></td>
          <td style="text-align: left">{{ $News->description }}</td>
          <td>
            <a href="{{route('berita.edit', $News->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
            <a href="{{route('berita.delete', $News->id)}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

