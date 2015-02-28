<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новостной портал Калуги</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="/js/less.min.js"></script>
    <link rel="stylesheet/less" type="text/css" href="/less/style.less">
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Новости Калуги.рф</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            @section('top_nav')
                <ul class="nav navbar-nav">
                    <li><a href="{{ asset('') }}">Главная</a></li>
                    @foreach ($data['page_for_top_nav'] as $category)

                        @if (!empty($data['curr_category']) && $category->id == $data['curr_category']->id)
                            <li class="active"><a href="{{ asset($category->alias) }}">{{ $category->name }}</a></li>
                        @else
                            <li><a href="{{ asset($category->alias) }}">{{ $category->name }}</a></li>
                        @endif


                    @endforeach
                </ul>
            @show

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Вход</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<nav class="navbar navbar-default" role="navigation" id="second-navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        @section('second_nav')
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav nav-tabs">
                    @if(!empty($data['curr_category']))
                        @foreach($data['second_category_list'] as $category)
                            <li><a href="{{ asset($data['curr_category']->alias.'/'.$category->alias) }}">{{ $category->name }}</a></li>
                        @endforeach
                    @endif


                </ul>

            </div><!-- /.navbar-collapse -->
        @show
    </div><!-- /.container-fluid -->
</nav>


<div class="container" id="content">
    <div class="row" id="name-header">
        <div class="col-md-8 col-md-offset-1">
            <h1>
                <span>{{ $data['curr_category']->name or "Калуга" }}</span>



            </h1>
            <h5>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </h5>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9 col-xs-6" role="main">

            <div class="row global-category">
                <div class="col-md-6 col-xs-6">
                    <img src="http://новости-калуга.рф/wp-content/uploads/2015/01/%D0%B0%D1%84%D0%B8%D1%88%D0%B0_300x200.jpg" width="100%" alt="" class="img-rounded">
                </div>
                <div class="col-md-6 col-xs-6">

                    <a>
                        <div class="h3">Афиша</div>
                    </a>
                    <div class="description">
                        <?=action('HomeController@index');?>
                    </div>

                    <a class="btn btn-default" href="#" role="button">Кино</a>
                    <a class="btn btn-default" href="#" role="button">Театры</a>
                    <a class="btn btn-default" href="#" role="button">Вечеринки</a>
                    <a class="btn btn-default" href="#" role="button">Выставки</a>

                </div>
            </div>


        </div>
        <div class="col-md-3 sidebar-offcanvas">
            <div class="row">
                <div class="col-md-12 col-xs-6">
                    <ul class="nav nav-pills nav-stacked" id="right-nav">
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span>Медицина</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span>Криминал</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span>Медицина</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span>Криминал</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span>Медицина</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span>Криминал</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
