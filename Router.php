<?php 

class Router
{
    private $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
        Parameters: 
            string - $route (Route)

        Description: Routing

        Return value: null
    **/

    public function routing(string $route)
    {
        if(!array_key_exists($route, $this->routes)) return $this->display404();

        require '../app/models/'.$this->routes[$route].'.model.php';
        require '../app/views/'.$this->routes[$route].'.view.php';
    }

    private function display404()
    {
        require('../app/views/404.php');
    }
}