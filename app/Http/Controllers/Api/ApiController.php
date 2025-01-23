<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CompanyResource;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function categories()
    {
        $categories = Category::orderBy('position','asc')->get();
        // return response() -> json($categories); //simply
        return CategoryResource::collection($categories); //for array

    }
    public function company()
    {
        $company = Company::first();
        return new CompanyResource($company); // for object
    }
}
