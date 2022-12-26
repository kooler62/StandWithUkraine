<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StandWithUkraine1Command extends Command
{
    protected $signature = 'stand';
    protected $description = 'Stand With Ukraine';

    public function handle()
    {
        $this->line('<fg=#fc0;bg=#06c>#StandWith</><fg=#06c;bg=#fc0>Ukraine</>');
    }
}
