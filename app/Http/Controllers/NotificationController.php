<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notification;

class NotificationController extends Controller
{
    
    public function databaseQTimeTest(){
        $time_start = microtime(true);
    
        $notification250000 = Notification::where('description','LIKE','%Magni sunt sed quisquam%')->get();
    
        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start);

        var_dump($execution_time);
        dd($notification250000);
    }

}
