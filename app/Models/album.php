<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $fillable = [
        'name',
        'sales',
        'year',
        'last_update',
        'cover',
    ];
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    

}
