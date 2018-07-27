@section('header')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="{{route('home')}}">
                    <span class="fas fa-home"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                    <span class="bmd-form-group">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                              <div class="ripple-container">
                                  <span class="fas fa-search"></span>
                              </div>
                            </button>
                        </div>
                    </span>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/settings') }}">
                            <i class="material-icons">
                                <span class="fas fa-cogs"></span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="accountMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">
                                <span class="fas fa-user"></span>
                            </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountMenu">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="{{route('logout')}}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection
