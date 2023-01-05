<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class frontendController extends Controller
{
    public function index()
    {

       return view('website.index');

    }

    public function view()
    {
        return view('website.show');
    }
}
