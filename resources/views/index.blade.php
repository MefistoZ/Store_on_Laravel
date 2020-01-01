@extends('base')

@section('title', 'Главная')


@section('side_category_list')

    @include('categories\side_category_list')

@endsection

@section('slider')

    @include('product/slider')

@endsection

@section('content')
    @foreach($products as $product)
        @include('product/product_card', compact('product'))
    @endforeach
@endsection
