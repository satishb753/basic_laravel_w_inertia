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
    protected $signature = 'notification:insert {notificationName} {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert a notification to users table';

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
        $text = $this->argument('notificationName');
        $user_id = $this->argument('user_id');

        //Create a new notification
        try{
            Notification::create([
                'description' => $text,
                'user_id' => $user_id,
            ]);
        } catch(Illuminate\Database\QueryException $ex) {
            $errorcode = $ex->errorInfo[0];
            $this->error($errorcode);
        }
        
        return;
    }
}
