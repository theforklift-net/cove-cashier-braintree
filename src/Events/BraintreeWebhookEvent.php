<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class BraintreeWebhookEvent
{
    use App\Events\Dispatchable;

    public $webhookName;
    public $webhook;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($webhookName, $webhook)
    {
        $this->webhookName = $webhookName;
        $this->webhook = $webhook;
    }
}
