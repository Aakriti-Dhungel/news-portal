<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
       $total_post = Post::count();
       $total_advertise = Advertise::count();
       $total_category = Category::count();
        return view('dashboard',compact('total_post','total_advertise','total_category'));
    }
}
