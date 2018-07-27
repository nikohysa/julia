@extends('layouts.app')
@include('layouts.sidebar')
@include('layouts.header')

@section('content')
    {{--<div class="sidebar" data-color="white" data-background-color="purple">
        @yield('sidebar')
    </div>--}}
    <div class="main-panel" style="width: 100%">
        @yield('header')
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Backglog</h4>
                    </div>
                    <br>
                    <div class="card-body" data-element="backlog">
                        <a class="btn btn-success pull-right" href="{{url('stories/create')}}">
                            <span class="fas fa-plus"></span>
                            Create new Story
                        </a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>Story ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Assigned to</th>
                                    <th>Status</th>
                                    <th>Sprint</th>
                                    <th>Project</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['stories'] as $story)
                                        <tr data-element="story" data-element-id="{{$story->id}}">
                                            <td>{{ $story->getStoryId() }}</td>
                                            <td>{!! $story->getTitle() !!}</td>
                                            <td>{{ $story->getShortDescription() }}</td>
                                            <td>{!! $story->getCreatedBy() !!} </td>
                                            <td>
                                                <select class="custom-select" data-control="assignedTo">
                                                    <option selected value="0">--</option>
                                                    @foreach($data['users'] as $user)
                                                        <option value="{{$user->id}}"
                                                        @if($story->user_id == $user->id)
                                                            selected="selected"
                                                                @endif
                                                        >{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" data-control="status">
                                                    <option selected value="0">--</option>
                                                    @foreach($data['states'] as $state)
                                                        <option value="{{$state->id}}"
                                                            @if($state->id == $story->getState()['id'])
                                                                selected="selected"
                                                            @endif>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" data-control="sprint">
                                                    <option selected value="0">--</option>
                                                    @foreach($data['sprints'] as $sprint)
                                                        <option value="{{$sprint->id}}"
                                                            @if($sprint->id == $story->sprint_id)
                                                                selected="selected"
                                                            @endif>{{$sprint->name}}</option>

                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" data-control="project">
                                                    <option selected value="0">--</option>
                                                    @foreach($data['projects'] as $project)
                                                        <option value="{{$project->id}}"
                                                            @if($sprint->id == $story->project_id)
                                                                selected="selected"
                                                            @endif>{{$project->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if($data['stories']->isEmpty())
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <h4 class="badge-warning badge">
                                            <label>There are currently no sprints, please create at least one</label>
                                        </h4>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
