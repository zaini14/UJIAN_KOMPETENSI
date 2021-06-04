<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BodyTablePetugas extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $allData;
    public $no;
    public $jenis;
    public function __construct($allData, $no, $jenis)
    {
        $this->allData = $allData;
        $this->no = $no;
        $this->jenis = $jenis;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body-table-petugas');
    }
}
