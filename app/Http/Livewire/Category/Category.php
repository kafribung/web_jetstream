<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    // Data
    public $modal = false, $modalDelete = false;
    public $category_id, $name;

    protected $rules = [
        'name' => ['required', 'min:3', 'max:10']
    ];

    public function render()
    {
        $categories = CategoryModel::paginate(3);
        return view('livewire.category.category', ['categories' => $categories]);
    }

    public function create()
    {
        $this->resetFields();
        $this->openCloseModal();
    }

    public function edit($id)
    {
        $this->openCloseModal();
        $category = CategoryModel::findOrFail($id);
        $this->name = $category->name;
        $this->category_id = $id;
    }

    public function storeOrUpdate()
    {
        $data= $this->validate();
        CategoryModel::updateOrCreate(
            ['id' => $this->category_id],
            $data,
        );
        session()->flash('msg', $this->category_id? 'Category update success' : 'Category add successfully');  
        $this->resetFields();
        $this->openCloseModal();
    }

    public function delete($id)
    {
        $this->openCloseModalDelete();
        $this->category_id = $id;
    }

    public function destroy()
    {
        $this->openCloseModalDelete();
        $category = CategoryModel::findOrFail($this->category_id);
        $category->delete();
        $this->resetFields();
        session()->flash('msg', 'Category delete success');
    }

    // Modal Delete
    public function openCloseModalDelete()
    {
        $this->modalDelete = !$this->modalDelete;
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
        $this->category_id = '';
    }

}
