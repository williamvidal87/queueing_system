<?php

namespace App\Http\Livewire\Queueing;

use App\Models\Message;
use App\Models\Queue;
use Livewire\Component;

class QueueingDisplay extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.queueing.queueing-display',[
        'show_serving_number'   =>  Queue::where('called_id', 1)->first()
        ]);
    }
    
    public function next_queue()
    {
        $check_status=Queue::where('status_id', 1)->first();
        if($check_status->status_id ?? null==1) {
                $this->emit('playAudio'.$check_status->id);
                $update = ([
                    'status_id'    => 2,
                ]);
                Queue::find($check_status->id)->update($update);
            }
    }
    
    public function mount()
    {
        $show_message=Message::where('id',1)->get()->first();
        $this->message=$show_message['message'];
    }
}
