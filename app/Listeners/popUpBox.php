<?php

namespace App\Listeners;

use App\Events\eventTrigger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class popUpBox
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  eventTrigger  $event
     * @return void
     */
    public function handle(eventTrigger $event)
    {
        //
    }
}
