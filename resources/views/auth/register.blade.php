@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header fs-1 fw-bold">{{ __('Register Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{--  mobile number input   --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                 <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" minlength="10" required />
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{--  gender radio inputs  --}}
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <div>
                                    <input type="radio" id="male" name="gender" value="male" @if(old('gender') == 'male') required checked @endif />
                                    <label for="male">Male</label>
                                </div>

                                <div>
                                    <input type="radio" id="female" name="gender" value="female" @if(old('gender') == 'female') required checked @endif />
                                    <label for="female">Female</label>
                                </div>

                                <div>
                                    <input type="radio" id="others" name="gender" value="others" @if(old('gender') == 'others') required checked @endif />
                                    <label for="others">Others</label>
                                </div>

                                

                            </div>
                        </div>


                        {{--  adress input feild  --}}
                        <div class="row mb-3">
                            <label for="adress" class="col-md-4 col-form-label text-md-end">{{ __('Adress') }}</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{--  technologies check boxes  --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Technologies Know') }}</label>
                            <div class="col-md-6">
                                <div class="d-flex flex-wrap">
                                    <div class="mx-1">
                                        <input type="checkbox" id="clang" name="clang"  />
                                        <label for="clang">C & C++</label>
                                    </div>

                                    <div class="mx-1">
                                        <input type="checkbox" id="php" name="php" />
                                        <label for="php">PHP</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="checkbox" id="java" name="java" />
                                        <label for="java">java</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="checkbox" id="html" name="html" />
                                        <label for="html">html</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="checkbox" id="css" name="css" />
                                        <label for="css">css</label>
                                    </div>
                                    <div class="mx-1">
                                        <input type="checkbox" id="python" name="python" />
                                        <label for="python">python</label>
                                    </div>
                                    
                                  

                                </div>
                            </div>



                            {{--  multiple select dropdown select field  --}}
                            






                            {{--  profile image input image  field  --}}
                            <div class="row mb-3">
                            <label for="profile_file" class="col-md-4 col-form-label text-md-end">{{ __('profile picture') }}</label>

                            <div class="col-md-6">
                                <input id="profile_file" type="file" class="form-control @error('profile_file') is-invalid @enderror" name="profile_file" value="{{ old('name') }}" required autocomplete="name" accept="image/png, image/jpeg" autofocus>

                                @error('profile_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>


                        {{--  cover image input field  --}}
                        <div class="row mb-3">
                            <label for="cover_file" class="col-md-4 col-form-label text-md-end">{{ __('cover pictures') }}</label>

                            <div class="col-md-6">
                                <input id="cover_file" type="file" class="form-control @error('cover_file') is-invalid @enderror" name="cover_file" required autocomplete="name" accept="image/png, image/jpeg" autofocus multiple>

                                @error('cover_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
   


                         {{--  password input feild  --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="******" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="******" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div>

@endsection
