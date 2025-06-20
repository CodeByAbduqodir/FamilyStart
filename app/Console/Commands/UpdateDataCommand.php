<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:update';

    
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Data updated successfully!');
    }
}
