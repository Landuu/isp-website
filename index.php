<?php 

    ob_start();

    function redirect($addr) {
        header('Location: ' . $addr, true, 301);
    } 

    $page_list = [
        'strona-glowna',
        'internet-swiatlowodowy',
        'internet-bezprzewodowy',
        'zasieg',
        'kontakt'
    ];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="Dostawca usług telekomunikacyjnych na terenie Ujsół, Rajczy oraz Rycerki">
    <title>E-Netkomp - Twój lokalny dostawca internetu</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel="stylesheet" href="css/boxicons.min.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 top d-flex justify-content-between">
                    <div class="top-contact d-none d-md-flex">
                        <b>Kontakt:</b> &nbsp tel. 505 505 505 | tel. 606 606 060
                    </div>
                    <a class="top-btn-login flex-center" href="#">
                        <i class='bx bxs-user pr-1'></i>Logowanie dla abonentów
                    </a>
                </div>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">

                <a class="navbar-brand nav-logo" href="./">
                    <img src="img/e-netkomp.png" alt="E-Netkomp">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-1 active">
                            <a class="nav-link" href="./">
                                <i class='bx bx-home'></i> Strona główna
                            </a>
                        </li>
                        <li class="nav-item px-1 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown">
                                <i class='bx bx-menu-alt-right'></i> Oferta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="internet-swiatlowodowy">Internet światłowodowy</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="internet-bezprzewodowy">Internet bezprzewodowy</a>
                            </div>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="zasieg">
                                <i class='bx bx-network-chart'></i> Zasięg
                            </a>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link" href="kontakt">
                                <i class='bx bx-book-alt'></i> Kontakt
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <main>

        <?php

            if(isset($_GET['p'])) {
                $page = $_GET['p'];
                if(!in_array($page, $page_list)) {
                    redirect('./');
                    exit();
                }
                $display = 'includes/' . $page . '.php';
                include_once($display);
            } else {
                include_once('includes/strona-glowna.php');
            }

        ?>

    </main>

    <footer>
        <div class="container-fluid footer pb-3">
            <div class="row">
                <div class="col-12 footer-bar"></div>
                <div class="mx-auto py-1 text-muted">
                    &copy 2020 | E-Netkomp
                </div>
            </div>
        </div>
    </footer>

    <!-- Script  -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>