<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ideas;

class IdeasComponent extends Component
{
    use WithPagination;

    public $title, $author, $description;

    public $view = 'create';

    public function render()
    {
        return view('livewire.ideas-component', [
            'ideas' => Ideas::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function store()
   {
    $this->validate(['title' => 'required', 'author' => 'required', 'description' => 'required']);

    Ideas::create([
        'title' => $this->title,
        'author' => $this->author,
        'description' => $this->description
    ]);
   }

    public function destroy($id)
    {
        Ideas::destroy($id);
    }
}
