<?php

namespace App\ImpulsoLike\Web;

use App\ImpulsoLike\General\GeneralConfig;

class WebConfig extends GeneralConfig
{

    const CONFIG_FILE       = 'impulsolike_web';
    const DEFAULT_CONFIG    = [
        'routes'    => 'impulsolike_web_routes',
        'active'    => [
            'index'         => true,
        ]
    ];

}
