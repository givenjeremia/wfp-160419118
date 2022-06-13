<?php

namespace App\Http\Controllers;

use App\User;
use App\Buyer;
use App\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Transaction::all();
        $jumlah = $data->count();
        // dd($data);
        return view('transaction.index',['data'=>$data,'jumlah'=>$jumlah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaction.create',['buyer'=>Buyer::all() , 'user'=>User::all()]);
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
        // dd($request->get('transaction_detai'));
        $data = new Transaction();
        $data->user_id = $request->get('user');
        $buyer_new = Buyer::find($request->get('buyer'));
        $buyer_new->user()->save($data);
        return redirect()->route('producttransaction.create')->with('id_transaction', $data->id);
        // return redirect()->route('producttransaction.create',['id' => $data->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function showAjax(Request $request)
    {
        $id = ($request->get('id'));
        // dd($id);
        $data = Transaction::find($id);
        $data_product = $data->products;
        // dd($data_product);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('transaction.showmodal',compact('data','data_product','id'))->render()
        ),200);
    }

    public function detailtransaction($id){
        $data = Transaction::find($id);
        // dd($data);
        $products = $data->products;
        // dd($product);
        
        return view('transaction.detail',['data'=>$data,'products'=>$products]);
    }

    public function submit_front()
    {
        // dd('hallo');
        // $this->authorize('checkmember');
        $this->authorize('checkmember');
        $cart = session()->get('cart');
        $user = Auth::user();

        
        $t = new Transaction;
        $t->users_id = $user->id;
        $t->transaction_date = Carbon::now()->toDatetimeString();
        $t->save();
        $total_harga = $t->insertProduct($cart,$user);
        // dd($total_harga);
        $t->total = $total_harga;
        $t->save();
        session()->forget('cart');
        return redirect('home');        
    }

    public function form_submit_front()
    {
        $this->authorize('checkmember');
        return view("frontend.checkout");
    }

}
