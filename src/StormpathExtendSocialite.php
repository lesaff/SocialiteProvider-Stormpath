<?php

namespace SocialiteProviders\Stormpath;

use SocialiteProviders\Manager\SocialiteWasCalled;

class StormpathExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('stormpath', __NAMESPACE__.'\Provider');
    }
}
