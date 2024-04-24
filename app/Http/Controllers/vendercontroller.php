<?php
namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Http\Requests\VendorCreateRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\Brand;
use App\Models\category;
use App\Models\order;
use App\Models\user;  
use App\Models\cart;
class vendercontroller extends Controller
{

    public function vendorstore(VendorCreateRequest $request)
    {  
        $file=$request->file;
    if($file){
       $filename=time().'-'.$file->getClientOriginalName();
         $filepath=public_path('/assets/images');
        $file->move($filepath,$filename);
        
    }
        $post = product::create([
            'title' => $request->title,
           'user_id'=>auth::user()->id,
            'price' => $request->price,
            'category'=>$request->category,
            'quantity' => $request->quantity,
            'Description' => $request->Description,
            'brand'=>$request->brand,
            'image' =>$filename
        ]);
        return redirect()->back()->with('success', 'product inserted successfully.');
    }
    function  showvender(){
    $id=auth::user()->id;
   $product=product::all();
        return view('site.index')->with('product',$product);
    }
    function vendorcreate()
{
    $brand= brand::all();
      $category= category::all();
    return view('vender.create')->with('brand',$brand)->with('category',$category);

}
function  showallproducts(){
    $var=auth::user()->id;
     $product = product::where('user_id', '=', $var)->get();
 
    return view('vender\work')->with('product',$product);
}

function vendoredit(string $id){
   $product= product::find($id);
    return view('vender.edit')->with('product',$product);
}

public function search(Request $request)
{
    $query = $request->input('query');
    $category = Category::all();

    // Check if the search query is empty
    if (empty($query)) {
        return redirect()->back();
    } else {
        // Perform the search query using the Product model
        $products = Product::where('title', 'like', '%'.$query.'%')->paginate(3);
    }

    return view('site.index')->with('products', $products)->with('category', $category);
}


public function searching(request $request)
{
    
    $id=$request->id;
     $singleproduct= product::find($id);
    $availableQuantity=$singleproduct->quantity;
    $category= cart::all();
   $singleprcategoryoduct= product::find($id);
   
if (Auth::check()) {
    return view('site.singleproduct')->with('singleproduct',$singleproduct)->with('category',$category)->with('availableQuantity',$availableQuantity);
}
 else {

       return redirect(RouteServiceProvider::HOME);
}

}
    public function dashboard(){
    $var=auth::user()->id;
    $users = user::all();
    $category = category::all();
    $brand = brand::all();
    $order = order::where('user_id', '=', $var)->get();
    $product = product::where('user_id', '=', $var)->get();
    $sumprice = Order::where('user_id', $var)->sum('total_amount');
    return view('vender.dashboard')->with('order',$order)->with('product',$product)->with('category',$category)->with('users',$users)->with('sumprice',$sumprice)->with('brand',$brand); 
}

public function sellproduct(){
    $var=auth::user()->id;
      $product = order::where('user_id', '=', $var)->get();
      return view('vender.dashboard')->with('product',$product); 
}

// order
public function order(){
    // $order= order::all();
    $user= user::all();
    $var=auth::user()->id;
    $order = order::where('user_id', '=', $var)->get();
    return view('vender.orders')->with('order',$order)->with('user',$user);
    return view('vender.orders');
}
}


