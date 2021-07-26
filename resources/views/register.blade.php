@extends('layout.layout')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Account Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->
    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aa-myaccount-login">
                                    <h4>Login</h4>
                                    <form class="aa-login-form" method="POST" id="frm" action="/login">
                                        @if (Session::has('FailLogin'))
                                            <div class="alert alert-success">{{ Session::get('FailLogin') }}</div>
                                        @endif
                                        @csrf
                                        <label for="">Email address<span>*</span></label>
                                        <input type="text" placeholder="email" name="email">
                                        <label for="">Password<span>*</span></label>
                                        <input type="password" placeholder="Password" name="password">
                                        <button type="submit" class="aa-browse-btn">Login</button>
                                        <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme">
                                            Remember me </label>
                                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aa-myaccount-register">
                                    <h4>Register</h4>
                                    <form class="needs-validation" method="POST" accept="/register">
                                        @if (Session::has('Success'))
                                            {{-- <div class="alert alert-success">{{ Session::get('Success') }}</div> --}}
                                            <script>
                                                alert('{{ Session::get('Success') }}');
                                            </script>
                                        @endif
                                        @if (Session::has('fail'))
                                            <div class="alert alert-success">{{ Session::get('fail') }}</div>
                                        @endif
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName">First name</label>
                                                <input type="text" class="form-control" name="first" id="firstName"
                                                    placeholder="Frist name*" value="" required="" autofocus="">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName">Last name</label>
                                                <input type="text" class="form-control" id="lastName" name="last"
                                                    placeholder="Last name*" value="" required="" autofocus="">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="you@example.com*" autofocus="" required="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Phone">Phone no.</label>
                                            <input type="tel" class="form-control" name="phone" id="Phone" required=""
                                                autofocus="" placeholder="Phone*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Password">Password</label>
                                            <input type="text" class="form-control" id="Password" name="password"
                                                required="" autofocus="" placeholder="Password*">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="1234 Main St*" required="" autofocus="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="address2">Address 2 <span
                                                    class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="address2" name="address2"
                                                placeholder="Apartment or suite">
                                        </div>
                                        <div class="mb-3">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" required=""
                                                autofocus="" placeholder="City*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="district">District</label>
                                            <input type="text" class="form-control" id="district" name="district"
                                                required="" autofocus="" placeholder="District*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="zip">Postcode/zip</label>
                                            <input type="text" class="form-control" id="zip" name="zip" required=""
                                                autofocus="" placeholder="Postcode/zip*">
                                        </div>
                                        <hr class="mb-4">
                                        <button type="submit" class="aa-browse-btn" name="singup">Sing Up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->
@endsection
<script>
    $(document).ready(function()) {
    $('#frm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/login",
            data: $('#frm').serialize();
            success: function(res) {
                console.log(res);
            }
        });
    });
    })
</script>
