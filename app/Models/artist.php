<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    protected $fillable = [
        'name',
        
    ];
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
    
}

