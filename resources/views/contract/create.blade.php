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
                            <div class="row">
                            <div class="form-group col-xs-4">
                                <label for="title">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                            </div>
                            <div class="form-group col-xs-4">
                                <label for="title">Middlename:</label>
                                <input type="text" class="form-control" id="name" name="middlename" placeholder="middlename">
                            </div>
                            <div class="form-group col-xs-4">
                                <label for="title">Surname:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                            </div>
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
                            </div></br>

                            {{--<div class="form-group">--}}
                                {{--<div class="drop-down-wrapper">--}}
                                    {{--<select class="form-control">--}}
                                        {{--<option value="">Цена</option>--}}
                                        {{--<option value="{{$car->our_price_no_season_workday}}">Наша цена/Несезон/Будни</option>--}}
                                        {{--<option value="{{$car->our_price_no_season_weekend}}">Наша цена/Несезон/Выхи</option>--}}
                                        {{--<option value="{{$car->our_price_season_workday}}">Наша цена/Сезон/Будни</option>--}}
                                        {{--<option value="{{$car->our_price_season_weekend}}">Наша цена/Сезон/Выхи</option>--}}
                                        {{--<option value="{{$car->partner_price_no_season_workday}}">Цена парнера/Несезон/Будни</option>--}}
                                        {{--<option value="{{$car->partner_price_no_season_weekend}}">Цена парнера/Несезон/Выхи</option>--}}
                                        {{--<option value="{{$car->partner_price_season_workday}}">Цена парнера/Сезон/Будни</option>--}}
                                        {{--<option value="{{$car->partner_price_season_weekend}}">Цена парнера/Сезон/Выхи</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="title">Car Price:</label>
                                <input type="text" class="form-control" id="choose_car_price" name="choose_car_price" placeholder="car price">
                            </div>

                            <div class="form-group">
                                <label for="title">Amount of hours:</label>
                                <input type="text" class="form-control" id="amount_of_hours" name="amount_of_hours" placeholder="hours">
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
                                <input id="StartDate" class="form-control" type="text" name="start_date" data-date-format="yy-dd-mm"><br><br>
                            </div>

                            <div class="form-group">
                                 <label for="date">End date:</label><br>
                                 <input id="EndDate" class="form-control" type="text" name="end_date" data-date-format="yy-dd-mm"><br><br>
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
    <script>

//        $(document).ready(function(){
//
//            $(".drop-down-wrapper select").on("change",function(){
//                var selVal = $(this).val();
//                $("#choose_car_price").val(selVal);
//            });
//        });

            $(document).ready(function() {
                sum();
                $("#choose_car_price, #amount_of_hours, #plus_hours, #decorations_price, #extras").on("keydown keyup", function() {
                    sum();
                });
            });

            function sum() {
                var choose_car_price = document.getElementById('choose_car_price').value;
                var amount_of_hours = document.getElementById('amount_of_hours').value;
                var plus_hours = document.getElementById('plus_hours').value;
                var decorations_price = document.getElementById('decorations_price').value;
                var extras = document.getElementById('extras').value;
                var result = (parseInt(choose_car_price) * parseInt(amount_of_hours)) + (parseInt(choose_car_price) * parseInt(plus_hours))
                +(parseInt(decorations_price) + parseInt(extras));
                if (!isNaN(result)) {
                    document.getElementById('total_price').value = result;
                }
            }

            $("#StartDate").datepicker({
                dateFormat: 'yy-mm-dd',
                numberOfMonths: 2,
                onSelect: function(selected) {
                    $("#EndDate").datepicker("option","minDate", selected)
                }
            });
            $("#EndDate").datepicker({
                dateFormat: 'yy-mm-dd',
                numberOfMonths: 2,
                onSelect: function(selected) {
                    $("#StartDate").datepicker("option","maxDate", selected)
                }
            });

    </script>

@endsection
