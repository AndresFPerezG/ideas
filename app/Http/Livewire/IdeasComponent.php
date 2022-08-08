<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ideas;

class IdeasComponent extends Component
{
    use WithPagination;

    public $idea_id, $title, $author, $description;

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

        $this->default();
   }

   
   public function edit($id)
   {
       $idea = Ideas::find($id);
       
       $this->idea_id = $idea->id;
       $this->title = $idea->title;
       $this->author = $idea->author;
       $this->description = $idea->description;
       
       $this->view = 'edit';
    }

    public function update()
    {
        $this->validate(['title' => 'required', 'author' => 'required', 'description' => 'required']);

        $idea = Ideas::find($this->idea_id);

        $idea->update([
            'title' => $this->title,
            'author' => $this->author,
            'description' => $this->description
        ]);

        $this->default();
    }
    
    public function destroy($id)
    {
        Ideas::destroy($id);
    }
    
    public function default()
    {
        $this->title = '';
        $this->author = '';
        $this->description = '';

        $this->view = 'create';
    }
}
