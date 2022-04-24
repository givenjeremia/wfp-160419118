<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
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
        // $list_data = DB::select(DB::raw('select * from products'));
        
        // //Query Buider
        // $list_data = DB::table('products')->get();

        //Eloquent
        $list_data = Product::all();
        // dd($list_data);
        return view('product.index',['data'=>$list_data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();

        return view('product.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation File
        // request()->validate([
        //     'image_product' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
      
        // $files = $request->file('image_product');
        // $destinationPath = 'public/img/'; // upload path
        // $profileImage = date('YmdHis') . ".jpg";
        // $files->move($destinationPath, $profileImage);
        $data = new Product();
        $data->generic_name = $request->get('generic_name');
        $data->description = $request->get('desc');
        $data->form = $request->get('form');
        $data->restriction_formula = $request->get('restriction_formula');
        $data->faskes_tk1 = !empty($request->get('faskes_tk1'))  ? 1 : 0; 
        $data->faskes_tk2 = !empty($request->get('faskes_tk2'))  ? 1 : 0; 
        $data->faskes_tk3 = !empty($request->get('faskes_tk3'))  ? 1 : 0; 
        $data->product_price = $request->get('product_price');

        // $imagePath = $request->file('image_product');
        // $imageName = $imagePath->getClientOriginalName();
        // $path = $request->file('image_product')->storeAs('img', $imageName, 'public');
        // $data->image = $profileImage;

        $category_new = Category::find($request->get('category'));
        $category_new->products()->save($data);
        return redirect()->route('obat.index')->with('status', 'Success Create '.$request->get('name').' Category' );
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
