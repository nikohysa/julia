@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<div class="card">
					<div class="card-header-primary">
						<h3 class="card-title content-center">Reset Password</h3>
					</div>
					<div class="card-body">
						<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
							{{ csrf_field() }}

							<div class="form-group bmd-form-group {{ $errors->has('Òemail') ? ' has-error' : '' }}">
								<label for="email" class="bmd-label-floating">E-Mail Address</label>

								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
								@endif
							</div>

							<div class="form-group bmd-form-group">
									<button type="submit" class="btn btn-primary">
										Send Password Reset Link
									</button>
								<a href="{{ route('login') }}" class="btn btn-outline-success">
									Back to login
								</a>
							</div>
							<div class="form-group bmd-form-group">
								@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
