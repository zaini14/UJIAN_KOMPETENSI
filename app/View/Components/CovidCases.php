<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class CovidCases extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $result = '';
    public function __construct()
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' =>  'covid-19-coronavirus-statistics.p.rapidapi.com',
            'x-rapidapi-key' => '011280c1bemsh0c11028ba443a60p1e46eejsnc88f4ae399b9' 
        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats',[
            "country" => 'Indonesia'
        ]); 

        $this->result = $response['data']['covid19Stats'][0];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.covid-cases');
    }
}
