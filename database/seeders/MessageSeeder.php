<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = [
            [ 
            'message' => 'Negros Oriental State of University - Guihulngan Campus  (Norsu-G Campus)'
            ]
        ];

        Message::insert($message);
    }
}
