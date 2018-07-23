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
							<h4 class="card-title">Story states</h4>
						</div>
					</div>
					<div class="card-body">
							@forelse($data['storyStates'] as $state)
								<div class="row">
									<div class="col-10">
										<label>{{$state->name}}</label>
									</div>
									<div class="col-2">
										<a href="#"><span class="fas fa-edit"></span> </a>
										<a href="#"><span class="fas fa-times"></span> </a>
									</div>
								</div>
								<hr>
							@empty
								<h4 class="badge-warning badge">
									<label>There are currently no states, please create at least one</label>
								</h4>
							@endforelse
						<br>
						<a class="btn btn-success"  href="{{url('/settings/storyStates/create')}}">
							<i class="fas fa-plus"></i>
							Add new story state
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
