<?php

namespace App\Jobs\Excel;

use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Spatie\SimpleExcel\SimpleExcelWriter;

class UserDetailsWriteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $path = public_path().'/excel';
        \File::isDirectory($path) or \File::makeDirectory($path, 0777, true, true);

        $pathToCsv = public_path('excel/'.$this->user->id.'_'.time().'.csv');
        
        // touch($pathToCsv);

        $writer = SimpleExcelWriter::create($pathToCsv)
                    ->addRow([
                        'name' => $this->user->name,
                    ]);
    }
}
