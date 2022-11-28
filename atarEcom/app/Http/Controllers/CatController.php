<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class CatController extends Controller
{
    //
    function show(){
        // $cat_name = $req->add_cat;
        $cat_model = new CatModel();
        $cat_data = $cat_model->orderBy('id', 'DESC')->get();
        // dd($cat_data[0]['cat_name']);
        return view('admin.cat',['data'=>$cat_data]);
    }


    function add(Request $req){
        $cat_name = $req->add_cat;
        $cat_model = new CatModel();
        $cat_model->cat_name =  $cat_name;
        $cat_model->save();
        
        return redirect('add_cat_show/');
    }

    function showID($id){
        $cat_model = new CatModel();
        $cat_data = $cat_model->where('id',$id)->get();
        // dd($cat_data);
        
        return view('admin.cat_edit',['data'=>$cat_data]);
    }

    function update(Request $req){
        $cat_name = $req->add_cat;
        $cat_id= $req->add_id;
        $cat_model = CatModel::find($cat_id);
        $cat_model->cat_name = $cat_name;
        $cat_model->save();
        
        return redirect('add_cat_show/');
    }

    
}
