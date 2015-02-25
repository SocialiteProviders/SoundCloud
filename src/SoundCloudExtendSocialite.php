<?php
namespace SocialiteProviders\SoundCloud;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SoundCloudExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'soundcloud', __NAMESPACE__.'\Provider'
        );
    }
}
