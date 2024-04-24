<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\brand;
use Illuminate\Http\Request;

class brandcontroller extends Controller
{
    public function index(){    
         $category = brand::all();

        return view('posts.brands.index')->with('category',$category);     
          
      }
      public function create(){
          return view('posts.brands.create');
      
      }
      public function insert(request $request){
              
          // $loggedInUserId = Auth::id();
        $post= brand::create([
        
            'title'=>$request->category,
           ]);
        return redirect()->back()->with('success', 'brand inserted successfully.');
      
      
        }
      
        public function destroy(string $id)
        {
            $category = brand::find($id);
            if (!$category) {
              abort(404);
            }
          
            $category->delete();
            return redirect()->back()->with('success', 'brand deleted successfully.'); 
        }
      
        public function edit(string $id){ 
    
          $category=brand::find($id);
      
          return view('posts.brands.edit')->with('category',$category);
      
      }
      public function update(Request $request,$id){
             
          $category = brand::find($id);
             $category->update([
                 'title' =>$request->category, 
             ]);
         
             return redirect()->back()->with('success', 'Brand updated successfully.');
         }      

        public function order(request $request){
            return $request;


        }
}
