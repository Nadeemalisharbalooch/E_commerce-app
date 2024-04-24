<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
use App\Models\cart;
use App\Models\category;
use App\Models\brand;
use App\Models\order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( Request $requestrequest)
    {
    
        $user = auth()->user();
        if ($user) {
            $name = $user->name;
            
            // Make use of the $name variable as needed
        } else {
            // User is not logged in
        }

        if(auth()->user()->admin == 1){
     $vendor = user::where('admin', '=', 2)->get();
     $products =product::all();
     $users = user::all();
     $category = category::all();
     $order = order::all();
     $brand = brand::all();
    return view('posts.dashboard')->with('products',$products)->with('users',$users)->with('category',$category)
    ->with('order',$order)->with('brand',$brand)->with('vendor',$vendor);
           
        } 
        elseif(auth()->user()->admin == 2){
            $var=auth::user()->id;
            $users = user::all();
            $category = category::all();
            $brand = brand::all();
    $order = order::where('user_id', '=', $var)->get();
    $product = product::where('user_id', '=', $var)->get();
    $sumprice = Order::where('user_id', $var)->sum('total_amount');
    return view('vender.dashboard')->with('order',$order)->with('product',$product)->with('users',$users)->with('category',$category)->with('brand',$brand)->with('sumprice',$sumprice); 
       
        }
        elseif(auth()->user()->admin == 0){
            // return view('vendor')->with('name',$name);;
            //  $products=product::all();
            $products = Product::where('status', 1)
            ->where('quantity', '>', 0)  
            ->simplePaginate(4);
          

          $category= cart::all();
          return view('site.index')->with('products',$products)->with('category',$category);
        }
        else{
        return "invalide your password OR Email";
        }
        
    }
        
}
