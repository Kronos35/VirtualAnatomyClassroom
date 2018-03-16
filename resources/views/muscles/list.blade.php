@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-10">
                            Muscles' List
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/create">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @foreach ($muscles as $muscle)
                        <div class="row">
                            <div class="col col-md-10">{{$muscle->name}}</div>
                            <div class="col col-md-2">
                                <a href="{{$controllerUrl}}/{{$muscle->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$muscle->id}}">View</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
