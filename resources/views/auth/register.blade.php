@extends('layouts.app')
@section('body-class', 'bdy')

{{-- @section('content')
<div class="container">
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
</div>
@endsection --}}


@section('content')
     <!--sign up-->
     <div class="modal-dialog">
		<div class="modal-content"><br>
            <a href="index.php" class=" ">« Back</a>
			<div class="modal-heading">
				<h2 class="text-center">Sign Up</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form method="post" name="signup" onsubmit="return( validate());" >
                    
                  
                    
					<div class="form-group">
                        <select autofocus id="account_type" name="account_type" class="input-lg form-control" placeholder="Type"  >
                            <option selected hidden value="-1" >Choose Category</option>
                            <option value="artist" >Artist</option>
                            <option value="art_lover">Art lover</option>
                        </select>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                           <b>First name:</b><input type="text" class="form-control" placeholder="FirstName" name="firstname" value="" required/>
						                  </div>
                            </div>
                                <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                            <b>Last Name:</b><input type="text" class="form-control" placeholder="LastName"name="lastname" value="" required />
						                  </div>
                                </div>
                            
                        </div>
						<div class="form-group">
							<b>Email id:</b><input type="text" class="form-control" placeholder="abc@gmail.com" name="email" value="" required />
						</div>
					</div>
					<div class="form-group">
							<b>Create Password:</b><input type="password" class="form-control" placeholder="create Password" name="password1" required />
                    </div>
                    <div class="form-group">
							<b>Confirm Password:</b><input type="password" class="form-control" placeholder="confirm Password" name="password2" required/>
                    </div>

					<div class="form-group text-center">
						<a href="login.php" class="btn btn-link" >LogIn</a>
                        <form action="artist_detail.html">
						<button type="submit" class="btn btn-success btn-lg" name="signup" value="signup" >Sign Up</button></form>
						<a href="#" class="btn btn-link">Forgot Password?</a>
						
					</div>

				</form>
			</div>
		</div>
	</div>
     
     
@endsection