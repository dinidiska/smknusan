@extends('layout.admin')
@section('content')
@section('title', 'Tambah')
<br><br><br><br>

<div class="container pt-2">
    <h4>Edit Data Berita</h4><hr>
  <div class="card p-4 shadow-lg p-3 mb-5 bg-body rounded">
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{ url('berita/proses-edit',  $editData->id)  }}" >
        @csrf
            <div class="container m-6">
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="name" name="title" id="title" value="{{ $editData->title }}" class="form-control">
            </div>
          </div>
      
          <div class="row mb-3">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar Berita</label>
            <div class="col-sm-10">
              <input class="form-control" name="image_url" type="file" value="{{ $editData->image_url }}" id="image_url" accept="image/*">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
              <input type="text" name="description" id="description" value="{{ $editData->description }}" class="form-control">
            </div>
          </div>
      
          <div class="text-xs-right">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
          </div>
      </form>
    </section>
  </div>
</div>


@endsection