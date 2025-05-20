<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    
        public function index()
    {
        Log::info('index');
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function show($id)
    {
        return response()->json(['message' => "Post con ID $id"]);
    }

}