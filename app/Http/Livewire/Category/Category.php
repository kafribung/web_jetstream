<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    // Data
    public $modal = false;
    public $category_id, $name;

    protected $rules = [
        'name' => ['required', 'min:3', 'max:10']
    ];

    public function render()
    {
        $categories = CategoryModel::get();
        return view('livewire.category.category', ['categories' => $categories]);
    }

    public function create()
    {
        $this->openCloseModal();
        $this->resetFields();
    }

    public function storeOrUpdate()
    {
        $this->openCloseModal();
        $data=  $this->validate();
        CategoryModel::updateOrCreate(
            ['id' => $this->category_id],
            $data,
        );
        session()->flash('msg', 'Category added successfully');  
        $this->resetFields();
        $this->openCloseModal();
    }

    // Modal
    public function openCloseModal()
    {
        $this->modal = !$this->modal;
    }

    // Reset Fields
    public function resetFields()
    {
        $this->name = '';
    }

}
