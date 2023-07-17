<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'product_id',
        'transaction_id',
        'quantity',
    ];

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
