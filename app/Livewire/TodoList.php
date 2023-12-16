<?php

namespace App\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{

    public $todos;
    public string $todoText = '';

    public function mount()
    {
        $this-> selectTodos;
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
