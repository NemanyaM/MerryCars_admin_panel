@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Finance</div>

                    <div class="panel-body">
                        <form action="/finances/{{$finance->id}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="body">За аренду авто:</label>
                                <input type="text" class="form-control" id="for_rent" name="for_rent"
                                       value="{{
                                       ($finance->contract->amount_of_hours * $finance->contract->choose_car_price)
                                       + ($finance->contract->plus_hours * $finance->contract->choose_car_price)}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Нам за украшения:</label>
                                <input type="text" class="form-control" id="us_for_decorations" name="us_for_decorations"
                                       value="{{$finance->contract->decorations_price}}">
                            </div>

                            <div class="form-group">
                                <label for="title">Нам с допуслуг:</label>
                                <input type="text" class="form-control" id="us_for_extras" name="us_for_extras"
                                       value="{{$finance->contract->extras}}">
                            </div>

                            <div class="form-group">
                                <label for="date">Итого:</label><br>
                                <input id="sum" class="form-control" type="text" name="sum"
                                       value="{{$finance->sum}}">
                            </div>

                            <div class="form-group">
                                <label for="date">Расходы на водителя:</label><br>
                                <input id="expenses_on_driver" class="form-control" type="text" name="expenses_on_driver">
                            </div>

                            <div class="form-group">
                                <label for="title">водитель:</label>
                                <input type="text" class="form-control" id="driver" name="driver">
                            </div>

                            <div class="form-group">
                                <label for="title">Мойка:</label>
                                <input type="text" class="form-control" name="car_wash">
                            </div>

                            <div class="form-group">
                                <label for="title">Бензин:</label>
                                <input type="text" class="form-control" id="gas" name="gas" value="{{$finance->gas}}">
                            </div>

                            <div class="form-group">
                                <label for="title">Владельцу авто:</label>
                                <input type="text" class="form-control" id="to_car_owner" name="to_car_owner">
                            </div>

                            <div class="form-group">
                                <label for="title">Контрагентам:</label>
                                <input type="text" class="form-control" id="to_contractor" name="to_contractor">
                            </div>

                            <div class="form-group">
                                <label for="title">За украшения:</label>
                                <input type="text" class="form-control" id="for_decorations" name="for_decorations">
                            </div>

                            <div class="form-group">
                                <label for="title">Переводы наши:</label>
                                <input type="text" class="form-control" id="our_transfers" name="our_transfers">
                            </div>

                            <div class="form-group">
                                <label for="title">Партнерам:</label>
                                <input type="text" class="form-control" id="sum_to_partners" name="sum_to_partners">
                            </div>

                            <div class="form-group">
                                <label for="title">Мерри Карс:</label>
                                <input type="text" class="form-control" id="sum_to_us" name="sum_to_us">
                            </div>

                            <div class="form-group">
                                <label for="title">Насте:</label>
                                <input type="text" class="form-control" id="to_nastya" name="to_nastya">
                            </div>

                            <div class="form-group">
                                <label for="title">Фирме:</label>
                                <input type="text" class="form-control" id="to_company" name="to_company">
                            </div>

                            <div class="form-group">
                                <label for="title">Автомобиль:</label>
                                <input type="text" class="form-control" id="car" name="car" value="{{$finance->contract->car}}">
                            </div>

                            <div class="form-group">
                                <label for="title">Дата мероприятия:</label>
                                <input type="text" class="form-control" id="event_date" name="event_date" value="{{$finance->event_date}}" data-date-format="yy-dd-mm">
                            </div>

                            <div class="form-group">
                                <label for="title">Дата резерва:</label>
                                <input type="text" class="form-control" id="reserve_date" name="reserve_date" value="{{$finance->reserve_date}}" data-date-format="yy-dd-mm">
                            </div>

                            <div class="form-group">
                                <label for="title">Приход с наших авто:</label>
                                <input type="text" class="form-control" id="our_car_earnings" name="our_car_earnings">
                            </div>

                            <div class="form-group">
                                <label for="title">Приход от партнеров:</label>
                                <input type="text" class="form-control" id="partner_car_earnings" name="partner_car_earnings">
                            </div>

                            <div class="form-group">
                                <label for="title">Комментарии:</label>
                                <textarea class="form-control" rows="5" name="comments"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>

@endsection
