<div class="col-md-4">

    @if (!Auth::guest())
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="section-title">
                    <i class="fa fa-shopping-cart"></i> Cart</h3>
            </div>
            <div class="panel-body">
                @if (session()->has('success'))
                    <div class="alert alert-info">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <ul v-if="cart.count" class="list-group">
                    <li v-for="item in cart.cart" class="list-group-item">
                        <span class="badge pull-left">@{{ item.qty }} </span>
                        &nbsp @{{ item.name }} - @{{ item.price }} $

                        <button class="btn btn-danger pull-right"
                                @click="deleteFromCart(item.rowId)">
                            Delete <i style="font-size: 14pt;" class="fa fa-remove margin"></i>
                        </button>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <b>Total : @{{ cart.total }} $</b>
                    </li>
                    <li class="list-group-item list-group-item-warning">
                        <b>Subtotal : @{{ cart.subtotal }} $</b>
                    </li>
                    <li class="list-group-item list-group-item-info">
                        <b>Items Count : @{{ cart.count }}</b>
                    </li>
                    <li class="list-group-item">
                        <form method="POST" action="{{ route('placeOrder') }}">
                            <button type="Submit" class="btn btn-primary form-control">
                                Place Order
                            </button>
                        </form>
                    </li>
                </ul>
                <p v-else>You do not have anything in Cart
                </p>
            </div>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-search" aria-hidden="true"></i> Search By Name</h3>
        </div>
        <div class="panel-body">
            <form method="GET" action="/search/name">
                <div class="row">
                    <div class="col-md-8">
                        <input type="Text" v-on:keyup="autoComplete()" id="search" name="search" v-model="search"
                               class="form-control" placeholder="Search By name">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="Submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="section-title">
                <i class="fa fa-money"></i> Search by Price</h3>
        </div>
        <div class="panel-body">
            <form method="GET" action="/search/price">
                <div class="col-md-4">
                    <input type="Text" name="search" class="form-control" placeholder="Min">
                </div>
                <div class="col-md-4">
                    <input type="Text" name="searchMax" class="form-control" placeholder="Max">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" type="Submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div v-for="(product,index) in products" v-if="index < 4" class="panel-group" id="product.id">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" :data-parent="'#'+product.id" :href="'#'+product.id">
                        <h3 class="section-title">
                            <span class="fa fa-tags"></span>
                            @{{ product.name }}</h3>
                    </a>
                </h4>
            </div>
            <div :id="'#'+product.id" class="panel-collapse collapse in">
                <ul class="list-group">
                    <li class="list-group-item" v-for="(item,index) in product.products">
                        <span class="fa fa-product-hunt"></span>
                        <a :href="'/product/view/'+item.id"> @{{ item.name }}</a>

                        <button @click="addToCart(item.id)" class="pull-right btn btn-link">
                            <span class="fa fa-cart-plus"></span> Add To Cart
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>