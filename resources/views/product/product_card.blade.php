<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
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
        <a href="{{route('product_detail', [$product->category->code, $product])}}"><img class="card-img-top"
                                                                                         height="255px"
                                                                                         src="{{Storage::url($product->image)}}"
                                                                                         alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{route('product_detail', [$product->category->code, $product])}}">{{$product->name}}</a>
            </h4>
            <h5>{{$product->price}} руб. </h5>
            <p class="card-text">{{$product->short_description}}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                <form action="{{route('basket-add', $product)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success ml-1 mr-4" role="button">В корзину</button>
                    <a href="{{route('product_detail', [isset($category) ? $category->code : $product->category->code, $product->code])}}"
                       class="btn btn-success" role="button">Подробнее</a>
                </form>
            </div>
        </div>
    </div>
</div>
