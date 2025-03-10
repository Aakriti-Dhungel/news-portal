<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'nep_title' => 'required|max:255',
            'eng_title' => 'required|max:255',
        ]);

        // return $request->all();
        $totalCategory = Category::count();
        $category = new Category();
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->position = $totalCategory + 1;


        $category->save();
        toast('Record Saved Successfully', 'success');

        // return "Saved";
        return redirect()->back();
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nep_title' => 'required|max:255',
            'eng_title' => 'required|max:255',
            'position' => 'required',
        ]);

        // return $request->all();
        $category = Category::find($id);
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->position = $request->position;


        $category->save();
        toast('Record Updated Successfully', 'success');

        // return "Saved";
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $category = Category::find($id);

        $tCategories = Category::where('position', '>', $category->position)->get();

        //return $tCategories;
        foreach ($tCategories as $tcat) {
            $tcat->position = $tcat->position - 1;
            $tcat->update();
        }
        $category->delete();
        toast('Record Deleted Successfully', 'success');
        return redirect()->back();
    }
}
