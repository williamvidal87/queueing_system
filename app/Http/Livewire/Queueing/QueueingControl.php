<?php

namespace App\Http\Livewire\Queueing;

use App\Models\Queue;
use Livewire\Component;

class QueueingControl extends Component
{
    public function render()
    {
        return view('livewire.queueing.queueing-control',[
            'show_serving_number'   =>  Queue::where('called_id', 1)->first()
            ]);
    }
    
    public function mount()
    {
        $check_date=Queue::where('id', 1)->first();
        date_default_timezone_set('Asia/Manila');
        $day= date('d') ;
        if(($check_date->updated_at)->format('d')!=$day)
        {
            $ChangeData=Queue::all();
            foreach ($ChangeData as $changedata) {
                $update_all = ([
                    'status_id'    => null,
                    'called_id'    => null,
                ]);
                Queue::find($changedata->id)->update($update_all);
            }
        }
    }
    
    public function recall()
    {
        $check_status=Queue::where('status_id', 2)->where('called_id', 1)->first();
        if($check_status->status_id ?? null==1) {
            $update = ([
                'status_id'    => 1,
            ]);
            Queue::find($check_status->id)->update($update);
        }
    }
    
    public function next()
    {
        $check_status=Queue::where('status_id', 2)->where('called_id', 1)->first();
            $update = ([
                'called_id'    => 2,
            ]);
            
            if($check_status->status_id ?? null==2) {
                Queue::find($check_status->id)->update($update);
                $check_next=Queue::where('status_id', null)->where('called_id', null)->first();
                $update_next = ([
                    'status_id'    => 1,
                    'called_id'    => 1,
                ]);
                Queue::find($check_next->id)->update($update_next);
            }
            
            
            $check_first_id=Queue::where('id', 1)->first();
            if ($check_first_id->status_id==null) {
                $check_next=Queue::where('status_id', null)->where('called_id', null)->first();
                $update_next = ([
                    'status_id'    => 1,
                    'called_id'    => 1,
                ]);
                Queue::find($check_next->id)->update($update_next);
            }
            
            
    }
}
