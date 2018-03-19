@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-10">
                            Bones' List
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/create">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @foreach ($bones as $bone)
                        <div class="row">
                            <div class="col col-md-10">
                                @if(isset($bone->name))
                                {{$bone->name}}
                                @endif
                            </div>
                            <div class="col col-md-2">
                                @if(isset($bone->id))
                                <a href="{{$controllerUrl}}/{{$bone->id}}/edit">Edit</a>/<a href="{{$controllerUrl}}/{{$bone->id}}">View</a>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
