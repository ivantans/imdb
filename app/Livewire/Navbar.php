<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $search, $nav = false;
    public $pesan;
    public function render()
    {
        return view('livewire.navbar');
    }

    public function searchToggle()
    {
        $this->nav = false;
        $this->search = !$this->search;
    }
    public function navToggle(){
        $this->search = false;
        $this->nav = !$this->nav;
    }

    public function searchItem(){
        return $this->pesan = "berhasil";
    }

}
