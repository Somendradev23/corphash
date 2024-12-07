<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W3RRTWCKNN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W3RRTWCKNN');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/assets/images/www.svg" type="image/x-icon" />
    <title>CorpHash | <?= $page_title ?></title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <div class="navbar-fixed">
        <nav class="blue darken-1">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="/" class="brand-logo">CorpHash</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/about">Add Post</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="/about">About Us</a></li>
        <li><a href="/index#service">Services</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="tel:+918953176600" class="btn orange">Get Quote</a></li>
    </ul>
