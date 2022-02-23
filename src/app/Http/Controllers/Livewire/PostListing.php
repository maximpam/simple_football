<?php

namespace App\Http\Controllers\Livewire; // <---- added Controllers

use App\Models\NewsPost;
use Illuminate\Support\Collection;
use Livewire\Component;

class PostListing extends Component
{
    public $posts;

    public $id = null;

    public $pageNumber = 1;

    public $hasMorePages;

    public function mount()
    {
        $this->posts = new Collection();

        $this->loadPosts();
    }

    public function loadPosts()
    {
        $posts = NewsPost::paginate(12, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $posts->hasMorePages();

        $this->posts->push(...$posts->items());
    }

    public function render()
    {
        return view('livewire.post-listing')->layout('layouts.app');
    }
}
