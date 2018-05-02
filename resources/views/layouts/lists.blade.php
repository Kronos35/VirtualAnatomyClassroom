@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-10">
                            @yield('card-header')
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @yield('body')
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary float-md-right" href="{{ URL::to($controllerUrl) }}/create">Create</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
