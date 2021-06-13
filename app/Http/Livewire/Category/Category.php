<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public function render()
    {
        $categories = CategoryModel::get();
        return view('livewire.category.category', ['categories' => $categories]);
    }
}
