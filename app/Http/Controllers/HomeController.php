<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $category = Category::orderBy('created_at')->take(16)->get();

        return view('desktop_container', [
            'category'=>$category
        ]);
    }
}
