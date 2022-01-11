<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function bookmark($place)
    {
        
        auth()->user()->bookmarks()->toggle($place);

        return back();
    }

    public function getByUser()
    {
        $bookmarks = auth()->user()->bookmarks;

        return view('user_bookmarks', compact('bookmarks'));
    }
}
