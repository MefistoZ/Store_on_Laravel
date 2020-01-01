<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="#">{{$product->name}}</a>
            </h4>
            <h5>{{$product->price}}</h5>
            <p class="card-text">{{$product->short_description}}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                <form action="{{route('basket-add', $product)}}" method="POST">
                    @csrf
            <button type="submit" class="btn btn-success ml-1 mr-4" role="button">В корзину</button>
            <a href="{{route('product_detail', [$product->category->code, $product->code])}}" class="btn btn-success" role="button">Подробнее</a>
                </form>
            </div>
        </div>
    </div>
</div>
