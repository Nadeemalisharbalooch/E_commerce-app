<?php
namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categorycontroller extends Controller
{
    public function index(){
       
        $category = category::all();
        return view('posts.category')->with('category',$category);       
    }
    public function categorycreate(){

        return view('posts.create_category');

    }
    public function categoryinsert(request $request){
        
      
      $loggedInUserId = Auth::id();
    $post= category::create([
       
        'user_id'=>$loggedInUserId,
        'cat_title'=>$request->category,
        
       ]);
    return redirect()->back()->with('success', 'category inserted successfully.');

    }
    public function categorydestroy(string $id)
    {
        $category = category::find($id);
        if (!$category) {
          abort(404);
        }
      
        $category->delete();
        return redirect()->back()->with('success', 'category deleted successfully.');
      
    }

    public function categoryedit(string $id){ 
        $category=category::find($id);
   
        return view('posts.edit_category')->with('category',$category);

    }
    public function categoryupdate(Request $request,$id){
    
       
     $category = category::find($id);
        $category->update([
            'cat_title' =>$request->category, 
        ]);
        return redirect()->back()->with('success', 'user updated successfully.');
    }

    public function register(){
        return view('auth\register1');
    }
}  