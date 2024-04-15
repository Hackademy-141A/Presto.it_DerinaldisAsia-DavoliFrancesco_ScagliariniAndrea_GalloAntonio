<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{
    
    #[Validate('min:3', message: 'Questo campo deve essere di almeno 3 caratteri')]
    #[Validate('required', message: 'Questo campo è obbligatorio')]
    public $title;
    
    #[Validate('min:1', message: 'Questo campo deve essere di almeno 1 carattere')]
    #[Validate('required', message: 'Questo campo è obbligatorio')]
    public $price;
    
    #[Validate('min:10', message: 'Questo campo deve essere di almeno 10 caratteri')]
    #[Validate('required', message: 'Questo campo è obbligatorio')]
    public $description;
    
    public function store(){
        
        $this->validate();
        
        Announcement::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,

            
        ]);
        
        $this->cleanForm();
        
        session()->flash('message','Annuncio inserito correttamente');
    }
    
    protected function cleanForm(){
        $this->title = "";
        $this->description = "";
        $this->price = "";
    }
    
    
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
