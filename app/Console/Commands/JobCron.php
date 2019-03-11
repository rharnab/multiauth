<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Notifications\UserNotification;
use DB;
class JobCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'JobCron:JobCron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test job Cron System';

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
     * @return mixed
     */
    public function handle()
    {

        // $user=DB::table('users')->where('id', 2)->update(['name'=>'fahim'.str_random(10)]);
        //  $this->info('Name Change Successfully');

      /*  $user=DB::table('users')->where('id', 2)->first();

        Mail::raw("This is automatically generated Hourly Update", function($message) use ($user)
 
           {
         
               $message->from('rhosen759@gmail.com');
         
               $message->to($user->email)->subject('test message from task Scheduling');
               $this->info('message sent'. $user->email);

         
           });*/

          $this->info("this is work");
        
       
        

  
       
    }
}
