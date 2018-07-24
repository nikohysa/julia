@section('sidebar')
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link active btn-default" href="{{url('home')}}">
                    <h3>
                        <i class="fas fa-clipboard-list"></i>
                        <p>Scrumboard</p>
                    </h3>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projects" role="button" aria-expanded="false"
                   data-toggle="collapse" aria-controls="projects">
                    <h3>
                        <i class="fas fa-folder"></i>
                        <i class="fas fa-folder-open"></i>
                        <p>Projects</p>
                    </h3>
                </a>
            </li>
            <div class="collapse" id="projects">
                @foreach($data['projects'] as $project)
                    <li class="nav-item">
                        <a class="nav-link">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                    <span class="form-check-sign"><span class="check"></span></span>
                                    <span class="fas fa-archive"></span>
                                    {{$project->name}}
                                </label>
                            </div>
                        </a>
                    </li>
                @endforeach
                @if( $data['projects']->isEmpty())
                    <li class="nav-item">
                        <a class="nav-link disabled">There are no projects currently</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('projects/create') }}">
                        <i class="fas fa-plus"></i>
                        Create new project
                    </a>
                </li>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{url('backglog')}}">
                    <h3>
                        <i class="fas fa-clipboard-list"></i>
                        <p>Backglog</p>
                    </h3>
                </a>
            </li>
        </ul>
    </div>
@endsection
