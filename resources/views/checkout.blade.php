@extends('layout.layout')
@section('content')
    <?php $st = 0 ?>
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Checkout Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="/placeorder" method="POST">
                          @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Billing Details -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapseThree">
                                                            Shippping Address
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="First Name*" id="fname"
                                                                        name="fname" required="" autofocus=""
                                                                        value="{{ $res->frist_name }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Last Name*" id="lname"
                                                                        name="lname" required="" autofocus=""
                                                                        value="{{ $res->last_name }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="email" placeholder="Email Address*"
                                                                        id="email" name="email" required="" autofocus=""
                                                                        value="{{ $res->email }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="tel" placeholder="Phone*" id="phone"
                                                                        name="phone" required="" autofocus=""
                                                                        value="{{ $res->phone }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="addresss*" id="address"
                                                                name="address" required="" autofocus=""
                                                                value="{{ $res->address }}">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="addresss*" id="address2"
                                                                name="address2" required="" autofocus=""
                                                                value="{{ $res->address2 }}">
                                                              </div>
                                                          </div>
                                                      </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" id="city" placeholder="City / Town*"
                                                                        required="" autofocus=""
                                                                        value="{{ $res->city }}" name="city" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" id="dis" placeholder="District*"
                                                                        required="" autofocus=""
                                                                        value="{{ $res->district }}" name="dis">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" id="zip"
                                                                        placeholder="Postcode / ZIP*" required=""
                                                                        autofocus="" value="{{ $res->zip }}" name="zip">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Order Summary</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pro as $item)
                                                        <tr>
                                                            <td>{{ $item->productname }}<strong> x
                                                                    {{ $item->qut }}</strong></td>
                                                            <td>{{ $item->price }}</td>
                                                        </tr>
                                                        <?php $st = $st + $item->qut * $item->price; ?>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td>{{ $st }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>{{ $st }}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Payment Method</h4>
                                        <div class="aa-payment-method">
                                            <label for="cashdelivery"><input type="radio" id="cashdelivery"
                                                    name="optionsRadios"> Cash on Delivery </label>
                                            <label for="paypal"><input type="radio" id="paypal" name="optionsRadios"
                                                    checked> Via Paypal </label>
                                            <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
                                                border="0" alt="PayPal Acceptance Mark">
                                            <input type="submit" value="Place Order" class="aa-browse-btn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->
@endsection

<script>
  function chcek()
  {
    const c = document.getElementById('checkme');
    if(c.checked==true)
    {
      document.getElementById('shfname').value=document.getElementById('fname').value;
      document.getElementById('shlname').value=document.getElementById('lname').value;
      document.getElementById('shemail').value=document.getElementById('email').value;
      document.getElementById('shphone').value=document.getElementById('phone').value;
      document.getElementById('shcity').value=document.getElementById('city').value;
      document.getElementById('shdis').value=document.getElementById('dis').value;
      document.getElementById('shzip').value=document.getElementById('zip').value;
      document.getElementById('shaddress').value=document.getElementById('address').value;
      document.getElementById('shaddress2').value=document.getElementById('address2').value;
    }else{
      document.getElementById('shfname').value="";
      document.getElementById('shlname').value="";
      document.getElementById('shemail').value="";
      document.getElementById('shphone').value="";
      document.getElementById('shaddress').value="";
      document.getElementById('shaddress2').value="";
      document.getElementById('shcity').value="";
      document.getElementById('shdis').value="";
      document.getElementById('shzip').value="";
    }
  }
</script>