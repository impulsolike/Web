# Web
### by ImpulsoLike

## Requisitos
1. PHP 7.x
2. Laravel 7.x
3. Base de ImpulsoLike 2.x disponible en https://github.com/impulsolike/ImpulsoLike


## Instalación
1. Copia el directorio `Web` y su contenido dentro del directorio `app/ImpulsoLike/`
2. Agrega `App\ImpulsoLike\Web\WebProvider::class,` en el array `providers` de tu archivo de configuración `config/app.php`
3. Agrega `'Web' => App\ImpulsoLike\Web\WebFacade::class,` en el array `aliases` de tu archivo de configuración `config/app.php`
4. Copia los archivos que estan en el directorio `config/` dentro del directorio `config/`

## Implementación
1. Agrega en tu archivo `config/impulsolike_web_routes.php` las rutas que quieras registrar
2. Activalas en tu archivo `config/impulsolike_web.php` en el array `active` indicando `true`
3. En archivo `routes/web.php` agrega `use App\ImpulsoLike\Web\WebFacade as Web;` para cargar la Facade y `Web::routes();` para generar tus rutas
4. En tus vistas blade usa el metodo `::route` de la clase `Web` para cargar tus rutas `Web::route('route')`
