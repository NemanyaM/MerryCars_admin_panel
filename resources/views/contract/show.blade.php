@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#"> {{ $contract->id }}</a>
                        {{$contract->name}}
                    </div>
                    <div class="panel-body">{{$contract->date}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection