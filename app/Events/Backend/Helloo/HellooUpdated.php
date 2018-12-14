<?php namespace App\Events\Backend\Helloo;

use Illuminate\Queue\SerializesModels;
/**
 * Class HellooUpdated.
 */
class HellooUpdated
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
