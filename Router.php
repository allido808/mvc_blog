
<?php

class Router
{
    private $request;
    public function __construct($request)
    {
        $this->request = $request;
    }
    /**
     * @param Route The url route
     * @param filePath the file you want to include 
     */
    public function get(string $route, string $filePath)
    {
        $uri = trim($this->request, "/");
        $uri = explode("/", $uri);
        if ($uri[0] == trim($route, "/")) {
            array_shift($uri);
            require $filePath . '.php';
        }
    }
}

// ---> / l o g i n
// ---> 0 1 2 3 4 5