<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhoto extends Component
{
    use WithFileUploads;
    
    public $photo;

    public function render()
    {
        return view('livewire.user.upload-photo');
    }

    public function uploadPhoto()
    {

        $this->validate([
            'photo' => 'required|image|max:2048',
        ]);

        $filename = time() . '.' . $this->photo->extension();
        $path = $this->photo->storeAs('users', $filename);

        if($path){
            auth()->user()->update(['profile_photo_path' => $filename]);
        }


        return redirect()->route('tweets.index');
    }
}
