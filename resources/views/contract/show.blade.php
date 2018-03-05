@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$contract->name}} {{$contract->middlename}} {{$contract->lastname}}
                    </div>
                    <div class="panel-body">{{\Carbon\Carbon::parse($contract->date)->toFormattedDateString()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection