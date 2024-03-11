<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;


class UserTable extends Component
{
    use WithPagination;
    public $search = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::search($this->search)->paginate(10),
        ]);
    }
}
