<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\register;
use App\cart;
use App\wishlist;
use App\ordertable;
use App\temptable;
use App\admin;
use Error;
use Session;

class admindetails extends Controller
{
    public function home()
    {
        $Product = product::all();
        $e = product::where('cat', 'Electronics')->get();
        $d = product::where('cat', 'Dress')->get();
        $c = product::where('cat', 'Cover')->get();
        $g = product::where('cat', 'General')->get();
        $p = product::where('display', 'popular')->get();
        $f = product::where('display', 'featured')->get();
        $l = product::where('display', 'latest')->get();
        // error_log($Product);
        return view(
            'index',
            [
                'product' => $Product,
                'e' => $e,
                'c' => $c,
                'd' => $d,
                'g' => $g,
                'p' => $p,
                'l' => $l,
                'f' => $f,
            ]
        );
    }
    public function index($cat)
    {
        $Product = product::where('cat', $cat)->get();
        // error_log($Product);
        return view(
            'product',
            [
                'product' => $Product,
                'cat' => $cat
            ]
        );
    }
    public function product($id)
    {
        $Product = product::where('id', $id)->get();
        $allProduct = product::all();
        foreach ($Product as $s) {
            $Product = $s;
        }
        $newproduct = product::where('cat', $Product->cat)->get();
        // error_log($newproduct);
        return view(
            'product-detail',
            [
                'product' => $Product,
                'newproduct' => $newproduct
            ]
        );
    }
    public function r(Request $request)
    {
        $Register = new register();
        $Register->frist_name = $request->first;
        $Register->last_name = $request->last;
        $Register->email = $request->email;
        $Register->phone = $request->phone;
        $Register->password = $request->password;
        $Register->address = $request->address;
        $Register->address2 = $request->address2;
        $Register->city = $request->city;
        $Register->district = $request->district;
        $Register->zip = $request->zip;
        $res = $Register->save();
        if ($res) {
            // return redirect('/')->with('Success', 'you have register successfly');
            return back()->with('Success', 'you have register successfly');
        } else {
            return back()->with('Fail', 'Somethong goes wrong');
        }
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        // error_log($email);
        $res = register::where('email', $email)->where('password', $password)->get();
        if ($res->isEmpty()) {
            return back()->with('FailLogin', 'Email or Password is not correct...');
        } else {
            foreach ($res as $s) {
                $res = $s;
            }
            $request->session()->put('logid', $res->id);
            return redirect('/')->with('Login', 'You have login successfly');
        }
    }
    public function logout(Request $request)
    {
        $request->Session()->forget('logid');
        return redirect('/')->with('logout', 'Logout successfly....');
    }
    public function addcart(Request $request)
    {
        $id = $request->id;
        $Cart = new cart();
        $value = $request->session()->get('logid');
        // error_log($value);
        if ($value != "") {
            $res = Cart::where('proid', $id)->where('userid', $value)->get();
            if ($res->isEmpty()) {
                $Product = product::where('id', $id)->get();
                foreach ($Product as $s) {
                    $Cart->proid = $s->id;
                    $Cart->productimage = $s->image;
                    $Cart->productname = $s->name;
                    $Cart->qut = 1;
                    $Cart->price = $s->price;
                    $Cart->userid = $value;
                    $Cart->save();
                }
                // error_log("sesscuss ...");
                return ["msg" => "Product is Add into Cart"];
            } else {
                // error_log("Product is allready in cart.....");
                return ["msg" => "Product is allready in cart....."];
            }
        } else {
            // error_log("please Login");
            return ["msg" => "Please Login....."];
        }
    }
    public function addwhis(Request $request)
    {
        $id = $request->id;
        $Wishlist = new wishlist();
        $value = $request->session()->get('logid');
        // error_log($value);
        if ($value != "") {
            $res = Wishlist::where('proid', $id)->where('userid', $value)->get();
            if ($res->isEmpty()) {
                $Product = product::where('id', $id)->get();
                foreach ($Product as $s) {
                    $Wishlist->proid = $s->id;
                    $Wishlist->productimage = $s->image;
                    $Wishlist->productname = $s->name;
                    $Wishlist->qut = 1;
                    $Wishlist->price = $s->price;
                    $Wishlist->userid = $value;
                    $Wishlist->save();
                }
                // error_log("sesscuss ...");
                return ["msg" => "Product is Add into Wishlist"];
            } else {
                // error_log("Product is allready in cart.....");
                return ["msg" => "Product is allready in Wishlist....."];
            }
        } else {
            // error_log("please Login");
            return ["msg" => "Please Login....."];
        }
    }
    public function cart(Request $request)
    {
        $id = $request->session()->get('logid');
        $res = cart::where('userid', $id)->get();
        return view('cart', ['res' => $res]);
    }
    public function uptcart(Request $request)
    {
        $Cart = new cart();
        $userid = $request->session()->get('logid');
        $id = $request->id;
        $qut = $request->quntity;
        $res = Cart::where('id', $id)->limit(1)->update(['qut' => $qut]);
        if ($res == 1) {
            $newres = cart::where('proid', $id)->where('id', $id)->get();
            $st = 0;
            $stq = 0;
            foreach ($newres as $s) {
                $st = $st + $st + $s->qut * $s->price;
            }
            $newres = cart::where('userid', $userid)->get();
            foreach ($newres as $s) {
                $stq = $stq + $s->qut * $s->price;
            }
            return ["price" => $st, "totalprice" => $stq];
        }
    }
    public function whislist(Request $request)
    {
        $userid = $request->session()->get('logid');
        $res = wishlist::where('userid', $userid)->get();
        return view('/whishlist', ['res' => $res]);
    }
    public function checkout(Request $request)
    {
        $userid = $request->session()->get('logid');
        if ($userid != "") {
            $res = register::where('id', $userid)->get();
            $custmproduct = cart::where('userid', $userid)->get();
            foreach ($res as $Res) {
                $s = $Res;
            }
            return view('/checkout', ['res' => $s, 'pro' => $custmproduct]);
        } else {
            return redirect('/')->with('checkoutstsuts', 'Please login frist');
        }
    }
    public function placeorder(Request $request)
    {
        $st = 0;
        $name = $request->fname;
        $phone = $request->phone;
        $email = $request->email;
        $Temptable = new temptable();

        $Cart = new cart();
        $userid = $request->session()->get('logid');
        $newres = cart::where('userid', $userid)->get();
        foreach ($newres as $s) {
            $ordername = $s->productname;
            $st = $st + $s->qut * $s->price;
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                "X-Api-Key:test_f4bbc56cf7ed8b53e2b7bf0940e",
                "X-Auth-Token:test_04f795951c48bb0d5cabdf2c2de"
            )
        );
        $payload = array(
            'purpose' => $ordername,
            'amount' => $st,
            'phone' => $phone,
            'buyer_name' => $name,
            'redirect_url' => 'http://localhost:8000/thank',
            'send_email' => true,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => $email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        $request->session()->put('payid', $response->payment_request->id);

        $Temptable->userid = $userid;
        $Temptable->oname = $name;
        $Temptable->ophone = $phone;
        $Temptable->oaddress = $request->address;
        $Temptable->oaddress2 = $request->address2;
        $Temptable->ocity = $request->city;
        $Temptable->odistric = $request->dis;
        $Temptable->ozip = $request->zip;
        $Temptable->save();

        header('location:' . $response->payment_request->longurl);
        die();
        echo $response;
    }
    public function thank(Request $request)
    {
        $userid = $request->session()->get('logid');
        $o = temptable::where('userid', $userid)->get(); {
            foreach ($o as $sa) {
                $oname = $sa->oname;
                $ophone = $sa->ophone;
                $oaddress = $sa->oaddress;
                $oaddress2 = $sa->oaddress2;
                $ocity = $sa->ocity;
                $odistric = $sa->odistric;
                $ozip = $sa->ozip;
            }
        }
        $res = cart::where('userid', $userid)->get();
        foreach ($res as $s) {
            $order = new ordertable();
            $order->userid = $userid;
            $order->payid = $request->payment_id;
            $order->pid = $s->proid;
            $order->pname = $s->productname;
            $order->pqty = $s->qut;
            $order->pprice = $s->price;
            $order->oname = $oname;
            $order->ophone = $ophone;
            $order->oaddress = $oaddress;
            $order->oaddress2 = $oaddress2;
            $order->ocity = $ocity;
            $order->odistric = $odistric;
            $order->ozip = $ozip;
            $order->save();
        }
        $res = cart::where('userid', $userid)->delete();
        $res = temptable::where('userid', $userid)->delete();
        return view('/thank');
    }
    public function deletecart(Request $request,$id)
    {
        $newres = cart::where('id', $id)->delete();
        return redirect('/cart')->with('deletecart', 'Item is deleted');
    }
    public function deletewhis(Request $request,$id)
    {
        $newres = wishlist::where('id', $id)->delete();
        return redirect('/whishlist')->with('deletecart', 'Item is deleted');
    }
    public function editprof(Request $request)
    {   
        $userid = $request->session()->get('logid');
         $res = register::where('id', $userid)->get();
        foreach ($res as $Res) {
            $s = $Res;
        }
        return view('editpro',['res'=>$s]);
    }
    public function upprof(Request $request)
    {
        $userid = $request->session()->get('logid');
        $Register = new register();
        $res = $Register->where('id',$userid)->update([
            'frist_name' => $request->first,
            'last_name' => $request->last,
            'email' => $request->email,
            'phone'=> $request->phone,
            'password'=> $request->password,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'district' => $request->district,
            'zip'=> $request->zip,
        ]); 
        if ($res) {
            return back()->with('update', 'Update successfly');
        } else {
            return back()->with('update', 'Somethong goes wrong');
        }
    }
    public function vieworder(Request $request)
    {
        $userid = $request->session()->get('logid');
        $res = ordertable::where('userid', $userid)->get();
       foreach ($res as $Res) {
           $s = $Res;
       }
       return view('order',['res'=>$s]);
    }
    public function adminlogin(Request $request)
    {
      $name=$request->name;
      $password=$request->password;
      $res = admin::where('name', $name)->where('password', $password)->get();
        if ($res->isEmpty()) {
            return back()->with('adminFailLogin', 'Name or Password is not correct...');
        } else {
            foreach ($res as $s) {
                $res = $s;
            }
            $request->session()->put('adminlogid', $res->id);
            return redirect('/admin/dashbord')->with('adminLogin', 'You have login successfly');
            // return back()->with('adminFailLogin', 'Successfully login...');
        }

    }
    public function admindashbord(Request $request)
    {
        $userid = $request->session()->get('adminlogid');
        if ($userid != "") 
        {   
            $Product = product::all();
            return view('admin/dashborad',['res'=>$Product]);

        }else{
            return redirect('/admin/')->with('status', 'Please Login....');
        }
     
    }
    public function adminorder(Request $request)
    {
        $userid = $request->session()->get('adminlogid');
        if ($userid != "") 
        {   
           
        $Product = ordertable::all();
        return view('admin/orderlist',['res'=>$Product]);
        }else{
            return redirect('/admin/')->with('status', 'Please Login....');
       }
    }
    public function admincustmer(Request $request)
    {
        $userid = $request->session()->get('adminlogid');
        if ($userid != "") 
        {  
        $Register = register::all();
        return view('admin/custmer',['res'=>$Register]);
       }else{
        return redirect('/admin/')->with('status', 'Please Login....');
       }
    }
    public function adminaddproduct(Request $request)
    {
        
        $userid = $request->session()->get('adminlogid');
        if ($userid != "") 
        {  
            $this->validate($request,[
                'images'=>'required',
                'images.*'=>'image'
            ]);
            $files=[];
            if($request->hasFile('images'))
            {
                foreach($request->file('images') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move(public_path('image'),$name);
                    error_log($name);
                    $files[]=$name;
                } 
                  
            }
            
            $Product= new product();
            $Product->image=$files;
            $Product->cat = $request->cat;
            $Product->display = $request->display;
            $Product->name= $request->pname;
            $Product->price=$request->pprice;
            $Product->dis=$request->pdis;
            $Product->color=$request->color;
            $Product->size=$request->size;
            $res = $Product->save();

        if ($res) {
            // return redirect('/')->with('Success', 'you have register successfly');
            return back()->with('addproduct', 'Product is successfly added');
        } else {
            return back()->with('addproduct', 'Somethong goes wrong');
        }
        // return view('admin/addproduct');
       }else{
        return redirect('/admin/')->with('status', 'Please Login....');
       }
    }
    public function adminlogout(Request $request)
    {
        $request->Session()->forget('adminlogid');
        return redirect('/admin')->with('logout', 'Logout successfly....');
    }
    public function admineditproduct(Request $request, $id)
    {
        $userid = $request->session()->get('adminlogid');
        if ($userid != "") 
        {  
        $Product = product::where('id', $id)->get();
        foreach ($Product as $s) {
            $Product = $s;
        }
        return view('admin/edirproduct',['product' => $Product,]);
         }else{
        return redirect('/admin/')->with('status', 'Please Login....');
       }
    }
    public function admindetailproduct(Request $request,$id)
    {
        $Product= new product();
        $userid = $request->session()->get('adminlogid');
        $oldtyep=$request->images;
        if ($userid != "") 
        {  
            if($oldtyep)
            {
                $this->validate($request,[
                'images'=>'required',
                'images.*'=>'image'
            ]);
            $files=[];
            if($request->hasFile('images'))
            {
                foreach($request->file('images') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move(public_path('image'),$name);
                    error_log($name);
                    $files[]=$name;
                } 
                  
            }
            
            $res = $Product->where('id',$id)->update([
                'image' => $files,
                'name' => $request->pname,
                'price' => $request->pprice,
                'cat'=>$request->cat,
                'display'=> $request->display,
                'dis' => $request->pdis,
            ]); 
        if ($res) {
            return back()->with('editpro', 'Edit successfly');
        } else {
            return back()->with('editpro', 'Somethong goes wrong');
        }
            }else{
                $res = $Product->where('id',$id)->update([
                    'name' => $request->pname,
                    'price' => $request->pprice,
                    'cat'=>$request->cat,
                    'display'=> $request->display,
                    'dis' => $request->pdis,
                ]); 
            if ($res) {
                return back()->with('editpro', 'Editsuccessfly');
            } else {
                return back()->with('editpro', 'Somethong goes wrong');
            }
            }
            
           
       }else{
        return redirect('/admin/')->with('status', 'Please Login....');
       }
    }
    public function admindeletproduct(Request $request,$id)
    {
        $newres = product::where('id', $id)->delete();
        return redirect('/admin/dashbord')->with('deleteproduct', 'Product is deleted');
    }

}