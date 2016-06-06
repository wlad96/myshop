<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        
        <!--for Materialize-->
            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="/template/css/materialize.css"  media="screen,projection"/>
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--/for Materialize-->
                
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/images/home/favicon.ico" rel="icon" type="image/x-icon" />
        
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">      
    </head><!--/head-->

    <body>       
        <div class="page-wrapper">
             <header id="header"><!--header-->
                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <!--<div class="col-sm-4"></div>-->
                            <div class="col-sm-12">
                                <div class="shop-menu pull-left">
                                    <ul class="nav navbar-nav navbar-fixed">    
                                     <li><a href="#"><i class="fa fa-search"></i></a></li>
                                            <li>
                                                <form class="navbar-search pull-left">
                                                    <input type="text" name="referal" placeholder="Поиск" value="" class="who"  autocomplete="off" >
                                                    <ul id="search_result"></ul>
                                                </form>
                                            </li>
                                    </ul>        
                                </div>
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav navbar-fixed">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> Корзина 
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                            <li><a href="/user/register/"><i class="fa fa-check-square-o"></i> Регистрация</a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->

                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                              
                                <!-- Dropdown Structure -->
                                <ul id="dropdown1" class="dropdown-content">
                                  <li><a href="/catalog/">Каталог товаров</a></li>
                                  <li><a href="/cart/">Корзина</a></li> 
                                </ul>
                                <nav>
                                  <div class="nav-wrapper">
                                    <div class="logo pull-left">
                                        <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                                    </div>
                                    <ul class="right hide-on-med-and-down">
                                        <!-- Dropdown Trigger -->
                                      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Каталог<i class="material-icons right">arrow_drop_down</i></a></li>
                                      <li><a href="/choice/">Подбор ноутбука</a></li>  
                                      <li><a href="/about/">О магазине</a></li>
                                      <li><a href="/contacts/">Контакты</a></li>                                      
                                    </ul>
                                  </div>
                                </nav>
                            </div>
                            
                        </div>
                    </div>            
                </div><!--/header-bottom-->


            </header><!--/header-->