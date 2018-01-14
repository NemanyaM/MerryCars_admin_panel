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
                                <label for="body">Date:</label>
                                <input type="text" class="form-control" id="date" name="date" value={{ \Carbon\Carbon::now() }}>
                            </div>

                            <div class="form-group">
                                <label for="title">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                            </div>

                            <div class="form-group">
                                <label for="car">Pick the car: </label>
                                <select class="form-control" name="car">
                                        <option value="">Choose Car..</option>
                                @foreach($cars as $car)
                                        <option value="{{$car->car}}">{{$car->car}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="model">Pick the Model: </label>
                                <select class="form-control" name="model">
                                        <option value="">Choose Model..</option>
                                @foreach($cars as $car)
                                        <option value="{{$car->model}}">{{$car->model}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="plates">Plates: </label>
                                <select class="form-control" name="plates">
                                        <option value="">Choose Plates..</option>
                                @foreach($cars as $car)
                                        <option value="{{$car->plates}}">{{$car->plates}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Time:</label>
                                <input type="text" class="form-control" id="time" name="time" placeholder="time">
                            </div>

                            <div class="form-group">
                                <label for="title">Plus Hours:</label>
                                <input type="text" class="form-control" id="plus_hours" name="plus_hours" placeholder="hours">
                            </div>

                            <div class="form-group">
                                <label for="date">Start date:</label><br>
                                <input id="StartDate" class="nps-date" type="text" name="start_date" value="{{ \Carbon\Carbon::now() }}"><br><br>
                            </div>

                            <div class="form-group">
                                 <label for="date">End date:</label><br>
                                 <input id="EndDate" class="nps-date" type="text" value="{{ \Carbon\Carbon::now() }}" name="end_date"><br><br>
                            </div>

                            <div class="form-group">
                                <label for="title">Address to deliver:</label>
                                <input type="text" class="form-control" id="address_deliver" name="address_deliver" placeholder="address_deliver">
                            </div>

                            <div class="form-group">
                                <label for="title">Address to pickup:</label>
                                <input type="text" class="form-control" name="address_pickup" placeholder="address_deliver">
                            </div>

                            <div class="form-group">
                                <label for="title">E-Mail:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="title">Contact Person:</label>
                                <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="person">
                            </div>

                            <div class="form-group">
                                <label for="title">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                            </div>

                            <div class="form-group">
                                <label for="title">Decorations:</label>
                                <input type="text" class="form-control" id="decorations" name="decorations" placeholder="decorations">
                            </div>

                            <div class="form-group">
                                <label for="title">Decorations price:</label>
                                <input type="text" class="form-control" id="decorations_price" name="decorations_price" placeholder="price">
                            </div>

                            <div class="form-group">
                                <label for="title">Extras:</label>
                                <input type="text" class="form-control" id="extras" name="extras" placeholder="extras">
                            </div>

                            <div class="form-group">
                                <label for="title">Total:</label>
                                <input type="text" class="form-control" id="total_price" name="total_price" placeholder="total">
                            </div>

                            <div class="form-group">
                                <label for="title">Pre Paid:</label>
                                <input type="text" class="form-control" id="pre_price" name="pre_price" placeholder="pre paid">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script>


        $("#StartDate").datepicker({
            dateFormat: "yy-mm-dd",
            minDate:0,
            onSelect: function (date) {
                var dt2 = $('#EndDate');
                var startDate = $(this).datepicker('getDate');
                startDate.setDate(startDate.getDate() + 30);
                dt2.datepicker('option', 'maxDate', startDate);
                $(this).datepicker('option');
            }
        });
        $('#EndDate').datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0
        });

</script>

@endsection
