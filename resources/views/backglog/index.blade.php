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
                        <h4 class="card-title">Backglog</h4>
                    </div>
                    <br>
                    <div class="card-body">
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
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['stories'] as $story)
                                        <tr>
                                            <td>{{ $story->getStoryId() }}</td>
                                            <td>{!! $story->getTitle() !!}</td>
                                            <td>{{ $story->getShortDescription() }}</td>
                                            <td>{!! $story->getCreatedBy() !!} </td>
                                            <td>{!! $story->getAssignedTo() !!} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
