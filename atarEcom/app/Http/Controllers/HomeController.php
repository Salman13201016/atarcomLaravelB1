<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;
use App\Models\SubCatModel;
class HomeController extends Controller
{
    //
    function homePageShow(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        // dd($subcats);
        return view('home',["data"=> $subcats]);
    }
}
