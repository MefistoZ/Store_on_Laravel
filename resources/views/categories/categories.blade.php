@extends('base')

@section('title', 'Список категорий')

<!-- Page Content -->
@section('content')
    @foreach($categories as $category)
        <div class="col-lg-12 text-center">
            <h1><a href="{{route('category', $category->code)}}">{{$category->name}}</a></h1>
            <p class="lead">{{$category->description}}</p>
            <ul class="list-unstyled">
                <li>Pub_date</li>
            </ul>
            <ul class="list-unstyled">
                <li><img height="200px" src="{{Storage::url($category->image)}}" alt=""></li>
            </ul>
            <hr>
        </div>
    @endforeach
@endsection

