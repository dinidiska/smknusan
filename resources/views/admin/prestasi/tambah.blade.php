@extends('layout.admin')
@section('content')
@section('title', 'Tambah')
<br><br><br><br>

<div class="container pt-2">
  <h4>Tambah Data Prestasi</h4><hr>
  <div class="card p-4 shadow-lg p-3 mb-5 bg-body rounded">
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{url('prestasi/proses-tambah')}}" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="container m-6 p-4">
          <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" name="title" id="title" class="form-control" required>
              <div class="invalid-feedback">
                Judul belum diisi
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="image_url" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
              <input type="file" name="image_url" id="image_url" class="form-control" required>
              <div class="invalid-feedback">
                Gambar belum diisi (Max. 5 MB)
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" name="description" id="description" class="form-control" required>
              <div class="invalid-feedback">
                Keterangan belum diisi
              </div>
            </div>
          </div>
      
          <div class="text-xs-right">
            <button type="submit" class="btn btn-success">Tambah prestasi</button>
          </div>
          </div>
      </form>
    </section>
  </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
@endsection