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


```php
$router->routing(string $route): null
```

***Route***

Request coming to the site

