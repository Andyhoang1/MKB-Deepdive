<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITSamen | Contacten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="css/bulma/bulma.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

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
        <section class="section is-relative">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-6 is-4-desktop mb-5 mr-auto">
                        <div class="py-5 has-text-centered">
                            <span class="has-text-grey-dark">Neem contact op met ITSamen</span>
                            <h3 class="mb-5 is-size-4 has-text-weight-bold">Contact</h3>
                            <form action="/contact/post" method="POST">
                                @csrf
                                <div class="field">
                                    <div class="mb-2 columns is-multiline">
                                        <div class="column is-6">
                                            <div class="control">
                                                <input class="input" type="text" name="voornaam"
                                                    placeholder="Voornaam">
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="control">
                                                <input class="input" type="text" name="achternaam"
                                                    placeholder="Achternaam">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input mb-2" type="email" name="email"
                                            placeholder="E-mail adres">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input mb-3" type="text" name="bericht"
                                            placeholder="Bericht hier">
                                    </div>
                                </div>
                                <input type="submit" class="button is-primary mb-3 is-fullwidth"
                                    value="Verstuur bericht" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="is-hidden-mobile is-hidden-desktop"
                style="position: absolute; top: 0px; bottom: 0px; right: 0px; width: 45%; background: url(&quot;https://images.unsplash.com/photo-1496346651079-6ca5cb67f42f?crop=entropy&amp;cs=tinysrgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHwzMXx8cGhvbmV8ZW58MHwyfHx8MTY3MDQxNzMxMA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1920&quot;) 0% 0% / cover no-repeat;">
            </div>
            <div class="is-hidden-touch"
                style="position: absolute; top: 0px; bottom: 0px; right: 0px; width: 50%; background: url(&quot;https://images.unsplash.com/photo-1496346651079-6ca5cb67f42f?crop=entropy&amp;cs=tinysrgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHwzMXx8cGhvbmV8ZW58MHwyfHx8MTY3MDQxNzMxMA&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1920&quot;) 0% 0% / cover no-repeat;">
            </div>
        </section>


    </div>
</body>

</html>
