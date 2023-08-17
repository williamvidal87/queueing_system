<?php

namespace App\Http\Livewire\Upload;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class UploadVideo extends Component
{
    use WithFileUploads;
    
    public  $videos = [];
    public  $temp_videos = [];
    public  $data = [];
    
    public function render()
    {
        return view('livewire.upload.upload-video');
    }
    
    public function store()
    {
        $this->validate([
            'videos.*' => 'required|file|mimetypes:video/mp4',
        ]);
            
            foreach ($this->videos as $key => $video) {
                $this->videos[$key] = $video->store('videos');
            }
            
        $this->videos = json_encode($this->videos);
        
        
        $this->data = ([
            'video'                     => $this->videos
        ]);

        try {
        
            Video::find(1)->update($this->data);
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
    }
}
