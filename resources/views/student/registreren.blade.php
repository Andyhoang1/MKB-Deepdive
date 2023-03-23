<!DOCTYPE html>
<html lang="en">

<head>
    <title>Studenten registratie | ITSamen</title>
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
                            <span class="has-text-grey-dark">Registeren</span>
                            <h3 class="mb-5 is-size-4 has-text-weight-bold">Maak een nieuw account.</h3>
                            <form action="/student/register" method="POST">
                                @csrf
                                <div class="columns is-multiline">
                                    <div class="column is-6">
                                        <div class="control">
                                            <input minlength="3" maxlength="246" required class="input" type="text"
                                                name="gebruikersnaam" placeholder="Gebruikersnaam">
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control">
                                            <input minlength="4" maxlength="246" required class="input" type="text"
                                                name="volledige_naam" placeholder="Volledige naam">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input minlength="6" maxlength="246" required class="input" type="email"
                                            name="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input minlength="6" maxlength="246" required class="input" type="password"
                                            name="wachtwoord" placeholder="Wachtwoord">
                                    </div>
                                </div>
                                <label class="checkbox mb-5">
                                    <input required class="checkbox mr-2" type="checkbox" name="terms"
                                        value="1"><small class="has-text-grey-dark">Bij het registreren van een
                                        account gaat u akkoord
                                        <a href="#">Terms,
                                            Data Policy</a> en <a href="#">Cookies Policy</a>.</small>
                                </label>
                                <input type="submit" class="button is-primary mb-3 is-fullwidth"
                                    value="Registreren" />
                            </form>
                            <p class="has-text-grey-dark">
                                <small>
                                    <span>Heeft u al een account?</span>
                                    <a href="/login">Log in</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
