<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        ];
public function  Accounts()
{
    return $this->hasOne(Accounts::class, 'foreign_key');
}
public function  Services()
{
    return $this->hasMany(Services::class, 'foreign_key');
}
}
