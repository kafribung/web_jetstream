<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_ad'];

    /**
     * Relation many to one (Category).
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
