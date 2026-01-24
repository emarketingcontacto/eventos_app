<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'cat_description'
    ];

    public function productos():HasMany{
        return $this->hasMany(Producto::class);
    }

}
