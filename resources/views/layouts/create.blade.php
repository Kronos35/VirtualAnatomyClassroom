@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if( isset($record) )
                {{ Form::model($record, ['method' => 'PATCH', 'url' => ["{$controllerUrl}/{$record->id}"],'id' => 'create']) }}
            @else
                {{ Form::open(['url' => $controllerUrl,'id' => 'create']) }}
            @endif
            @csrf
            <div class="card">
                <div class="card-header">
                    @yield('card-header')
                </div>
                <div class="card-body">
                    @yield('body')
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
