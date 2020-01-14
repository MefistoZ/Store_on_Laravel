@extends('base')

@section('title', 'Оформить заказ')

@section('content')

    <div class="container mt-5">
        <h1>Подтвердите заказ:</h1>
        <div>
            <p>Общая стоимость заказа: <b>{{$order->getFullPrice()}} руб. </b></p>
            <form action="{{route('basket-confirm')}}" method="POST">
                <div>
                    <br>
                    <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>
                        <div class="form-group">
                            <label for="name" class="control-label"><b>Имя:</b></label>
                                <input type="text" name="name" id="name" value="" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label"><b>Номер телефона:</b></label>
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success" value="Подтвердить заказ">

                    <br>
                    @csrf
                </div>
            </form>
        </div>
    </div>
@endsection
