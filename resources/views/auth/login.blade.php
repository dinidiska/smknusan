
    

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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div>
                                    <label>Email:</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div>
                                    <label>Password:</label>
                                    <input type="password" name="password" required>
                                </div>
                                <button type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    
      @endsection