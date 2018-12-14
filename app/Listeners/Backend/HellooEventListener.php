<?php
namespace App\Listeners\Backend;

/**
 * Class HellooEventListener.
 */
/**
 * Class HellooCreated.
 */
class HellooEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Helloo Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Helloo  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Helloo Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Helloo\HellooCreated::class,
            'App\Listeners\Backend\HellooEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Helloo\HellooUpdated::class,
            'App\Listeners\Backend\HellooEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Helloo\HellooDeleted::class,
            'App\Listeners\Backend\HellooEventListener@onDeleted'
        );
    }
}
