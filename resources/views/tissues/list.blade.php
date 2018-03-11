@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tissue's list</div>

                <div class="card-body">

                    @foreach ($tissues as $tissue)
                        <div class="row">
                            <div class="col col-md-10">{{$tissue->name}}</div>
                            <div class="col col-md-2"><a href="{{$controllerUrl}}/{{$tissue->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$tissue->id}}">View</a></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
