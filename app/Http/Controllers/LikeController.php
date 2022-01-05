<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Review;

class LikeController extends Controller
{
    
    public function store(Request $request)
    {
        $request->user()->likes()->attach($request->review_id);

        return Review::find($request->review_id)->likes()->count();
    }
}
