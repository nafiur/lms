<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Flasher\Prime\FlasherInterface;


class Counter extends Component
{
    
    public $count = 0;
    
    public function render()
    {
        return view('livewire.counter');
    }

    public function increase(FlasherInterface $flasher)
    {
        $flasher->addSuccess('Incresed successfully.');
        $this->count++;
    }
}
