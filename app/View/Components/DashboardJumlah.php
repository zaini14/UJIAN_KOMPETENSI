<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardJumlah extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $siswa;
    public $petugas;
    public $guru;
    
    public function __construct($siswa, $petugas, $guru)
    {
        $this->siswa = $siswa;
        $this->petugas = $petugas;
        $this->guru = $guru;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-jumlah');
    }
}
