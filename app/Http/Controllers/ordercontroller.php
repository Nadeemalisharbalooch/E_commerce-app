<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        return "show here index page";
    }
    public function create(OrderRequest $request)
    {
        
        $id = Auth::user()->id;
        $block = Order::where('user_id', $id)->first();
        if (empty($block)) {
            $products = Cart::where('user_id', $id)->get();
        

            foreach ($products as $product) {
                $total_price = $product->price + $product->quantity;
                $qty= $product->quantity;
                Order::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $product->product_id,
                    'userName' => Auth::user()->email,
                    'Card_Number' => $request->card_number,
                    'Cardholder_Name' => $request->Cardholder_name,
                    'total_qty' => $product->quantity,
                    'total_amount' => $total_price,
                ]);
                
            }
            return redirect()->route('mail');
        } elseif ($block->status == 0) {
            $errorMessage = "User blocked: Access denied.";
            return redirect()->back()->withErrors([$errorMessage]);
        }

        $products = Cart::where('user_id', $id)->get();
        foreach ($products as $product) {
            $total_price = $product->price + $product->quantity;
           
            Order::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->product_id,
                'userName' => Auth::user()->email,
                'Card_Number' => $request->card_number,
                'Cardholder_Name' => $request->Cardholder_name,
                'total_qty' => $product->quantity,
                'total_amount' => $total_price,
            ]);
         
        }

        return redirect()->route('mail');
    }

    public function updateProductStatus(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        if ($product->status == 1) {
            Product::where('id', $id)->update(['status' => 0]);
        } else {
            $product->status = 1;
            Product::where('id', $id)->update(['status' => 1]);
        }

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    public function update(string $id)
    {
       
        $order = Order::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        if ($order->status == 1) {
            Order::where('id', $id)->update(['status' => 0]);
        } else {
            $order->status = 1;
            Order::where('id', $id)->update(['status' => 1]);
        }
        return redirect()->back()->with('success', 'Order updated successfully.');
    }

    public function deleteCart(string $id){

        $carts = cart::find($id);
        if (!$carts) {
          abort(404);
        }
      
        $carts->delete();
        return redirect()->back()->with('success', 'carts deleted successfully.');
    }
    // deliver product Status update method

public function deliverStatus(string $id){

     $order = Order::find($id);

        if (!$order) {
            
            return redirect()->back()->with('error', 'Order not found.');
        }

        if ($order->deliver_status == 0) {
        
            Order::where('id', $id)->update(['deliver_status' => 1]);
        } 
        return redirect()->back()->with('success', 'Order updated successfully.');
}

}