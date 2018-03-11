@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tissue Type's List</div>

                <div class="card-body">

                    @foreach ($tissueTypes as $tissueType)
                        <div class="row">
                            <div class="col col-md-10">{{$tissueType->name}}</div>
                            <div class="col col-md-2"><a href="{{$controllerUrl}}/{{$tissueType->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$tissueType->id}}">View</a></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
