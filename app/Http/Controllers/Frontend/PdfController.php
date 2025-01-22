<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfController extends Controller
{
    public function generatePdf($id)
    {
        // return "hello";
        $post = Post::find($id);
        return Pdf::view('pdf',compact('post'));

    }
}
