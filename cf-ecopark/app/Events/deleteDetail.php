<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class deleteDetail implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $detail;
    public $user_id;
    /**
     * Create a new event instance.
     */
    public function __construct($detail,$user_id)
    {
        $this->detail = $detail;
        $this->user_id = $user_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        
        return  new PrivateChannel('deleteDetails');
        
    }
}
