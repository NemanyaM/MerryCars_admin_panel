@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить Новую Машину</div>

                    <div class="panel-body">
                        <form action="/car" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Автомобиль:</label>
                                <input type="text" class="form-control" id="car" name="car" placeholder="Автомобиль..">
                            </div>

                            <div class="form-group">
                                <label for="title">Модель:</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="Модель...">
                            </div>

                            <div class="form-group">
                                <label for="body">Номер:</label>
                                <input type="text" class="form-control" id="plates" name="plates" placeholder="Номер..">
                            </div>

                            <div class="form-group">
                                <label for="title">Наша цена/Несезон/Будни:</label>
                                <input type="text" class="form-control" id="our_price_no_season_workday" name="our_price_no_season_workday" placeholder="Наша цена/Несезон/Будни..">
                            </div>

                            <div class="form-group">
                                <label for="title">Наша цена/Несезон/выхи:</label>
                                <input type="text" class="form-control" id="our_price_no_season_weekend" name="our_price_no_season_weekend" placeholder="Наша цена/Несезон/выхи..">
                            </div>

                            <div class="form-group">
                                <label for="title">Наша цена/Сезон/Будни:</label>
                                <input type="text" class="form-control" id="our_price_season_workday" name="our_price_season_workday" placeholder="Наша цена/Сезон/Будни..">
                            </div>

                            <div class="form-group">
                                <label for="title">Наша цена/Сезон/выхи:</label>
                                <input type="text" class="form-control" id="our_price_season_weekend" name="our_price_season_weekend" placeholder="Наша цена/Сезон/выхи..">
                            </div>

                            <div class="form-group">
                                <label for="title">Цена партнера/Несезон/будни:</label>
                                <input type="text" class="form-control" id="partner_price_no_season_workday" name="partner_price_no_season_workday" placeholder="Цена парнера/Несезон/будни..">
                            </div>

                            <div class="form-group">
                                <label for="title">Цена партнера/Несезон/выхи:</label>
                                <input type="text" class="form-control" id="partner_price_no_season_weekend" name="partner_price_no_season_weekend" placeholder="Цена парнера/Несезон/выхи..">
                            </div>

                            <div class="form-group">
                                <label for="title">Цена партнера/Сезон/будни:</label>
                                <input type="text" class="form-control" id="partner_price_season_workday" name="partner_price_season_workday" placeholder="Цена парнера/Сезон/будни..">
                            </div>

                            <div class="form-group">
                                <label for="title">Цена партнера/Сезон/выхи:</label>
                                <input type="text" class="form-control" id="partner_price_season_weekend" name="partner_price_season_weekend" placeholder="Цена парнера/Сезон/выхи..">
                            </div>

                            <div class="form-group">
                                <label for="title">Владелец:</label>
                                <input type="text" class="form-control" id="owner" name="owner" placeholder="Владелец..">
                            </div>

                            <div class="form-group">
                                <label for="title">Телефон:</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон...">
                            </div>

                            <div class="form-group">
                                <label for="title">Банк Аккаунт:</label>
                                <input type="text" class="form-control" id="bank_account" name="bank_account" placeholder="Банк Аккаунт..">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
