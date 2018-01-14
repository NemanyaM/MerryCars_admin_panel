@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cars</div>

                    <div class="panel-body">
                        @foreach ($car as $vehicle)
                            <article>
                                <h4>
                                    PARTNER:&nbsp;{{$vehicle->partner}}<br>
                                </h4>
                                <div class="body">
                                    NAME:&nbsp;{{$vehicle->car}}&nbsp;&nbsp;&nbsp;
                                    MODEL:&nbsp;{{$vehicle->model}}&nbsp;&nbsp;&nbsp;
                                    PLATES:&nbsp;{{$vehicle->plates}}
                                </div>
                            </article>
                            <hr/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

