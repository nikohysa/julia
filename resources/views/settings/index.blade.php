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
            <div class="row">
                <div class="card">
                    <div class="card-title">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Story states</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @forelse($data['storyStates'] as $state)
                            <div class="table-responsive">
                                <form method="post" style="display: none" action="{{url(sprintf('settings/storyStates/delete/%s',$state->id))}}"
                                      id="form{{$state->id}}">
                                    {{ csrf_field() }}
                                </form>
                                <table class="table">
                                    <thead class="text-primary"></thead>
                                    <tbody>
                                    <tr>
                                        {{--FIXME: add arrows--}}
                                        <td>{{$state->name}}</td>
                                        <td width="30"><a href="{{url(sprintf('settings/storyStates/%s',$state->id))}}"><span class="fas fa-edit"></span></a>
                                        </td>
                                        <td width="30"><a href="#" onclick="document.getElementById('form{{$state->id}}').submit()"> <span
                                                        class="fas fa-times"></span> </a></td>
                                        <td width="30"><a href="#"><span class="fas fa-arrow-up"></span></a></td>
                                        <td width="30"><a href="#"><span class="fas fa-arrow-down"></span> </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @empty
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <h4 class="badge-warning badge">
                                        <label>There are currently no states, please create at least one</label>
                                    </h4>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        @endforelse
                        <br>
                        <a class="btn btn-success pull-right" href="{{url('/settings/storyStates/create')}}">
                            <i class="fas fa-plus"></i>
                            Add new story state
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
