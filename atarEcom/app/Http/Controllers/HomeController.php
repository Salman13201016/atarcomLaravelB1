<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;
use App\Models\SubCatModel;
use App\Models\ProductModel;

class HomeController extends Controller
{
    //
    function homePageShow(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        // dd($subcats);

        // Taking last Four product 
        $products = ProductModel::orderBy('id', 'DESC')
                  ->take(4)
                  ->get();

        return view('home',["data"=> $subcats, "products" => $products]);
    }
}
