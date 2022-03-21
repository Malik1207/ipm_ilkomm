@extends('layouts.app')

@section('content')
 <header id="login-header" class="header-image text-white d-none d-md-block">
     <div class="header-overlay">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <h1 class="display-1">LOGIN</h1>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ab et voluptates fugiat eum sed veritatis voluptatem minus commodi. Excepturi ut exercitationem eveniet? Perferendis odit autem ipsa dolor iusto consequuntur!</p>
                 </div>
             </div>
         </div>
        </div>
    </header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h1 class="text-center">Login</h1>
                <hr>
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    {{--  Input Email  --}}
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="email" class="form-control" @error('email')
                                is-invalid
                            @enderror
                            name="email"
                            value="{{ old('email') }}"
                            required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{--  Input Password  --}}
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end">password</label>
                        <div class="col-md-6">
                            <input type="password" id="password" class="form-control" @error('password')
                                is-invalid
                            @enderror
                            name="password"
                            value="{{ old('password') }}"
                            required autocomplete="password" autofocus>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{--  Remember  --}}
                    <div class="mb-3 row col-md-5 offset-md-4">
                        <div class="form-check ms-2">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                            <label for="remember" class="form-check-label">{{ __('Remember Me') }}</label>

                        </div>
                    </div>

                    <div class="form group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="btn btn-link text-decoration-none">
                                    {{ __('Forgot Your Password ?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

