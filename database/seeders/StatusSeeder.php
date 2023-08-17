<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [ 
            'status_name' => 'serving'
            ],
            [ 
            'status_name' => 'done'
            ],
            [ 
            'status_name' => 'called'
            ],
            [ 
            'status_name' => 'not called'
            ]
        ];

        Status::insert($status);
    }
}
