<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    
    protected $table = 'shopping';

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
