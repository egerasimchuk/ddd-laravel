<?php
/**
 * Description of UserRegisteredHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Profiles\Events;


use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

class UserRegisteredEvent
{

    use Dispatchable, Queueable;

    private int $id;

    public function __construct(
        int $id
    )
    {
        $this->id = $id;
    }

}
