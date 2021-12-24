# :scroll: Flash

Flash is a simple tool written in php to help you install and display flash messages

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

### Method Route


```php
$router->routing(string $route): null
```

***Route***

Request coming to the site

