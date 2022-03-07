@extends('layouts.app')

@section('content')

        <div class="content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                                
                            <!-- Register Content -->
                            <div class="account-content">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-7 col-lg-6 login-left">
                                        <img src="assets/img/login-banner.png" class="img-fluid" alt="Medikus Register">    
                                    </div>
                                    <div class="col-md-12 col-lg-6 login-right">
                                        <div class="login-header">
                                            <h3>Patient Register <a href="{{ route('register') }}">Are you a Doctor?</a></h3>
                                        </div>
                                        
                                        <!-- Register Form -->
                                       <form method="POST" action="{{ route('register') }}">
                        @csrf
                                            <div class="form-group form-focus">
                                                
                                               
                         
                                <input id="name" type="text" class="form-control floating @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 <label for="name" class="focus-label">{{ __('Name') }}</label>

                            
                                            </div>
                                            <div class="form-group form-focus">

                                <input id="email" type="email" class="form-control floating @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                <label for="email" class="focus-label">{{ __('E-Mail Address') }}</label>

                            
                                            </div>
                                            <div class="form-group form-focus">
                                                
                                <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                <label for="password" class="focus-label">{{ __('Password') }}</label>

                            
                                            </div>
                                             <div class="form-group form-focus">
                                       <input id="password-confirm" type="password" class="form-control floating" name="password_confirmation" required autocomplete="new-password">
                                                <label for="password-confirm" class="focus-label">{{ __('Confirm Password') }}</label>

                            
                                            </div>
                                             <div class="form-group form-focus">
                            

                              
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value=""  ></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="gender" class="focus-label">Please Select Your Gender</label>
                        </div>

                                            <div class="text-right">
                                                <a class="forgot-link" href="{{ route('login') }}">Already have an account?</a>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                                            <div class="login-or">
                                                <span class="or-line"></span>
                                                <span class="span-or">or</span>
                                            </div>
                                            <div class="row form-row social-login">
                                                <div class="col-6">
                                                    <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /Register Form -->
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /Register Content -->
                                
                        </div>
                    </div>

                </div>

            </div>      

<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
@endsection
