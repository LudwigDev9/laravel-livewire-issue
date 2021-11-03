<?php

namespace App\Http\Livewire;

use App\Models\TestSubItems;
use App\Models\Test;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class TestApp extends Component
{
    use AuthorizesRequests;

    public $search = '';
    public $items = null;
    public $subItems = null;
    public $message = '';
    public $warning = false;

    public function render()
    {
        return view('livewire.bin-app');
    }

    public function search()
    {
        $this->items = null;
        $this->subItems = null;

        if ($this->search) {
            $this->items = Test::where('ItemNo', $this->search)->get();
            if (!$this->items->isEmpty()) {
                $this->warning = false;
                $this->message = '';

                $this->subItems = TestSubItems::where('ItemNo', $this->search)->get();
            }

            if ($this->items->isEmpty()) {
                $this->message = 'Not found';
            }
        }
    }
}
