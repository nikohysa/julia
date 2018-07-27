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
                        <h4 class="card-title">Update story <i>({{$data['story']->getTitle()}})</i></h4>
                    </div>
                    <br>
                    <div class="card-body">
                        <form action="{{url('stories/create')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row form-group bmd-form-group">
                                <div class="col-6">
                                    <label class="bmd-label-floating">Title</label>
                                    <input type="text" class="form-control" name="title"value="{{$data['story']->getTitle()}}">
                                </div>
                                <div class="col-6"></div>
                            </div>
                            <br>
                            <div class="row-fluid">
                                <label>Description</label>
                                <textarea name="description">{{$data['story']->description}}</textarea>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label>Project</label>
                                    <div class="input-group">
                                        <select class="custom-select" name="project">
                                            <option disabled="" selected>--</option>
                                            @foreach($data['projects'] as $project)
                                                <option value="{{$project->id}}">{{$project->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label>Sprint</label>
                                    <div class="input-group">
                                        <select class="custom-select" name="sprint">
                                            <option selected="" disabled="">--</option>
                                            @foreach($data['sprints'] as $sprint)
                                                <option value="{{$sprint->id}}">{{$sprint->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label>Assign to</label>
                                    <div class="input-group">
                                        <select class="custom-select" name="user">
                                            <option selected="" disabled="">--</option>
                                            @foreach($data['users'] as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">
                                Create Story
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
