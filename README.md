# Web
### by ImpulsoLike

## Requisitos
1. PHP 7.x
1. Laravel 7.x
2. Base de ImpulsoLike 1.x disponible en https://github.com/impulsolike/ImpulsoLike


## Instalación

1. Copia el directorio `Web` y su contenido dentro del directorio `app/ImpulsoLike/`
2. Agrega `App\ImpulsoLike\Web\WebProvider::class,` en el array `providers` de tu archivo de configuración `config/app.php`
4. Agrega `'Web' => App\ImpulsoLike\Web\WebFacade::class,` en el array `aliases` de tu archivo de configuración `config/app.php`
5. Copia los archivos que estan en el directorio `config/` dentro del directorio `config/`

## Implementación
1. Agrega en tu archivo `config/impulsolike_web_routes.php` las rutas que quieras registrar
2. Activalas en tu archivo `config/impulsolike_web.php` en el array `active` indicando `true`
3. Usa el metodo `::route` de la clase `Web` para cargar tus rutas `Web::route('route')`

