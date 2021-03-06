@extends('auth.layouts.base')

@isset($product)
    @section('title', 'Редактировать категорию ' . $product->name)
@else
    @section('title', 'Создать категорию')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать Товар <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить Товар</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName'=>'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @isset($product)
                                        @if($product->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="short_description" class="col-sm-2 col-form-label"><b>Краткое</b> описание товара:
                    </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName'=>'short_description'])
                        <textarea name="short_description" id="short_description" cols="72"
                                  rows="7">@isset($product){{ $product->short_description }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label"><b>Полное</b> описание товара: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName'=>'description'])
                        <textarea name="description" id="description" cols="72"
                                  rows="7">@isset($product){{ $product->description }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName'=>'price'])
                        <input type="text" class="form-control" name="price" id="price"
                               value="@isset($product){{ $product->price }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        @include('auth.layouts.error', ['fieldName'=>'image'])
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>
                @foreach([
                 'hit'=>'Хит',
                 'new'=>'Новинка',
                 'recommend'=>'Рекомендуемые',
                 ] as $field => $title)
                    <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">{{$title}}: </label>
                        <div class="col-sm-6">
                            <input type="checkbox" class="form-control" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field === 1)
                                   checked="checked"
                                @endif
                            >
                        </div>
                    </div>
                @endforeach
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
