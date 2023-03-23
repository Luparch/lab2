<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'address_id';

    public function customer()
    {
        $this->belongsTo(Customer::class);
    }
}
