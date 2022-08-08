<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ideas;

class IdeasComponent extends Component
{
    use WithPagination;

    public $idea_id, $title, $author, $description, $successMessage, $deleteMessage;

    public $view = 'create';

    protected $rules = [
        'title' => 'required|min:6|max:35',
        'author' => 'required|max:15',
        'description' => 'required|min:5|max:255',
    ];

    //Hook to validate fields values real-time
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    public function render()
    {
        return view('livewire.ideas-component', [
            'ideas' => Ideas::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function store()
   {
        $this->validate();

        Ideas::create([
            'title' => $this->title,
            'author' => $this->author,
            'description' => $this->description
        ]);

        $this->successMessage = 'Idea successfully saved';

        $this->default();

        /* session()->flash('success_message', 'Idea successfully saved.'); */
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

        $this->successMessage = 'Idea successfully updated';

        $this->default();

        /* session()->flash('$successMessage', 'Idea successfully updated'); */
    }
    
    public function destroy($id)
    {
        Ideas::destroy($id);

        $this->deleteMessage = 'The Idea was successfully deleted';
    }
    
    public function default()
    {
        $this->title = '';
        $this->author = '';
        $this->description = '';
    }
}
