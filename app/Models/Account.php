<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'fName','lName','address','phone','password'
        ];
public function  Customers()
{
    return $this->belongsTo(Customers::class);
}
}
