<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    
    public $search = '';
 
    public function render()
    {
        
        return view('livewire.search', [
            'users' => user::where('name', 'like', '%'.$this->search.'%')->get(),
        ]);
    }
}
