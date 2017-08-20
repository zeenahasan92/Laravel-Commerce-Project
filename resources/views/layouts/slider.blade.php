<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    <i class="fa fa-list-alt" aria-hidden="true"></i> All Products</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                       data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary"
                                                href="#carousel-example-generic"
                                                data-slide="next"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">

        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <div class="carousel-inner">

                <div class="item active" v-for="(product,index) in products" v-if="index == 0">
                    <div class="row">
                        <div v-for="(item,index) in product.products" v-if="index < 3" class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img :src="'/uploaded_images/'+item.image"
                                         class="img-responsive"
                                         :alt="item.name"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                @{{ item.name }}</h5>
                                            <h5 class="price-text-color">
                                                $ @{{ item.price }}</h5>
                                        </div>
                                    </div>
                                    @if (Auth::guest())
                                        <a :href="'/product/view/'+item.id" class="btn btn-primary form-control">
                                            <span class="fa fa-list"></span> View
                                        </a>
                                    @else
                                        <button @click="addToCart(item.id)" class="btn btn-success">
                                            <span class="fa fa-cart-plus"></span> Add To Cart
                                        </button>

                                        <a :href="'/product/view/'+item.id" class="btn btn-primary">
                                            <span class="fa fa-list"></span> View
                                        </a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" v-for="(product,index) in products" v-if="index > 0">
                    <div class="row">

                        <div v-for="(item,index) in product.products" v-if="index < 3" class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img :src="'/uploaded_images/'+item.image"
                                         class="img-responsive"
                                         :alt="item.name"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                @{{ item.name }}</h5>
                                            <h5 class="price-text-color">
                                                $ @{{ item.price }}</h5>
                                        </div>

                                    </div>
                                    @if (Auth::guest())
                                        <a :href="'/product/view/'+item.id" class="btn btn-primary">
                                            <span class="fa fa-list"></span> View
                                        </a>
                                    @else
                                        <button @click="addToCart(item.id)" class="btn btn-success">
                                            <span class="fa fa-cart-plus"></span> Add To Cart
                                        </button>

                                        <a :href="'/product/view/'+item.id" class="btn btn-primary">
                                            <span class="fa fa-list"></span> View
                                        </a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>








