<?php

namespace App\ImpulsoLike\Web;

use Illuminate\Support\ServiceProvider;

class WebProvider extends ServiceProvider
{

    public function register()
    {

        require_once app_path('/ImpulsoLike/Web/WebFacade.php');

    }

}