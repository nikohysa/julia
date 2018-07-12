@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-3">
				{{--FIXME: Left empty to add center the form in the view--}}
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-header card-header-primary">
						<h3 class="card-title content-center">Login</h3>
					</div>
					<div class="card-body">
						<form class="form-horizontal container" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-12">
									<div class="form-group bmd-form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="email" class="bmd-label-floating">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password" class="bmd-label-floating">Password</label>
										<input id="password" type="password" class="form-control" name="password" required>
										@if ($errors->has('password'))
											<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<label class="">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									</label>
								</div>
								<div class="col-6">

								</div>
							</div>
							<div class="row">
								<div class="col-3"></div>
								<div class="col-6">
									<button type="submit" class="btn btn-primary" style="width: 100%">
										Login
									</button>
								</div>
								<div class="col-3"></div>
							</div>
							<div class="row" style="padding-top: 20px">
								<div class="col-12">
									<a class="btn btn-danger pull-left" href="{{ route('password.request') }}">
										Forgot Your Password?
									</a>
									<a class="btn btn-success" style="float: right" href="{{ route('register') }}">Register</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-3">
				{{--FIXME: Left empty to add center the form in the view--}}
			</div>
		</div>
	</div>
@endsection
