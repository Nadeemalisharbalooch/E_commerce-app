<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\createrequest;
use App\Http\Requests\updaterequest;
use Illuminate\Support\Facades\Hash;
use App\Models\post;
use App\Models\User; 
use App\Models\product; 
use App\Models\category;
use App\Models\order;
use App\Models\brand;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
class controllerpost extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $loggedInUserId = Auth::id();
        // $post = User::paginate(5);
        // $post=user::simplePaginate();
        $post = User::where('id', '!=', $loggedInUserId)->get();
        return view('posts.show')->with('post',$post);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  
    }
    /**
     * Store a newly created resource in storage.
     */
   
   
    public function store(createrequest $request)
{
    $file=$request->file;
    if($file){
        $filename=time().'-'.$file->getClientOriginalName();
        $filepath=public_path('/assets/images');
        $file->move($filepath,$filename);   
    }
    $post= User::create([
        'images'=>$filename, 
        'name'=>$request->name,
        'email'=>$request->email,
        'admin'=>$request->admin,
        'password'=>$request->pass          
       ]);
    
    return redirect()->back()->with('success', ' registration successful!.');
    return $request;
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    
    {
        
        $post=User::find($id);
   
      return view('posts.edit')->with('post',$post);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updaterequest $request, string $id)
    {
      

        $file = $request->file;
        if ($file) {
            $filename = time() . '-' . $file->getClientOriginalName();
            $filepath = public_path('/assets/images');
            $file->move($filepath, $filename);
        }
        
        $post = User::find($id);
        if (!$post) {
            abort(404);
        }
        
        $post->update([
            'name' => $request->name,
            'Email' => $request->email,
            'admin' => $request->admin,
            'images' => $filename
            
        ]);
        return redirect()->back()->with('success', 'user updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = User::find($id);
      if (!$post) {
        abort(404);
      }
      $post->delete();
      return redirect()->back()->with('success', 'user deleted successfully.');
    }
    public function user(){
        $user = Auth::user()->id;
      $post = User::find($user);
      return view('posts.edit')->with('post',$post); 
    }

    public function adminDashboard(){
     $products = product::all();
     $vendor = user::where('admin', '=', 2)->get();
     $users = user::all();
     $category = category::all();
     $order = order::all();
     $brand = brand::all();
    return view('posts.dashboard')->with('products',$products)->with('users',$users)->with('category',$category)
    ->with('order',$order)->with('brand',$brand)->with('vendor',$vendor);
   
    }
    public function allProducts(){

        $product= product::all();
        return view('posts.allProducts')->with('product',$product);
    }

          // change password

        public function chagepassword(){
      return view('posts.changepasswordview');
           
        }


        public function pass(request $request){
     
           $user = Auth::user();
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
    
                return redirect()->back()->with('success', 'Password changed successfully.');
            }
    
            return redirect()->back()->withErrors(['old_password' => 'The provided old password is incorrect.']);

        }


    
        
        
       
        public function userorder(){
            $order= order::all();
            $user= user::all();
            return view('posts.order')->with('order',$order)->with('user',$user);
         }

         public function createproduct(){
            $brand= brand::all();
            $category= category::all();
            return view('posts.createproduct')->with('brand',$brand)->with('category',$category);
         }

    }   