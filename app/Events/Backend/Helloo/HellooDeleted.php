<?php namespace App\Events\Backend\Helloo;

use Illuminate\Queue\SerializesModels;
/**
 * Class HellooDeleted.
 */

class HellooDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $helloo;

    /**
     * @param $helloo
     */
    public function __construct($helloo)
    {
        $this->helloo = $helloo;
    }
}
