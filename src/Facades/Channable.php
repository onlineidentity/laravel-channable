<?php

namespace OnlineIdentity\LaravelChannable\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;


/**
 * @method static \OnlineIdentity\Channable\Channable orders()
 * @method static \OnlineIdentity\Channable\Channable stockUpdates()
 * @method static \OnlineIdentity\Channable\Channable returns()
 * @method static \OnlineIdentity\Channable\Channable transporters()
 * @method static \OnlineIdentity\Channable\Channable statistics()
 * @method static \OnlineIdentity\Channable\Channable setProjectId()
 * @method static \OnlineIdentity\Channable\Channable setConfig()
 */
class Channable extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'channable';
    }
}