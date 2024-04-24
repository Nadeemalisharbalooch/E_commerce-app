<?php

use App\Http\Controllers\controllerpost;
use App\Http\Controllers\vendercontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\brandcontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;  

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


route::get('post',[controllerpost::class,'index']);

route::get('dash' ,function(){
return view('layouts\auth');


});
route::get('usercreate' ,function(){
    return view('posts.create');
});

// route::get('edit/{id}' ,function(){
//     return view('posts.edit');
// });

// route::post('index' ,function(){
//     return view('posts.index');
// });


route::get('index',[controllerpost::class,'index']);
route::post('store',[controllerpost::class,'store']);
route::get('delete/{id}',[controllerpost::class,'destroy']);
route::get('show',[controllerpost::class,'index']); 
route::get('edit/{id}',[controllerpost::class,'edit']); 
route::post('update/{id}',[controllerpost::class,'update'])->name('update'); 
route::get('userEdit',[controllerpost::class,'user']);
route::get('chagepassword',[controllerpost::class,'chagepassword']);
route::get('pass',[controllerpost::class,'pass']);
route::get('userorder',[controllerpost::class,'userorder']); 
route::get('createproduct',[controllerpost::class,'createproduct']); 
  
//  category controller  
route::get('category',[categorycontroller::class,'index']);
route::get('categorycreate',[categorycontroller::class,'categorycreate']);
route::get('categoryinsert',[categorycontroller::class,'categoryinsert']);
route::get('categorydestroy/{id}',[categorycontroller::class,'categorydestroy']);  
route::get('categoryedit/{id}',[categorycontroller::class,'categoryedit']); 
route::get('categoryupdate/{id}',[categorycontroller::class,'categoryupdate']); 

route::get('template',[vendercontroller::class,'showvender']);
route::get('adminDashboard',[controllerpost::class,'adminDashboard']);
route::post('vendorstore',[vendercontroller::class,'vendorstore'])->name('vendorstore');


route::get('products',function () {
    return view('posts.showproducts');
    });
    // route::get('indexsite',function () {
    //     return view('vender. create');
    //     });
//         route::get('template',function () {
//   return view('vender.create');
//         });
        
route::get('vendor',[vendercontroller::class,'createvendor']);
route::get('vendorcreate',[vendercontroller::class,'vendorcreate']);
route::get('vendordashboard',[vendercontroller::class,'dashboard']);
route::get('showallproducts',[vendercontroller::class,'showallproducts']);
route::get('vendoredit/{id}',[vendercontroller::class,'vendoredit']);
route::get('sellproduct',[vendercontroller::class,'sellproduct']);
route::get('vendororder',[vendercontroller::class,'order']);

route::get('user',function () {
return view('vender.user');
});

route::get('userindex',function () {
return view('user.index');
});
route::get('just',function () {
    return view('site.index');
    });

    route::get('product.search',[vendercontroller::class,'search']);
    route::get('searching/{id}',[vendercontroller::class,'searching']);
    // user controller
    route::get('shopping',[usercontroller::class,'shopping']);
    route::get('create',[usercontroller::class,'create']);
    route::get('usersite',[usercontroller::class,'site']);
    route::get('cart',[usercontroller::class,'cart'])->middleware('auth');
    route::get('order',[usercontroller::class,'order']);  
    route::get('allProducts',[controllerpost::class,'allProducts']);
    // brand controller  
    route::get('brandcreate',[brandcontroller::class,'create']);  
    route::get('brandshow',[brandcontroller::class,'index']); 
    route::get('brandinsert',[brandcontroller::class,'insert']); 
    route::get('branddestroy/{id}',[brandcontroller::class,'destroy']); 
    route::get('brandedit/{id}',[brandcontroller::class,'edit']);
    route::get('brandupdate/{id}',[brandcontroller::class,'update']);  
//  order  controller
route::get('deleteCart/{id}',[ordercontroller::class,'deleteCart']);   
route::get('ordercontroller',[ordercontroller::class,'create']);   
Route::get('/update/{orderId}', [ordercontroller::class, 'update'])->name('update');
route::get('updateProductStatus/{id}',[ordercontroller::class,'updateProductStatus']);
route::get('/deliverstatus/{id}',[ordercontroller::class,'deliverStatus']);



route::get('mail',[mailcontroller::class,'index'])->name('mail');   
route::get('thank',[mailcontroller::class,'thank'])->name('thank');   
route::get('pay',function () {
    return view('site.pay');
});

    route::get('thank',function () {
        return view('site.thank');
    });
   
    
    route::get('tem',function () {
        return view('posts.tem');
    });
   

    route::get('password',function () {
    return view('posts.changepasswordview');
    });

    //  route::get('branddestroy/{id}',function () {
    // // return view('site.singleProduct');
    // return "data has been";
    // });

 Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);