<?php
namespace Franciscopavon\RouterMvc;

//DIRBASEURL es un array de configuración que se utiliza para definir la ruta base de la aplicación.
//El siguiente DIRBASEURL es para una ejecución desde C:\xampp\htdocs\servidor\proyectos\routerMVC\index.php


// define("DIRBASEURL", array(
//     "servidor",
//     "proyectos",
//     "routerMVC"
// ));


//El siguiente DIRBASEURL es para una ejecución desde VirtualHost configurado en C:\xampp\apache\conf\extra\httpd-vhosts.conf

define("DIRBASEURL", array(
));


//Por último, DEFAULTROUTE indica la ruta por defecto que se ejecutará si no se especifica ninguna ruta en la URL.

define("DEFAULTROUTE", array(
    "saludo",
    "pepe"
));

class Router {
    
    private $routes;

    public function __construct($uri) {
        $uri = explode('/', $uri);
        array_shift($uri);
        $uri = array_diff($uri, DIRBASEURL);
        $uri = array_values($uri);

        //Default route
        if (empty($uri[0])) {
            $uri = DEFAULTROUTE;
        }

        $this->routes = $uri;
    }
    
    public function load() {
        $routerParams = array_slice($this->routes, 1);
        // print_r($this->routes);
        // print_r($routerParams);
        include 'routes/' . $this->routes[0] . '.php';
    }
}