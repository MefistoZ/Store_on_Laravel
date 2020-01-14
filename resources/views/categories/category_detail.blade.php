@extends('base')

@section('title', 'Категория: '.$category->name)

@section('content')

    <h1>Категория: {{$category->name}}<br> {{$category->products->count()}}</h1>
    <h2>{{$category->description}}</h2>

    <div class="row">

        @foreach($category->products()->with('category')->get() as $product)
            @include('product/product_card', compact('product'))
        @endforeach

    </div>
@endsection
