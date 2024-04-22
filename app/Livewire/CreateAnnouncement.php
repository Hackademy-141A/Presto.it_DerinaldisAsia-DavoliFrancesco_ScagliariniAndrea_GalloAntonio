<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Validation;
class CreateAnnouncement extends Component
{
    
    use WithFileUploads;
    
    public $image;
    public $temporary_images;
    public $images = [];
    
    
    #[Validate('required', message: "Il campo è obbligatorio")]
    public $title;
    
    #[Validate('required', message: "Il campo è obbligatorio")]
    #[Validate('max:500', message: "Il campo è di massimo 500 caratteri")]
    public $description;
    
    
    #[Validate('required', message: "Il campo è obbligatorio")]
    #[Validate('numeric', message: "Il prezzo deve essere un numero")]
    #[Validate('min:1', message: "Il prezzo deve essere minimo 1")]
    public $price;
    // #[Validate('max:1000', message: "Il prezzo deve essere massimo 1000")]
    
    
    #[Validate('required', message: "Il campo è obbligatorio")]
    public $category;
    
    
    
    protected $rules = [
        
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'
    ];
    
    protected $messages = [
        
        'images.max' => "l'immagine deve essere massimo di 1MB",
        'temporary_images.*.required' => "L' immagine è richiesta",
        'temporary_images.*.image' => "i file devono essere immagini",
        'temporary_images.*.max' => "l'immagine deve essere massimo di 1MB",
    ];
    
    
    
    public $announcement;
    
    public function store(){
        $this->validate();
          
    
        
       
        
        $announcement= Category::find($this->category)->announcements()->create([
            
            
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            
            
            
            
        ]);
        
        if (count($this->images)) {

            foreach ($this->images as $image) {

                $announcement->images()->create(['path' => $image->store('images', 'public')]);

               


       }
       }        

        Auth::user()->announcements()->save($announcement);
       
        
        
        $this->cleanForm();
        
        session()->flash('message','Annuncio inserito correttamente');
    }
    
    protected function cleanForm(){
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category ="";
        $this->images=[];
        $this->temporary_images=[];
    }
    public function updatedTemporaryImages()
    {
        if(
        $this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])
        ){
        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
        }
    }
    
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
    
    
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
    
    
}
