<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function bookmark($place_id)
    {
        auth()->user()->bookmarks()->toggle($place_id);

        return back();
    }
}
