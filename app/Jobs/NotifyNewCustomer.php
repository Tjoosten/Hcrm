<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\User;
use Fenos\Notifynder\Builder\NotifynderBuilder;
use Fenos\Notifynder\Facades\Notifynder;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyNewCustomer extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * @var
     */
    protected $data;

    /**
     * Create a new job instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::all();

        Notifynder::loop($users, function(NotifynderBuilder $builder, $user) {
            $builder->category('customer.create')
                ->from($this->data['id'])
                ->to($user->id);
        })->send();
    }
}
