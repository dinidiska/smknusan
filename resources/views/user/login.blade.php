@extends('layout.proses')
@section('content')
@section('title', 'Login')

<section class="my-5">
    <div class="container"> 
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card bg-light border-secoundery" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid mb-2" width="200"><hr>
                            @if(session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            @if($errors->any())
                            @foreach($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                        </div>
                        <form method="POST" action="{{ url('user/Proses-Login') }}" class="row g-3 needs-validation" novalidate >
                            @csrf
  
                            <div class="col-12">
                              <label for="email" class="form-label">Email</label>
                              <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                                  <input type="email" id="email" name="email" class="form-control" required>
                                  <div class="invalid-feedback">
                                    Email tidak boleh kosong
                                </div>
                              </div>
                            </div>
  
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control"  required>
                                <div class="invalid-feedback">
                                    Password tidak boleh kosong
                                </div>
                            </div>
                            <br>

                            <br>
  
                            <div class="col-12">
                                <button class="btn  w-100" type="submit">Masuk</button>
                              </div>
                                 
              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <script src="{{ asset('js/script.js') }}"></script>

  @endsection