<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Notification;

class SendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send {notification}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a notification to a user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $text = $this->argument('notification');
        return 0;
    }
}
