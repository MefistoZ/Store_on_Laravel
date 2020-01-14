@extends('base')

@section('title', 'Главная')



@section('slider')

    @include('product/slider')

@endsection

@section('content')
    <form method="GET" action="{{route("index")}}">
        <div class="filters row mb-3 mt-3">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от
                    <input type="text" name="price_from" id="price_from" з size="6" value="{{ request()->price_from}}">
                </label>
                <label for="price_to">До
                    <input type="text" name="price_to" id="price_to" size="6" value="{{ request()->price_to }}">
                </label>
            </div>
            <div class="col-sm-2 col-md-2 custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="hit" id="hit" @if(request()->has('hit')) checked @endif>
                <label class="custom-control-label" for="hit">
                     Хит
                </label>
            </div>
            <div class="col-sm-2 col-md-2 custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="new" id="new" @if(request()->has('new')) checked @endif>
                <label class="custom-control-label" for="new">
                    Новинка
                </label>
            </div>
            <div class="col-sm-2 col-md-2 custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif>
                <label class="custom-control-label" for="recommend">
                    Рекомендуем
                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="{{ route("index") }}" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form>
    <div class="row">
        @foreach($products as $product)
            @include('product/product_card', compact('product'))
        @endforeach
    </div>

@endsection

@section('pagination')

    {{$products->links()}}

@endsection

