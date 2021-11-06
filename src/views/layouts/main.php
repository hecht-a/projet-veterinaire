<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/index.css'>
    <link rel='stylesheet' href='css/burger.css'>
    <script src="js/index.js" defer></script>
    <title>{{title}}</title>
</head>
<body>
<header>
    <a class="brand" href="/">
        <img src="assets/logo_chien.png" width="45" height="45"/>
        <p>Octavien Doiron</p>
    </a>
    <div>
        <div class="bar">
            <img src="assets/burger.svg" alt="">
        </div>
        <nav class="menu-collapsed">
            <ul>
                <li><a href="/newsletter">newsletter</a></li>
                <li><a href="/avis">avis</a></li>
                <li><a href="/consultation">consultation</a></li>
                <li><a href="/contact">contact</a></li>
                {{user}}
            </ul>
        </nav>
    </div>
</header>
{{flashMessages}}
{{content}}
</body>
</html>