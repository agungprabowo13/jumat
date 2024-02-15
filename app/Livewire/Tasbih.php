<?php

namespace App\Livewire;

use Livewire\Component;


class Tasbih extends Component
{
    public $hitungan = 0;
    public $kelipatan;
    public $batas;
    public $pesan = '';


    public function tambah()
    {
        if ($this->kelipatan && $this->batas == '') {
            $this->hitungan++;
        } else {
            if ($this->hitungan == $this->batas && $this->hitungan != 0) {
                $this->hitungan = 0;
            } else {
                $this->hitungan++;
            }
        }
    }
    public function kosongkan()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.tasbih');
    }
}
