<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
        public $searchTerm = ''; // Properti untuk menyimpan input pencarian

        public function render()
        {   
            $results = [];

            // Jika ada input pencarian, lakukan pencarian di database
            if ($this->searchTerm != '') {
                $results = ::where('name', 'like', '%' . $this->searchTerm . '%')->get();
            }

            return view('livewire.search', ['results' => $results]);
        }
    
}