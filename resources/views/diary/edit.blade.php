@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Отредактировать Дневник Заказов</div>

                    <div class="panel-body">
                        <form action="/diaries/{{$diary->id}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="title">Дата Резерва</label>
                                <input type="text" class="form-control" name="reservation_date" value="{{$diary->reservation_date}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Дата Мероприятия</label>
                                <input type="text" class="form-control" name="event_date" value="{{$diary->event_date}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Автомобиль</label>
                                <input type="text" class="form-control" name="car" value="{{$diary->contract->car}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Количество Часов</label>
                                <input type="text" class="form-control" name="hours_amount" value="{{$diary->hours_amount}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Подача, Час</label>
                                <input type="text" class="form-control" name="hours_to_deliver" value="{{$diary->hours_to_deliver}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Украшения</label>
                                <input type="text" class="form-control" name="decorations" value="{{$diary->decorations}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Дополнительные Услуги</label>
                                <input type="text" class="form-control" name="extras" value="{{$diary->extras}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Стоимость Часа</label>
                                <input type="text" class="form-control" name="price_per_hour" value="{{$diary->price_per_hour}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Итого</label>
                                <input type="text" class="form-control" name="sum" value="{{$diary->sum}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Подача К</label>
                                <input type="text" class="form-control" name="time_to_deliver" value="{{$diary->time_to_deliver}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Адрес Подачи</label>
                                <input type="text" class="form-control" name="address_to_deliver" value="{{$diary->address_to_deliver}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Взнос Клиента</label>
                                <input type="text" class="form-control" name="pre_paid" value="{{$diary->pre_paid}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Перечислить Владельцу Авто</label>
                                <input type="text" class="form-control" name="amount_to_pay_owner" value="{{$diary->amount_to_pay_owner}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Перечислено</label>
                                <input type="text" class="form-control" name="paid" value="{{$diary->paid}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Перечислить Контрагенту</label>
                                <input type="text" class="form-control" name="amount_to_pay_contractor" value="{{$diary->amount_to_pay_contractor}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Оповещение</label>
                                <input type="text" class="form-control" name="notification" value="{{$diary->notification}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Как Узнали О Нас</label>
                                <input type="text" class="form-control" name="question" value="{{$diary->question}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Комментарии</label>
                                <textarea class="form-control" rows="5" name="comments">{{$diary->comments}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>

@endsection
