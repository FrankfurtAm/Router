# :scroll: Router

Router is a simple tool written in php which takes the approach MVC.

# Usage

### Route


```php
require "Router.php";

$routes = [
  '/' => 'index',
]

$router = new Router($routes);
$router->routing($_SERVER['REQUEST_URI']);
```


# Documentation

### Method Routing
This method compares the current request with the routes it has. If the route fits, then it connects the model and the view for the current route


```php
$router->routing(string $request): null
```

***Request***

Request coming to the site

