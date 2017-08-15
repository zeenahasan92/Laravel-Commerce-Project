
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="text-uppercase">

<div class="container">
    <div class="masthead">
        <h3 class="text-muted">
            CodeLab Market
        </h3>
        <nav>
            <ul class="nav nav-justified">
                <li class="@yield('home')"><a href="/">Home</a></li>
                <li class="@yield('customers')" ><a href="/customers">Customers</a></li>
                <li class="@yield('products')"><a href="/products">Products</a></li>
                <li class="@yield('categories')"><a href="/categories">Categories</a></li>
                <li class="@yield('orders')"><a href="/orders">Orders</a></li>
                <li class="@yield('about')"><a href="/about">About Us</a></li>
                <li class="@yield('contact')"><a href="/contact">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2011 - {{ date('Y') }} CodeLab - @yield('title')</p>
    </footer>

</div> <!-- /container -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('js')
</body>
</html>
