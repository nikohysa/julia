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
						@forelse($data['sprints'] as $sprint)
							<div class="table-responsive">
								<form method="post" style="display: none" action="{{url(sprintf('settings/storyStates/delete/%s',$sprint->id))}}"
									  id="form{{$sprint->id}}">
									{{ csrf_field() }}
								</form>
								<table class="table">
									<thead class="text-primary"></thead>
									<tbody>
									<tr>
										<td>{{$sprint->name}}</td>
										<td width="30"><a href="{{url(sprintf('sprints/%s',$sprint->id))}}"><span class="fas fa-edit"></span></a>
										</td>
										<td width="30"><a href="#" onclick="document.getElementById('form{{$sprint->id}}').submit()"> <span class="fas fa-times"></span> </a></td>
									</tr>
									</tbody>
								</table>
							</div>
						@empty
							<div class="row">
								<div class="col-3"></div>
								<div class="col-6">
									<h4 class="badge-warning badge">
										<label>There are currently no Sprints, please create at least one</label>
									</h4>
								</div>
								<div class="col-3"></div>
							</div>
						@endforelse
						<br>
						<a class="btn btn-success pull-right" href="{{url('/sprints/create')}}">
							<i class="fas fa-plus"></i>
							Add new Sprint
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
