<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function dbqueryshowlistcategory()
    {
        $data = DB::table('categories')->get();
        $jumlah = $data->count();
        // dd($data);
        return view('report.list_category',['title'=>'Category','data'=>$data,'jumlah'=>$jumlah]);
    
    }
    public function eloquentshowlistcategory()
    {
        $data = Category::all();
        dd($data);
    }

    public function dbqueryshowlistproduct()
    {
        $data = DB::table('products')->select('generic_name','form','product_price')->get();
        dd($data);
    }

    public function eloquentshowlistproduct()
    {
        $data = Product::all();
        $jumlah = $data->count();
        // dd($data);
        return view('report.list_product',['title'=>'Product','data'=>$data,'jumlah'=>$jumlah]);

    }

    public function dbquerylistproductandcategory()
    {
        $data = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->select('products.generic_name','products.form','products.product_price' , 'categories.name')->get();
        dd($data);
    }
    public function elequentlistproductandcategory()
    {
        $data = Category::all();
        $product =[];
        foreach($data as $item){
            array_push($product,$item->products);
        }

        return view('report.list_products_category',['title'=>'Product','category'=>$data,'product'=>$product,'jumlah'=>5]);
        
    }

    //AGG
    //1
    public function dbquerycountcategorywithproduct(){
        $data = DB::table('categories')
        ->join('products','categories.id','=','products.category_id')
        ->select('products.category_id')
        ->distinct()
        ->get();
        $count = $data->count();
        dd($count);
    }
    public function eloquentcountcategorywithproduct(){
        $data = Product::distinct('category_id')->count('category_id');
        // dd($data);
        $keterangan = 'Terdapat '.$data.' Category Yang Memiliki Product';
        return view('report.perhitungan',['title'=>'Count Category With Product','keterangan'=>$keterangan]);
    }
    //2
    public function dbqueryshowcategorynoproduct(){
        $data = DB::table('categories')
        ->leftjoin('products','categories.id','=','products.category_id')
        ->where('products.category_id',NULL)
        ->get();
        dd($data);
    }
    public function eloquentshowcategorynoproduct(){
        $data = Category::leftjoin('products','categories.id','=','products.category_id')->where('products.category_id',NULL)->get();
        $jumlah = $data->count();
        // dd($data);
        return view('report.list_category',['title'=>'Category No Product','data'=>$data,'jumlah'=>$jumlah]);
    }
    //3
    public function dbqueryaveragepricecategory(){
        $data = DB::table('categories')
        ->select('categories.name', DB::raw('IFNULL(AVG(products.product_price),0) as rata_rata'))
        ->leftjoin('products','categories.id','=','products.category_id')
        ->groupBy('categories.id')
        ->get();
        dd($data);
    }
    public function eloquentaveragepricecategory(){
        $data = Category::select('categories.name', DB::raw('IFNULL(AVG(products.product_price),0) as rata_rata'))
        ->leftjoin('products','categories.id','=','products.category_id')
        ->groupBy('categories.id')->get();
        // dd($data);
        return view('report.list_avgprice_category',['title'=>'Average Price Category','data'=>$data]);
    }
    //4
    public function dbquerycategoryoneproduct(){
        $data = DB::table('categories')
        ->select('categories.name')
        ->join('products','categories.id','=','products.category_id')
        ->groupBy('categories.name')
        ->havingRaw('COUNT(products.category_id) = ?' ,[1])
        ->get();
        dd($data);
    }
    public function elequentcategoryoneproduct(){
        $data = Product::groupBy('category_id')
        ->havingRaw('COUNT(category_id) = ?' ,[1])
        ->get();
        $name_category = [];
        foreach($data as $item){
            $category_id = $item->category_id;
            $data2 = Category::find($category_id);
            array_push($name_category, $data2);
        }
        $jumlah = $data->count();
        // dd($name_category);
        return view('report.list_category',['title'=>'One Product Category','data'=>$name_category , 'jumlah'=>$jumlah]);
    }
    //5
    public function dbqueryproductoneform(){
        $data = DB::table('products')
        ->groupBy('generic_name')
        ->havingRaw('COUNT(form) = ?' ,[1])
        ->get();
        dd($data);
    }
    public function elequentproductoneform(){
        $data = Product::groupBy('generic_name')->havingRaw('COUNT(form) = ?' ,[1])->get();
        $jumlah = $data->count();
        // dd($data);
        return view('report.list_product',['title'=>'One Product Formula','data'=>$data , 'jumlah'=>$jumlah]);
    }
    //6
    public function dbqueryhighproductprice(){
        $data = DB::table('categories')
        ->select('categories.name' , 'products.generic_name','products.product_price')
        ->join('products','categories.id','=','products.category_id')
        ->where('products.product_price','=',function($query){
            $query->select(DB::raw('max(product_price)'))->from('products');
        })
        ->get();
        dd($data);
    }
    public function elequenthighproductprice(){
        $product = Product::all();
        $max_price = $product->max('product_price');
        $product_maxprice = $product->where('product_price',$max_price);
        $jumlah = $product_maxprice->count();
        // dd($product_maxprice);
        return view('report.list_product',['title'=>'High Product Price','data'=>$product_maxprice , 'jumlah'=>$jumlah]);
    }


}
