<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_name',
        'prod_description',
        'prod_image_url',
        'prod_precio',
        'categoria_id'
    ];

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class);
    }

}


