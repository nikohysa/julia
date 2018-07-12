
@section('sidebar')
	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="{{ route('home') }}" class="simple-text logo-normal">
				{{ config('app.name') }}
			</a>
		</div>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="#projects" role="button" aria-expanded="false"
				   data-toggle="collapse" aria-controls="projects">
					<h3>
						<i class="fas fa-folder"></i>
						<p>{{ dd($data['projects'][0]) }}</p>
					</h3>
				</a>
			</li>
		</ul>
		<div class="collapse" id="projects">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link">
						<h3><i class="fas fa-user"></i>
							<p>User Profile</p>
						</h3>
					</a>
				</li>
			</ul>

		</div>
		{{--<ul class="nav">
			<li class="nav-item active">
			</li>
		</ul>
		<ul class="nav">
			<li class="nav-item active">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Dashboard</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>User Profile</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Table List</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Typography</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Icons</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Maps</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Notifications</p>
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>RTL Support</p>
				</a>
			</li>
			<li class="nav-item active-pro ">
				<a class="nav-link">
					<i class="material-icons"></i>
					<p>Upgrade to PRO</p>
				</a>
			</li>
		</ul>--}}
	</div>

@endsection
