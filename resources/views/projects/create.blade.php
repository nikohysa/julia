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
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create new project</h4>
                    </div>
                    <br>
                    <div class="card-body">
                        <form action="{{url('projects/create')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row form-group bmd-form-group">
                                <div class="col-6">
                                    <label class="bmd-label-floating">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-6"></div>
                            </div>
                            <div class="row"></div>
                            <button type="submit" class="btn btn-primary pull-right">
                                Create Project
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
