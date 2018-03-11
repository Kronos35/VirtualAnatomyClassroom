@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-10">
                            <h3>Bones' List</h3>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/create">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @foreach ($bones as $bone)
                        <div class="row">
                            <div class="col col-md-10">{{$bone->name}}</div>
                            <div class="col col-md-2">
                                <a href="{{$controllerUrl}}/{{$bone->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$bone->id}}">View</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
