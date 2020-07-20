@extends('layouts.app')
@section('content')
    <body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="{{asset('/img/smp-amaliyah.png')}}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <form class="user" method="POST" action="{{ route('login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="row-cols-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-8">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="row-cols-md-6 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-8">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary col-md-8">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                                <br>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>

@endsection
