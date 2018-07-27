@extends('layouts.app')
@include('layouts.sidebar')
@include('layouts.header')

@section('content')
    <div class="sidebar" data-color="white" data-background-color="purple">
        @yield('sidebar')
    </div>
    <div class="main-panel">
        @yield('header')
        <div class="content scrumboard" data-widget="scrumboard">
            <div class="row">
                @forelse($data['storyStates'] as $state)
                    <div class="col-4 scrum-column" data-state-id="{{$state->id}}">
                        <div class="header">
                            <h4 class="title">
                                <span class="fas fa-bars label-default"></span>
                                {{$state->name}}</h4>
                        </div>
                        <div class="body">
                            @forelse($state->getStories() as $story)
                                <div class="card card-chart" data-element="board-story" data-story-id="{{$story->id}}">
                                    <div class="card-header card-header-success row">
                                        <div class="col-10">
                                            <p class="card-title">{{$story->title}}</p>
                                        </div>
                                        <div class="col-2">
                                            <a data-element="expand">
                                                <span class="fas fa-expand"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {!! $story->description !!}
                                    </div>
                                    <div class="card-footer">
                                        <p class="pull-left">{{$story->getAssignedTo()}}</p>
                                        <p class="pull-right">
                                            <a class="options" data-element="expand">
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

@endsection
