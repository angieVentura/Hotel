<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>menu</p>
<?php
            $view = (isset($view)) ? $view : 'home';
            require_once $view . ".php";
            ?>
<p>footer</p>
</body>
</html>