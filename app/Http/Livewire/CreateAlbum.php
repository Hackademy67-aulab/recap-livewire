<?php

namespace App\Http\Livewire;

use App\Models\Album;
use App\Models\Genre;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateAlbum extends Component
{
    public $title;
    public $artist;
    public $release;
    public $description;
    public $genresSelected;

    protected $rules = [
        'title' => 'required',
        'artist' => 'required',
        'release' => 'required',
        'description' => 'required',
        'genresSelected'=>'required'
    ];

    // protected $messages=[
    //     'title.required'=>'il titolo e\' richiesto'
    // ];

    public function store(){

        $this->validate();

        $album = Album::create([
            'title'=>$this->title,
            'artist'=>$this->artist,
            'release'=>$this->release,
            'description'=>$this->description,
            'user_id'=>Auth::user()->id
        ]);

        $album->genres()->attach($this->genresSelected);

        $this->reset();

        return redirect(route('homePage'))->with('message','Hai memorizzato correttamente l\'album');
    }

    public function render()
    {
        return view('livewire.create-album', 
            [
                'allGeners'=>Genre::all()
            ]
        );
    }
}
