@extends('layouts.app')
@include('layouts.sidebar')
@include('layouts.header')

@section('content')
    <div class="sidebar" data-color="white" data-background-color="purple">
        @yield('sidebar')
    </div>
    <div class="main-panel">
        @yield('header')
        <div class="content scrumboard">
            <div class="row">
                @forelse($data['storyStates'] as $state)
                    <div class="col-3 scrum-column">
                        <div class="header">
                            <h4 class="title">
                                <span class="fas fa-bars label-default"></span>
                                {{$state->name}}</h4>
                        </div>
                        <div class="body">
                            @forelse($state->getStories() as $story)
                                <div class="card card-chart">
                                    <div class="card-header card-header-success row">
                                        <div class="col-10">
                                            <p class="card-title">{{$story->title}}</p>
                                        </div>
                                        <div class="col-2">

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {!! $story->description !!}
                                    </div>
                                    <div class="card-footer">
                                        <p class="pull-left">{{$story->getAssignedTo()}}</p>
                                        <p class="pull-right">
                                            <a class="options" href="#">
                                                <span class="fas fa-expand"></span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @empty
                                No Stories: FIXME STYLIZE ME
                            @endforelse
                        </div>
                    </div>
                @empty
                    NO STORY STATES: FIXME
                @endforelse
            </div>
        </div>
    </div>
    {{--<div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Hi

                        <div class="ripple-container"></div>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
              <span class="bmd-form-group"><div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div></span>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>--}}
@endsection
