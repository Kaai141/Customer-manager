<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table='customers';
    protected $fillable=['idno','type','name','address','gender','dob', 'timestamp', 'contacts'];

    public function contacts(): HasMany
    {
        return $this->hasMany(contact::class);
        // return $this->hasMany(Post::class, 'foreign_key');
    }
}
