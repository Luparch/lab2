<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    //const CREATED_AT = 'registered_at'; //не работает
    //const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'customer_id';

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
