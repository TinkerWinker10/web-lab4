<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id){
        $item = Category::where('id', $id)->first();

        return view('desktop_portfolio', [
            'item'=>$item
        ]);
    }
}
