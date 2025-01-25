<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ApiController extends Controller
{
    public function categories()
    {
        $categories = Category::orderBy('position','asc')->get();
        // return response() -> json($categories); //simply
        return CategoryResource::collection($categories); //for array

    }

    public function latest_post()
    {
        $latest_news = Post::where('status', 'approved')->orderBy('id', 'desc')->first();
        return new PostResource($latest_news);
    }

    public function trending_posts()
    {
        $trending_posts = Post::where('status', 'approved')->orderBy('views', 'desc')->limit(8)->get();
        return PostResource::collection($trending_posts);
    }
    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return new CategoryResource($category); // for object
    }
    public function company()
    {
        $company = Company::first();
        return new CompanyResource($company); // for object
    }
    public function create_category(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "nep_title" =>"required | unique:post | max:255 ",
            "eng_title" =>"required | unique:post | max:255 ",
            "body"=>"required"
        ]);
        if($validator->fails()){
            return response()->json([
                "status"=>false,
                "message" =>$validator->errors(),
            ]);
        }
        // if($validator->fails()){
        //     return redirect('/post/create')
        //     ->withErrors($validator)
        //     ->withInput();
        // }

        $totalCategory = Category::count();
        $category = new Category();
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->position = $totalCategory + 1;


        $category->save();
        return response()->json([
            "status"=>true,
            "message"=>"Category created Successfully",
        ]);
        
    }
}
