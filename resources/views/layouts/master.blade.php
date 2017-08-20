<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Simple - @yield('title')</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    @yield('css')
</head>
<body>


<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">
                    <img src="{{ asset('img/logo.png') }}"/>
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li class="@yield('admin')">
                    <a href="/admin"><i class="fa fa-desktop "></i>Dashboard</a>
                </li>

                <li class="@yield('users')">
                    <a href="/admin/users"><i class="fa fa-user "></i>Users</a>
                </li>

                <li class="@yield('products')">
                    <a href="/admin/products"><i class="fa fa-product-hunt "></i>Products</a>
                </li>

                <li class="@yield('categories')">
                    <a href="/admin/categories"><i class="fa fa-tags "></i>Categories</a>
                </li>

                <li class="@yield('orders')">
                    <a href="/admin/orders"><i class="fa fa-shopping-cart "></i>Orders </a>
                </li>
                <li class="logout">
                    <a href="/admin/logout" style="color:#FFFFFF;"><i class="fa fa-sign-out "></i>LOGOUT</a>
                </li>

            </ul>
        </div>

    </nav>

    <div id="page-wrapper">
        <div id="page-inner">
            @yield('content')
        </div>
    </div>

</div>
<div class="footer">
    <div class="row">
        <div class="col-lg-12">
            &copy; {{ date('Y') }} Simple | Design by:
            <a href="https://www.facebook.com/sagad.salem" style="color:#fff;" target="_blank">Sagad Salem</a>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@yield('js')
</body>
</html>

