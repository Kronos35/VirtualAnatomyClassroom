@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{$tissue->name}}</h3></div>
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
