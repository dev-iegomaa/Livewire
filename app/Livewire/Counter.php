<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 1;

    public string $name = 'Ibrahim';
    public string $email = 'dev.ibrahimesam67@gmail.com';
    public string $phone = '01098850389';
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.counter');
    }

    public function increment(): int
    {
        return $this->count++;
    }

    public function decrement(): int
    {
        return $this->count--;
    }
}
