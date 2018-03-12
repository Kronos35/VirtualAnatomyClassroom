@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-10">
                            {{$tissue->name}}
                        </div> 
                        <div class="col">
                            <a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$tissue->id}}/edit">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4> Content: </h4>
                    {{$tissue->content}}
                    <br>
                    <br>
                    <h4>Description: </h4>
                    {{$tissue->description}}
                    <br>
                    <br>
                    <h4>Type: </h4>
                    {{$tissue->tissue_type->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
