# RouterMVC
> Francisco Manuel Pavón Fernández

# Configuración

Toda la configuración se encuentra en `src/Router.php`.

## Dirección de archivo
La constante *`DIRBASEURL`* se utiliza para indicar la ubicación de archivo. Si se usa *Virtual Hosting* de Apache, será un array vacio (es lo que esta activado por defecto, para un acceso por medio de [unidad7actividad2.local](http://unidad7actividad2.local)).

```php
define("DIRBASEURL", array(
));
```

Alternativamente, este parámetro será conformado por cada parte de la ruta del archivo, así para la ruta `C:\xampp\htdocs\servidor\proyectos\routerMVC\`, este parámetro será un array conformado por `servidor`, `proyectos` y `routerMVC`.

```php
define("DIRBASEURL", array(
    "servidor",
    "proyectos",
    "routerMVC"
));
```

Esta configuración es para un acceso tradicional, sin usar *Virtual Hosting* y tendrá que ser configurado según la ubicación del proyecto.

## Ruta por defecto
La constante *`DEFAULTROUTE`* es utilizada para indicar una ruta por defecto.

```php
define("DEFAULTROUTE", array(
    "saludo",
    "pepe"
));
```

Esta configurada por defecto para ir a la ruta `saludo`, con el parámetro `pepe`.

Así si se accede sin indicar ruta, por ejemplo accediendo directamente a [unidad7actividad2.local](http://unidad7actividad2.local), se generará un saludo por defecto.

# Uso
Las vistas se almacenan en `src/routes`:

- `saludo.php` generá un saludo por el parámetro pasado. Ejemplos:
    - [unidad7actividad2.local/saludo/Samantha](http://unidad7actividad2.local/saludo/Samantha)
    - [unidad7actividad2.local/saludo/Federico](http://unidad7actividad2.local/saludo/Federico)
- `numeros.php` generá x primeros números pares, siendo x por defecto 10 o un número pasado por parámetro. Ejemplos:
    - [unidad7actividad2.local/numeros](http://unidad7actividad2.local/numeros) - genera los 10 primeros números positivos.
    - [unidad7actividad2.local/numeros/10](http://unidad7actividad2.local/numeros/10) - genera los 10 primeros números positivos.
    - [unidad7actividad2.local/numeros/20](http://unidad7actividad2.local/numeros/20) - genera los 20 primeros números positivos.
    - [unidad7actividad2.local/numeros/500](http://unidad7actividad2.local/numeros/500) - genera los 500 primeros números positivos.