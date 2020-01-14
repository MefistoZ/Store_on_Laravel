<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Интернет магазин: @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">NewShop.loc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li @routeactive('index')>
                    <a class="nav-link" href="{{route('index')}}">Гланая
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li @routeactive('categor*')>
                    <a class="nav-link" href="{{route('categories')}}">Все категории</a>
                </li>
                <li @routeactive('basket')>
                    <a class="nav-link" href="{{route('basket')}}">Корзина</a>
                </li>

                @guest
                    <li @routeactive('login')>
                        <a class="nav-link" href="{{route('login')}}">Войти</a>
                    </li>
                @endguest

                @auth
                    @admin
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Панель Администратора</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{route('person.orders.index')}}">Мои заказы</a></li>
                    @endadmin

                    <li class="nav-item"><a class="nav-link" href="{{route('get-logout')}}">Выйти</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">


    @yield('side_category_list')



    @if(session()->has('success'))

        <p class="alert alert-success">{{session()->get('success')}}</p>

    @endif
    @if(session()->has('warning'))

        <p class="alert alert-warning">{{session()->get('warning')}}</p>

    @endif


    @yield('slider')


    @yield('content')


    @yield('pagination')


</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>
