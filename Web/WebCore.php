<?php

namespace App\ImpulsoLike\Web;

use Illuminate\Support\Facades\Route;

trait WebCore
{

    public static function routes()
    {
        $routes = static::config('routes');

        if ($routes) {

            $routes = config($routes) ?: [];
            $active = static::config('active') ?: [];

            foreach ($routes as $name => $options) {
                
                if (isset($active[$name]) && $active[$name] == true) {

                    if(isset($options[0]))
                        static::addRoute($name,$options);
                    else
                        static::addRoutes($options);

                }
                    
    
            }

        }
    }

    public static function route($name = false,$attr = false)
    {
        $name = $name ?: '/';

        return Route::has($name) ? route($name,$attr) : url($name);
    }

    public static function addRoutes($routes = [])
    {
        foreach ($routes as $name => $options) {
            
            static::addRoute($name,$options);

        }
    }

    public static function addRoute($name,$options = [])
    {
        if (is_array($options[0])) {
            Route::match($options[1],[
                'uses'  => $options[2],
                'as'    => $name
            ]);
        } else {
            if ($options[0]=='POST') {
                Route::post($options[1],[
                    'uses'  => $options[2],
                    'as'    => $name
                ]);
            }
            else if ($options[0]=='GET') {
                Route::get($options[1],[
                    'uses'  => $options[2],
                    'as'    => $name
                ]);
            } else {
                Route::any($options[1],[
                    'uses'  => $options[2],
                    'as'    => $name
                ]);
            }
        }
    }

}