<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;
use App\Models\SubCatModel;
use Illuminate\Support\Facades\DB;

class SubCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cat_model = new CatModel();
        $cat_data = $cat_model->orderBy('id', 'DESC')->get();

        $subcats = SubCatModel::join('categories', 'subcats.cat_id', '=', 'categories.id')
            ->select('subcats.*', 'categories.cat_name')
            ->get();
        // dd($subcats);
        // dd($cat_data[0]['cat_name']);
        return view('admin.subCat',compact('cat_data','subcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $sub_cat_name = $req->add_sub_cat;
        $cat_id = $req->cat_id;
        $sub_cat_model = new SubCatModel();

        $sub_cat_model->cat_id =  $cat_id;
        $sub_cat_model->sub_cat_name =  $sub_cat_name;
        
        $sub_cat_model->save();
        
        return redirect('subcat/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
