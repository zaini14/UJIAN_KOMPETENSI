<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $jenis;
    public $row;
    public $allData;
    public $no;

    public function __construct($allData, $no, $jenis, $row)
    {
        $this->allData = $allData;
        $this->no = $no;
        $this->jenis = $jenis;
        $this->row = $row;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabel');
    }
}
