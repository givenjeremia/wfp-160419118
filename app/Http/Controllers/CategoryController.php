<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        $jumlah = $data->count();
        return view('category.index',['data'=>$data,'jumlah'=>$jumlah]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
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
        $data = new Category();
        $data->name = $request->get('name');
        $data->save();

        return redirect()->route('kategori_obat.index')->with('status', 'Success Create '.$request->get('name').' Category' );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showlist($idcategory)
    {
        $data = Category::find($idcategory);
        $nama_category = $data->name;

        $product = $data->products;
        // dd($product);
        $total_data = 0;
        if($product){
            $total_data = $product->count();
        }
        else{
            $total_data = 0;
        }
        return view('report.list_producs_by_category',['data'=>$product,'id_category'=>$idcategory,'nama_category'=>$nama_category,'total_data'=>$total_data]);
    }
    public function showProducts()
    {
        $data = Category::find($_POST['category_id']);
        $nama=$data->name;
        $data_product = $data->products;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.showProduct',compact('nama','data_product'))->render()
        ),200);
    }


}
