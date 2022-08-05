<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ideas;

class IdeasComponent extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.ideas-component', [
            'ideas' => Ideas::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function destroy($id)
    {
        Ideas::destroy($id);
    }
}
