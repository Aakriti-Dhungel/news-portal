<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",           
            "categories" => "required",
            "image" => "required|max:2048"

        ]);

        // return $request->all();
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->categories = $request->categories;
        $post->meta_words = $request->meta_words;
        $post->meta_description = $request->meta_description;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $post->image = 'images/' . $fileName;
        }
        $post->save();

        $post->categories()->attach($request->categories); //different categories post attachted in their order 

        toast('Record Saved Successfully', 'success');

        // return "Saved";
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
