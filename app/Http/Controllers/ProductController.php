<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query Raw
        $list_data = DB::select(DB::raw('select * from products'));
        
        //Query Buider
        $list_data = DB::table('products')->get();

        //Eloquent
        $list_data = Product::all();
        // dd($list_data);
        return view('product.index',['data'=>$list_data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        //
        $res = Product::find($product);
        $message = "";
        if($res){
            $message = $res;
        }
        else{
            $message = null;
        }
        // dd($res);
        return view('product.show',['item'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function showInfo()
    {
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
            Did you know? <br>This message is sent by a Controller.'</div>"
        ),200);
    }

    

}
