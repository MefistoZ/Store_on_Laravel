@extends('base')

@section('title', 'Корзина')

@section('content')

    <div class="container justify-content-center">
        <div class="panel">
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
                                    <button type="submit" class="btn btn-danger"><span class="glyphican glyphican-minus"
                                                                                        aria-hidden="true"></span>
                                    </button>
                                    @csrf
                                </form>
                                <form action="{{route('basket-add', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-success"><span class="glyphican glyphican-plus"
                                                                                        aria-hidden="true"></span>
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
                <a href="#" type="button" class="btn btn-success">Оформиь заказ</a>
            </div>
        </div>
    </div>
@endsection
