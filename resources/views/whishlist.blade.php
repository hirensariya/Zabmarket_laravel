@if (Session::has('deletecart'))
    <script>
        alert('{{ Session::get('deletecart') }}');
    </script>
@endif

@extends('layout.layout') 
@section('content')
     <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Wishlist Page</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>                   
           <li class="active">Wishlist</li>
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
            <div class="cart-view-table aa-wishlist-table">
              <form action="">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th>Image</th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Stock Status</th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach ($res as $item)
                       <tr>
                         <td><a class="remove" href="/deletewhis/{{ $item->id }}"><fa class="fa fa-close"></fa></a></td>
                         <td><a href="/product-detail/{{ $item->proid }}"><img src="/{{$item->productimage}}" alt="img"></a></td>
                         <td><a class="aa-cart-title" href="/product-detail/{{ $item->proid }}">{{$item->productname}}</a></td>
                         <td>{{$item->price}}</td>
                         <td>In Stock</td>
                         <td><a  href="javascript:;"
                          onclick="update({{ $item->proid}})" class="aa-add-to-cart-btn">Add To Cart</a></td>
                       </tr>
                       @endforeach
                      </tbody>
                   </table>
                 </div>
              </form>             
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
        console.log(param);
        var product_id = param;
        $.ajax({
            url: "/addcart",
            type: "get",
            data: {
                id: product_id
            },
            success: function(res) {
                //   $("#crt_table").html(res);
                alert(res.msg)
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }
</script>