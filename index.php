<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
</head>

<body>
    <?php
    // echo '<pre>'; 
    // print_r($_SERVER);
    // print_r($_SERVER['REQUEST_URI']);
    // print_r($_SERVER['DOCUMENT_ROOT']);
    // echo '</pre>';
    // die();
    // $_SERVER["DOCUMENT_ROOT"] => C:\xampp\htdocs\hamza
    require $_SERVER["DOCUMENT_ROOT"] . '/Router.php'; // => C:\xampp\htdocs\hamza/Router.php
    // require $_SERVER["DOCUMENT_ROOT"] . '/config/init.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/helpers/functions.php';
    $request = $_SERVER['REQUEST_URI']; // => / or /home or /someshit or any other routes we enter in the URL
    $router = new Router($request);
    $router->get('/', 'views/home.view');
    $router->get('/add', 'views/add.view');
    $router->get('/edit', 'views/edit.view');
    $router->get('/delete', 'views/delete.view');
    ?>
    <script src='public/javascript/script.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>