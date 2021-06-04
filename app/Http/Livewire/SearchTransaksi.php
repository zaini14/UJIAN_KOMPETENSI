<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class SearchTransaksi extends Component
{

	public $query;
	public $siswa;

	public function mount()
	{
		$this->resetFilters();
	}
	public function resetFilters()
	{
		$this->query= '';
		$this->siswa = [];
	}

	public function updatedQuery()
	{
		sleep(1);
    	if (strlen($this->query) > 0) {
    		$this->siswa = Siswa::where('nama', 'like', "%" .$this->query. "%")
			->get();
    	}
	}


    public function render()
    {	
        return view('livewire.search-transaksi');
    }
}
