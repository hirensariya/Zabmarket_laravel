@if (Session::has('deletecart'))
    <script>
        alert('{{ Session::get('deletecart') }}');
    </script>
@endif

@extends('layout.layout')
@section('content')
    <?php $st = 0 ?>
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Cart Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="cart-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-view-area">
                        <div class="cart-view-table">
                            <form action="">
                                <div class="table-responsive">
                                    <table class="table" id="carttable">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($res as $item)
                                                <tr>
                                                    <td><a class="remove" href="/deletecart/{{$item->id}}">
                                                            <fa class="fa fa-close"></fa>
                                                        </a></td>
                                                    <td><a href="/product-detail/{{ $item->proid }}"><img
                                                                src="/{{ $item->productimage }}" alt="img"></a></td>
                                                    <td><a class="aa-cart-title"
                                                            href="/product-detail/{{ $item->proid }}">{{ $item->productname }}</a>
                                                    </td>
                                                    <td>{{ $item->price }}</td>
                                                    <td><input class="aa-cart-quantity" type="number"
                                                            value="{{ $item->qut }}" id="qut{{ $item->id }}"
                                                            onchange="update({{ $item->id }})"
                                                            onkeypress="update({{ $item->id }})"></td>
                                                    <td id="price{{ $item->id }}">{{ $item->qut * $item->price }}</td>
                                                    {{-- {{ $st = $st + $item->qut * $item->price }} --}}
                                                    <?php $st = $st + $item->qut * $item->price; ?>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <!-- Cart Total view -->
                            <div class="cart-view-total" id="sub">
                                <h4>Cart Totals</h4>
                                <table class="aa-totals-table">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td id="new">{{ $st }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td id="new1">{{ $st }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/checkout" class="aa-cart-view-btn">Proced to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->
@endsection
<script>
    function update(param) {
        $qut = document.getElementById('qut' + param).value;
        var product_id = param;
        $.ajax({
            url: "/uptcart",
            type: "get",
            data: {
                id: product_id,
                quntity:$qut
            },
            success: function(response) {
            document.getElementById('price'+param).innerHTML=response.price;
            document.getElementById('new').innerHTML=response.totalprice;
            document.getElementById('new1').innerHTML=response.totalprice;
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }
</script>
