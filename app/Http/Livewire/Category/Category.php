<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    // Data
    public $modal = false;
    public $name;

    public function render()
    {
        
        $categories = CategoryModel::get();
        return view('livewire.category.category', ['categories' => $categories]);
    }

    public function createOrUpdate()
    {
        $this->openCloseModal();
    }

    public function openCloseModal()
    {
        $this->modal = !$this->modal;
    }

    public function resetFields()
    {
        $this->name = '';
    }

}
