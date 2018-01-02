@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contracts</div>

                    <div class="panel-body">
                        @foreach ($contracts as $contract)
                            <article>
                                <h4>
                                    <a href="{{ $contract->path() }}">
                                        {{$contract->created_at->diffForHumans()}}
                                    </a>
                                </h4>
                                <div class="body">{{$contract->name}}</div>
                            </article>
                            <hr/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection