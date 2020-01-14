@extends('base')

@section('title', 'Главная')


@section('side_category_list')

    @include('categories\side_category_list')

@endsection

@section('slider')

    @include('product/slider')

@endsection

@section('content')
    <h1>Все товары</h1>
    <form method="GET" action="{{route("index")}}">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от
                    <input type="text" name="price_from" id="price_from"з size="6" value="{{ request()->price_from}}">
                </label>
                <label for="price_to">До
                    <input type="text" name="price_to" id="price_to"  size="6"  value="{{ request()->price_to }}">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> Хит
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> Новинка
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> Рекомендуем
                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="{{ route("index") }}" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form>
    @foreach($products as $product)
        @include('product/product_card', compact('product'))
    @endforeach


@endsection

@section('pagination')

        {{$products->links()}}

@endsection

