@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a New Contract</div>

                    <div class="panel-body">
                        <form action="/contract" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                            </div>

                            <div class="form-group">
                                <label for="title">E-Mail:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="title">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                            </div>

                            <div class="form-group">
                                <label for="body">Date:</label>
                                <input type="text" class="form-control" id="date" name="date" value={{ \Carbon\Carbon::now() }}>
                            </div>

                            <div class="form-group">
                                <label for="title">Partner:</label>
                                <input type="text" class="form-control" id="partner" name="partner" placeholder="partner">
                            </div>

                            <div class="form-group">
                                <label for="title">Car:</label>
                                <input type="text" class="form-control" id="car" name="car" placeholder="car">
                            </div>

                            <div class="form-group">
                                <label for="title">Model:</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="model">
                            </div>

                            <div class="form-group">
                                <label for="title">Address to deliver:</label>
                                <input type="text" class="form-control" id="address_deliver" name="address_deliver" placeholder="address_deliver">
                            </div>

                            <div class="form-group">
                                <label for="title">Addres to Pickup:</label>
                                <input type="text" class="form-control" id="address_pickup" name="address_pickup" placeholder="address_pickup">
                            </div>

                            <div class="form-group">
                                <label for="title">Discount:</label>
                                <input type="text" class="form-control" id="discount" name="discount" placeholder="discount">
                            </div>

                            <div class="form-group">
                                <label for="title">Decorations:</label>
                                <input type="text" class="form-control" id="decorations" name="decorations" placeholder="decorations">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection