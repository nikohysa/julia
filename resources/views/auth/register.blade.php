@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<div class="card">
					<div class="card-header-primary">
						<h3 class="card-title content-center">Register</h3>
					</div>
					<div class="card-body">
						<form class="form-horizontal container" method="POST" action="{{ route('register') }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-2"></div>
								<div class="col-8">
									<div class="form-group bmd-form-group {{ $errors->has('name') ? ' has-error' : '' }}">
										<label for="name" class="bmd-label-floating">Name</label>
										<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
										@if ($errors->has('name'))
											<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
										@endif
									</div>
									<div class="form-group bmd-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="email" class="bmd-label-floating">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
										@if ($errors->has('email'))
											<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group bmd-form-group {{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password" class="bmd-label-floating">Password</label>

										<input id="password" type="password" class="form-control" name="password" required>

										@if ($errors->has('password'))
											<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group bmd-form-group">
										<label for="password-confirm" class="bmd-label-floating">Confirm Password</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">
											Register
										</button>
										<a class="btn btn-outline-success" href="{{ route('login') }}">Back to login</a>
									</div>
								</div>
								<div class="col-2"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
@endsection
