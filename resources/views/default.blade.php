<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title', "Bienvenu sur not site")</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    @yield('css')
</head>
<body>
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Accueil</a></li>
    </ul>
    @yield('main')
</body>
</html>