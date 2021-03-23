@extends('layouts.login')

@section('content')
<div style="min-height: 5vh"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow" style="background: #333f72; color: #ffff; border-radius:25px;">
                <div class=" m-auto text-center pt-5 pb-4">
                    <img src="{{asset('logo/logo.png')}}" width="80" alt=""> <br>
                    <b>
                        UNIVERSITAS BENGKULU <br>
                        FAKULTAS EKONOMI DAN BISNIS <br>
                        MAGISTER MANAJEMEN
                    </b>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            
                            <div class="col-md-8 mb-2">
                                <label for="">Email :</label>
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                                <input placeholder="Masukan Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-8 mb-4">
                                <label for="">Password : </label>
                                <input placeholder="Masukan Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4 ">
                            <button type="submit" class="btn btn-light pr-5 pl-5 m-auto">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
