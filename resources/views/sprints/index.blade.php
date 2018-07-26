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
						<div class="table-responsive">
							<table class="table">
								<thead class="text-primary">
								<tr>
									<td>Sprint name</td>
									<td>Start date</td>
									<td>End date</td>
								</tr>
								</thead>
								<tbody>
								@foreach($data['sprints'] as $sprint)
									<tr>
										<form method="post" style="display: none"
											  action="{{url(sprintf('sprints/delete/%s',$sprint->id))}}"
											  id="form{{$sprint->id}}">
											{{ csrf_field() }}
										</form>
										<td>{{$sprint->name}}
										<td>{{date('m-d-Y',strtotime($sprint->start_date)) }}</td>
										<td>{{date('m-d-Y',strtotime($sprint->end_date)) }}</td>
										<td width="30"><a href="{{url(sprintf('sprints/%s',$sprint->id))}}"><span class="fas fa-edit"></span></a>
										</td>
										<td width="30"><a href="#" onclick="document.getElementById('form{{$sprint->id}}').submit()"> <span
														class="fas fa-times"></span> </a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
						@if($data['sprints']->isEmpty())
							<div class="row">
								<div class="col-3"></div>
								<div class="col-6">
									<h4 class="badge-warning badge">
										<label>There are currently no Sprints, please create at least one</label>
									</h4>
								</div>
								<div class="col-3"></div>
							</div>
						@endif
						<br>
						<a class="btn btn-success pull-right" href="{{url('/sprints/create')}}">
							<i class="fas fa-plus"></i>
							Add new Sprint
						</a>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="card">
					<div class="card-title">
						<div class="card-header card-header-success">
							<h4>Active Sprint</h4>
						</div>
					</div>
					<div class="card-body">
						<form action="{{url('/sprint/active')}}" method="post">
							{{csrf_field()}}
							<select name="sprint" class="form-control">
								<option disabled selected>--</option>
								@foreach($data['sprints'] as $sprint)
									<option value="{{$sprint->id}}"
											@if($sprint->is_active) selected @endif>{{$sprint->name}}</option>
								@endforeach
							</select>
							<button type="submit" class="btn btn-success pull-right">Make active</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
