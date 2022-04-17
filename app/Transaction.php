<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function buyer(){
        return $this->belongsTo('App\Buyer','buyer_id');
    }

    public function products(){
        return $this->belongsToMany('App\Product','product_transaction','transaction_id','products_id')->withPivot('quantity','price');;
    }


    
}
