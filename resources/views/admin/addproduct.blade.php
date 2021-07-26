@extends('layout.adminlayout')
@section('content')

    <!-- add product -->
    @if (Session::has('addproduct'))
        <script>
            alert('{{ Session::get('addproduct') }}');
        </script>
    @endif
    <div class="container">

        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3" style="color:blue">Add Product</h4>
                <form class="needs-validation" validate="" action="/admin/product" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Product Image</label>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="cat">Product Category</label>
                        <select name="cat" id="cat" class="form-control" onchange="div()">
                            <option value="">-Select-</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Cover">Cover</option>
                            <option value="Dress">Dress</option>
                            <option value="General">General</option>
                        </select>
                        <div class="invalid-feedback">
                            Please enter Product Category
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cat">Product Display</label>
                        <select name="display" class="form-control">
                            <option value="">-Select-</option>
                            <option value="latest">Latest</option>
                            <option value="popular">Popular</option>
                            <option value="featured">Featured</option>
                        </select>
                        <div class="invalid-feedback">
                            Please enter Display of Product
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Product Name</label>
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Product name"
                            autofocus="" required="">
                        <div class="invalid-feedback">
                            Please enter Product Name
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" name="pprice" id="pprice" required="" autofocus="">
                        <div class="invalid-feedback">
                            Please enter product price.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pdis">Procduct Discription</label>
                        <input type="text" class="form-control" id="pdis" name="pdis" required="" autofocus="">
                        <div class="invalid-feedback">
                            Please enter product discription
                        </div>
                    </div>
                    <div class="mb-3" id="productColor" style="display: none">
                        <label for="pdis">Procduct Color</label><br/>
                        <div style="display: flex;">
                        <input type="checkbox" name="color[]" value="red">red<br/>
                        <input type="checkbox" name="color[]" value="yellow" style="margin-left:1rem">yellow<br/>
                        <input type="checkbox" name="color[]" value="black" style="margin-left:1rem">black<br/>
                        <input type="checkbox" name="color[]" value="white"  style="margin-left:1rem">white<br/>
                        <input type="checkbox" name="color[]" value="green"  style="margin-left:1rem">green<br/>
                        <input type="checkbox" name="color[]" value="purpule"  style="margin-left:1rem">purpule<br/>
                        <input type="checkbox" name="color[]" value="gray"  style="margin-left:1rem">gray<br/>
                        <input type="checkbox" name="color[]" value="brown"  style="margin-left:1rem">brown<br/>
                        <input type="checkbox" name="color[]" value="silver"  style="margin-left:1rem">silver<br/>
                        <input type="checkbox" name="color[]" value="orange"  style="margin-left:1rem">orange<br/>
                        <input type="checkbox" name="color[]" value="blue"  style="margin-left:1rem">blue<br/>
                        <input type="checkbox" name="color[]" value="pink"  style="margin-left:1rem">pink<br/>
                        <input type="checkbox" name="color[]" value="navy"  style="margin-left:1rem">navy<br/>
                        </div>
                    </div>
                    <div class="mb-3" id="productSize" style="display: none">
                        <label for="pdis">Procduct Size</label><br/>
                        <div style="display: flex;">
                        <input type="checkbox" name="size[]" value="xs">XS<br/>
                        <input type="checkbox" name="size[]" value="s" style="margin-left:1rem">S<br/>
                        <input type="checkbox" name="size[]" value="m" style="margin-left:1rem">M<br/>
                        <input type="checkbox" name="size[]" value="l"  style="margin-left:1rem">L<br/>
                        <input type="checkbox" name="size[]" value="xl"  style="margin-left:1rem">XL<br/>
                        <input type="checkbox" name="size[]" value="2xl"  style="margin-left:1rem">2XL<br/>
                        <input type="checkbox" name="size[]" value="3xl"  style="margin-left:1rem">3XL<br/>
                        <input type="checkbox" name="size[]" value="4xl"  style="margin-left:1rem">4XL<br/>
                        <input type="checkbox" name="size[]" value="5xl"  style="margin-left:1rem">5XL<br/>
                        <input type="checkbox" name="size[]" value="6xl"  style="margin-left:1rem">6XL<br/>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" name="singup" type="submit">Sing Up</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© zabmarket</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <!-- add product -->
    
@endsection
<script>
    function div() {
      const cat = document.getElementById("cat").value;
      if (cat == "General") {
        document.getElementById("productColor").style.display = "block";
        document.getElementById("productSize").style.display = "block";
      } else if (cat == "Cover") {
        document.getElementById("productColor").style.display = "block";
        document.getElementById("productSize").style.display = "none";
      } else if(cat == "Dress") {
        document.getElementById("productColor").style.display = "block";
        document.getElementById("productSize").style.display = "block";
      }
      else{
        document.getElementById("productColor").style.display = "none";
        document.getElementById("productSize").style.display = "none";
      }
    }
    // div();
  </script>