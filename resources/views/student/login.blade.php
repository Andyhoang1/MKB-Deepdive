<!DOCTYPE html>
<html lang="en">

<head>
    <title>Studenten Login | ITSamen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="css/bulma/bulma.min.css">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/icons/browserconfig.xml">
    <meta name="theme-color" content="#cecbff">

    <script src="js/main.js"></script>
</head>

<body>
    <div class="">

        <nav class="navbar py-4">
            <div class="container is-fluid">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <p> ITSAMEN </p>
                    </a>
                    <a class="navbar-burger" role="button" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item" href="/">Start</a><a class="navbar-item"
                            href="/verzoeken">Verzoeken</a><a class="navbar-item" href="/studenten">Studenten</a>
                    </div>
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button" href="/login">Log in</a><a class="button is-primary"
                                href="/registratie">Registreer</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="section">
            <div class="container">
                <div class="columns is-multiline is-centered">
                    <div class="column is-8 is-5-desktop">
                        <div class="box p-6 has-background-light has-text-centered">
                            <span class="has-text-grey-dark">Inloggen</span>
                            <h3 class="mb-5 is-size-4 has-text-weight-bold">Welkom terug</h3>
                            <form action="/student/login" method="POST">
                                @csrf
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" name="gebruikersnaam"
                                            placeholder="Gebruikersnaam">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="password" name="wachtwoord" placeholder="Password">
                                    </div>
                                </div>
                                <input type="submit" class="button is-primary mb-4 is-fullwidth" value="Login">
                                <a class="button is-white mb-2 is-flex is-justify-content-center is-align-items-center is-fullwidth"
                                    href="#">
                                    <span class="has-text-grey-dark">Inloggen via HorizonNet</span>
                                </a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
