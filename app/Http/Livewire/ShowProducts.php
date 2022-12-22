<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\View\Components\Component as ComponentsComponent;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{
    public $search='';
    public $category=null;
    use WithPagination; 
    protected $paginationTheme='bootstrap';

    public function categorize($ctid)
    {
        $category= Category::where('id',$ctid)->first() ;
       
    }

    public function render()
    {
        return view('livewire.show-products', [
            'products' => Product::where('product_name','like','%'.$this->search.'%')->paginate(6),
            'categories' => Category::all()

        ]);
}

public function updatingSearch(){
    $this->resetPage();
}
}