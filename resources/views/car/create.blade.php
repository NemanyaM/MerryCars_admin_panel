@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Car</div>

                    <div class="panel-body">
                        <form action="/car" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Partner:</label>
                                <input type="text" class="form-control" id="partner" name="partner" placeholder="Partner..">
                            </div>

                            <div class="form-group">
                                <label for="title">Car:</label>
                                <input type="text" class="form-control" id="car" name="car" placeholder="Car..">
                            </div>

                            <div class="form-group">
                                <label for="title">Model:</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="Model...">
                            </div>

                            <div class="form-group">
                                <label for="body">Plates:</label>
                                <input type="text" class="form-control" id="plates" name="plates" placeholder="Plates..">
                            </div>

                            <div class="form-group">
                                <label for="title">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="location">
                            </div>

                            <div class="form-group">
                                <label for="title">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price..">
                            </div>

                            <div class="form-group">
                                <label for="title">Price per hour:</label>
                                <input type="text" class="form-control" id="price_per_hour" name="price_per_hour" placeholder="Price per hour">
                            </div>

                            <div class="form-group">
                                <label for="title">Condition:</label>
                                <textarea class="form-control" id="condition" name="condition" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Start Date:</label>
                                <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Start date..">
                            </div>

                            <div class="form-group">
                                <label for="title">End Date:</label>
                                <input type="text" class="form-control" id="end_date" name="end_date" placeholder="end_date">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
