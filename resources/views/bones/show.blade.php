@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-10">
                            {{$tissueType->name}}
                        </div> 
                        <div class="col">
                            <a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$tissueType->id}}/edit">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    Description: 
                    {{$tissueType->description}}
                    <br>
                    <br>
                    @if(isset($tissueType->tissue_type))
                    Type: 
                    {{$tissueType->tissue_type->name}}
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
