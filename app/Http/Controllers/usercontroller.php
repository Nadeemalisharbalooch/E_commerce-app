<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
  public function index()
  {

  }
  public function create(request $request)
  {

    $productId = $request->product_id;
    $qty = $request->quantity;
    
    // Retrieve the product from the database
    $product = Product::where('id', $productId)->first();
    
    if ($product) {
        // If the product is found in the database, get its quantity
        $productQuantity = $product->quantity;
    
        // Perform the addition
        $findqty = $productQuantity-$qty;
    
        // Return the result
        
    } else {
        // Handle the case when no product with the given ID is found.
        // You can return an error message or any other action you want.
        return "Product not found.";
    }
    
    
    cart::create([
        
        'user_id'=>auth::user()->id,
         'product_id' => $request->product_id, 
         'quantity'=>$request->quantity,
         'product_title'=>$request->product_title,
         'price'=>$request->price,
         'total_price'=>$request->total_price,  
         'product_image'=>$request->file,
          ]);  
          
  
     product::where('id', $productId)->update(['quantity' => $findqty]); 
  
    return redirect()->back();
}
public function site(){
  $user=cart::find(1);
  return view('layouts.site')->with('user',$user);
} 

public function order(){
    $singleproduct=product::all();
   $category= category::all();
  return view('site.order')->with('singleproduct',$singleproduct)->with('category',$category);

}public function  cart(request $request){
  $loginUser= Auth::user()->id;

  // $cart = Cart::where('user_id', $loginUser)->first();
  $cart = cart::where('user_id', $loginUser)->get();

    // $cart= cart::all();
   $category= category::all();
   $sum = cart::sum('total_price');
   
   return view('site.cart')->with('carts',$cart)->with('category',$category)->with('sum',$sum);
  dd($category);

}

public function shopping(){
  $products = Product::where('status', 1)
  ->where('quantity', '>', 0) 
  ->simplePaginate(4);

$category= cart::all();
return view('site.index')->with('products',$products)->with('category',$category);

 }
 }

    