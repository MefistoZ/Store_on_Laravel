@extends('base')

@section('content')
    <div class="mt-5 mt-5">
        <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
        <div class="card">
            <div class="labels">
                @if($product->isNew())
                    <span class="badge badge-success">Новинка</span>
                @endif
                @if($product->isRecommend())
                    <span class="badge badge-warning">Рекомендуемые</span>
                @endif
                @if($product->isHit())
                    <span class="badge badge-danger">Хит продаж</span>
                @endif

            </div>
            <div class="card-body">
                <h3 class="card-title">{{$product->name}}</h3>
                <h4>{{$product->price}} Руб.</h4>
                <p class="card-text"></p>
            </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
            <div class="card-header">
                Product Reviews
            </div>
            <div class="card-body">
                <p>{{$product->description}}</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>

            </div>
        </div>
    </div>
    <!-- /.card -->

@endsection
