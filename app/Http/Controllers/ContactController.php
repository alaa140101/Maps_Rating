<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('report');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Report::create($data);
    }
}
