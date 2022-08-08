<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table='contacts';
    protected $fillable=['type','value'];

    //Declaring inverse of relationship with 
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
