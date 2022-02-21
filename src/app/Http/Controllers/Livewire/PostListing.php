<?php

namespace App\Http\Controllers\Livewire; // <---- added Controllers

use Livewire\Component;

class PostListing extends Component
{
    public function render()
    {
        return view('livewire.post-listing');
    }

    public function index(){
        dd(1);
    }
}
