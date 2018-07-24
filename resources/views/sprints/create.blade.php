@extends('layouts.app')
@include('layouts.sidebar')
@include('layouts.header')

@section('content')
	<div class="sidebar" data-color="white" data-background-color="purple">
		@yield('sidebar')
	</div>
	<div class="main-panel">
		@yield('header')
		<div class="content">
			<div class="row">
				<div class="card">
					<div class="card-title">
						<div class="card-header card-header-primary">
							<h4 class="card-title">Create new story state</h4>
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{url('/sprints/create')}}">
							{{ csrf_field() }}
							<div class="row form-group bmd-form-group">
								<div class="col-6">
									<label class="bmd-label-floating">Name</label>
									<input type="text" class="form-control" name="name">
								</div>
							</div>
							<div class="row form-group bmd-form-group">
								<div class="col-6">
									<label class="bmd-label-static">Sprint start date</label>
									<input type="date" class="form-control" name="start_date">
								</div>
								<div class="col-6">
									<label class="bmd-label-static">Sprint end date</label>
									<input type="date" class="form-control" name="end_date">
								</div>
							</div>
							<br>
							<button class="btn btn-success pull-right" type="submit">Save</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
