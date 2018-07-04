@extends('layouts.app')

@section('content')
    <div class="sidebar" data-color="white" data-background-color="purple">
        <div class="logo">
            <a href="/" class="simple-text logo-normal">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link">
                        <i class="material-icons"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" >
                        <i class="material-icons"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" >
                        <i class="material-icons"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" >
                        <i class="material-icons"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" >
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
                    <a class="nav-link" >
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
                    <a class="nav-link" >
                        <i class="material-icons"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-background">

        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Dashboard<div class="ripple-container"></div></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div>
@endsection
