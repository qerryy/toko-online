<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    protected $fillable=[
    	'user_id', 'total_price', 'invoice_number', 'status'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
