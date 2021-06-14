<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    /**
     * Relation one to many (Inventory).
     */
    public function invetories()
    {
        return $this->hasMany(Inventory::class);
    }
}
