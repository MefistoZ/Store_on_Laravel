@extends('base')

@section('title', 'Корзина')

@section('content')

    <h1 class="">Корзина</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Стоимость</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->products as $product)
            <tr>
                <td><a href="{{route('product_detail', [$product->category->code, $product->code])}} ">
                        <img src="" alt="">
                        {{$product->name}}
                    </a>
                </td>
                <td><span class="badge">{{$product->pivot->count}}</span>
                    <div class="btn-group">

                        <form action="{{route('basket-remove', $product)}}" method="POST">
                            <button type="submit" class="btn btn-danger">
                            </button>
                            @csrf
                        </form>

                        <form action="{{route('basket-add', $product)}}" method="POST">
                            <button type="submit" class="btn btn-success">
                            </button>
                            @csrf
                        </form>

                    </div>
                </td>
                <td>{{$product->price}} руб.</td>
                <td>{{$product->getPriceForCount()}} руб.</td>
                @endforeach

            </tr>
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>{{$order->getFullPrice()}} руб.</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div class="btn-group pull-right" role="group">
        <a href="{{route('basket-place')}}" type="button" class="btn btn-success">Оформить заказ</a>
    </div>

@endsection
