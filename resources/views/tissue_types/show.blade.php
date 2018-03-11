@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div class="row"><div class="col col-md-10"><h3>{{$tissueType->name}}</h3></div> <div class="col"><a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$tissueType->id}}/edit">Edit</a></div></div></div>
                <div class="card-body">
                    <h4>Description: </h4>
                    {{$tissueType->description}}
                    <br>
                    <br>
                    <h4>Type: </h4>
                    @if(isset($tissueType->tissue_type->name))
                    {{$tissueType->tissue_type->name}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
