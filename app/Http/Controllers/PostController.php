<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function GetTheSotre(Request $request)
    {
        // from validation
          $validated = $request->validate([
        'name' => 'required|unique:posts|max:255',
        'description' => 'required',
        'image' => 'nullable|mimes:jpg,png,webp',
    ]);
    // upload image
     $imagerequest=null;
    if(isset($request->image))
    {
        $imagerequest=time().".".$request->image->extension();
        $request->image->move(public_path('images'),$imagerequest);
    }

        // Data Base connection
          $post = new Post;
          $post->name = $request->name;
          $post->description = $request->description;
          $post->image = $imagerequest;
          $post->save();
           return redirect()->route('home')->with('success', 'Item successfully added into the data base!');
    }
    public function editit($id)
    {
        $post=Post::findOrFail($id);
        
        return view('edit',['ourpost'=>$post]);
    }
    public function updateit(Request $request,$id)
    {
       $validated = $request->validate([
        'name' => 'required|unique:posts|max:255',
        'description' => 'required',
        'image' => 'nullable|mimes:jpg,png,webp',
    ]);
    // upload image
    

        // Data Base connection
          $post=Post::findOrFail($id);
          $post->name = $request->name;
          $post->description = $request->description;
          if(isset($request->image))
    {
        $imagerequest=time().".".$request->image->extension();
        $request->image->move(public_path('images'),$imagerequest);
        $post->image = $imagerequest;
    }
          $post->save();
           return redirect()->route('home')->with('success', 'Item successfully updated into the data base!');

    }
    public function deleteit($id)
    {
         $post=Post::findOrFail($id);
          $post->delete();
          flash()->success('Product created successfully!');
           return redirect()->route('home')->with('error', 'delete successfully  into the data base!');
    }
    public function getregister()
    {
        return view("register");
    }
    public function getlogin()
    {
        return view('login');
    }
}
