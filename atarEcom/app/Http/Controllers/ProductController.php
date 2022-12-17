<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;
use App\Models\CatModel;
use App\Models\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $cat_model = new CatModel();
        $cat_data = $cat_model->orderBy('id', 'DESC')->get();

        $subcats = SubCatModel::join('categories', 'subcats.cat_id', '=', 'categories.id')
            ->select('subcats.*', 'categories.cat_name')
            ->get();
        // dd($subcats);
        // dd($cat_data[0]['cat_name']);
        return view('admin.product',compact('cat_data','subcats'));
    }

    public function getSubCat($id){
        
        $subcats = SubCatModel::join('categories', 'subcats.cat_id', '=','categories.id')
            ->select('subcats.*', 'categories.cat_name')->where('categories.id',$id)
            ->get();
            return response()->json($subcats);
            // return response()->json($subcats, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        // JSON_UNESCAPED_UNICODE);
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
        
        $product= new ProductModel();

        $product->cat_id = $req->cat_id;
        $product->sub_cat_id = $req->sub_cat_id;
        $product->prod_name = $req->prod_name;
        $product->prod_desc = $req->prod_desc;
        $product->prod_image = $req->prod_image;
        $product->prod_weight = "1;2";
        $product->prod_price ="2;4";
        echo('$req->price_value');
        echo "asdasd"."$product->prod_weight";
        $product->save();

       
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
