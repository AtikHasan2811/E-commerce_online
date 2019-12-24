<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function category(){
        return $this->belongsTo('App\category');
    }

//    protected $table='products';
//    protected $primaryKey='id';
//    protected $fillable = [
//        'pro_name', 'pro_code', 'pro_price','pro_info', 'stock', 'category_id','image', 'spl_price',
//    ];
}




