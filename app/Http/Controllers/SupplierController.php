<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Supplier::all();
        $jumlah = $data->count();
        return view('supplier.index',['data'=>$data,'jumlah'=>$jumlah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create');
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
        $data = new Supplier();

        $file = $request->file('logo');
        $img_folder = 'img';
        $img_file = time().'_'.$file->getClientOriginalName();
        $file->move($img_folder, $img_file);
        
        $data->logo =$img_file;
        $data->name = $request->get('name');
        $data->address = $request->get('address');
        $data->save();

        return redirect()->route('supplier.index')->with('status', 'Success Create '.$request->get('name').' Supplier' );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
        // dd($supplier);
        // $supplier = Supplier::find($supplier);
        // dd($supplier);
        return view('supplier.edit',['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');
        $supplier->save();
        return redirect()->route('supplier.index')->with('status', 'Success Update '.$request->get('name').' Supplier' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
        // dd($supplier);
        $this->authorize('delete-permission',$supplier);
        
        try {    
            $supplier->delete();
            return redirect()->route('supplier.index')->with('status', 'Success Delete Supplier' );  
        } catch (\Throwable $th) {
            $msg = "Supplier Gagal Di Hapus. Pastikan Data Child SUdah Hilang Atau Tidak Behubungan";
            return redirect()->route('supplier.index')->with('status', 'Error '.$msg );  
        }
    }

    public function getEditForm(Request $request){
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm', compact('supplier'))->render()
        ),200);
    }

    public function getEditForm2(Request $request){
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm2', compact('supplier'))->render()
        ),200);
    }

    public function saveData(Request $request){
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');
        $supplier->save();

        return response()->json(array(
            'status'=>'ok',
            'msg'=> 'supplier data updated '
        ),200);
    }

    public function deleteData(Request $request){
        try {    
            $id = $request->get('id');
            $supplier = Supplier::find($id);
            $supplier->delete();
            return response()->json(array(
                'status'=>'ok',
                'msg'=> 'Success Delete Supplier'
            ),200);

        } catch (\Throwable $th) {
            $msg = "Supplier Gagal Di Hapus. Pastikan Data Child SUdah Hilang Atau Tidak Behubungan";
            return response()->json(array(
                'status'=>'error',
                'msg'=> $msg
            ),200);
        }
    }

    public function saveDataField(Request $request){
        $id = $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        $supplier = Supplier::find($id);
        $supplier->$fname = $value;
        $supplier->save();

        return response()->json(array(
            'status'=>'ok',
            'msg'=> 'supplier data updated '
        ),200);
    }
    
    public function changeLogo(Request $request){
        $id = $request->get('id');
        $file = $request->file('logo');
        $img_folder = 'img';
        $img_file = time().'_'.$file->getClientOriginalName();
        $file->move($img_folder, $img_file);

        $supplier = Supplier::find($id);
        $supplier->logo = $img_file;
        $supplier->save();

        return redirect()->route('supplier.index')->with('status', 'Success Update Logo Supplier' );
    }

}
