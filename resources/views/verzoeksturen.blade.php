<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITSamen | Verzoek insturen</title>
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
        <section class="section is-relative is-clipped">
            <div class="is-hidden-touch has-background-primary"
                style="position: absolute; top: 0; left: 0; width: 70%; height: 100%"></div>
            <div class="is-hidden-desktop has-background-primary is-fullwidth"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%"></div>
            <div class="container mx-auto is-relative">
                <div class="is-vcentered columns is-multiline">
                    <div class="column is-6 is-5-desktop mb-5">
                        <div>
                            <h2 class="has-text-white mb-4 is-size-1 is-size-3-mobile has-text-weight-bold">Verzoek
                                maken.</h2>
                            <p class="has-text-white mb-0">Stuur een verzoek in als bedrijf om op ITSamen te komen.</p>
                        </div>
                    </div>
                    <div class="column is-6 is-4-desktop mx-auto">
                        <div class="box has-background-light has-text-centered">
                            <form action="/verzoeken/submit" method="POST">
                                @csrf
                                <span class="has-text-grey-dark">Verzoek form</span>
                                <h3 class="mb-5 is-size-4 has-text-weight-bold">Verzoek:</h3>
                                <div class="field">
                                    <div class="control">
                                        <input class="input mb-4" type="text" name="bedrijf_naam"
                                            placeholder="Bedrijfsnaam">

                                        <input class="input mb-4" type="email" name="bedrijf_email"
                                            placeholder="Email adres">

                                        <input class="input mb-4" type="text" name="bedrijf_telefoon"
                                            placeholder="Telefoonnummer">

                                        <input class="input mb-4" type="text" name="bedrijf_website"
                                            placeholder="Website.nl">

                                        <input class="input mb-4" type="text" name="verzoek_titel"
                                            placeholder="Verzoeks titel">

                                        <textarea class="textarea mb-4" name="verzoek_omschrijving" placeholder="Omschrijving klein"></textarea>

                                        <textarea class="textarea mb-4" name="verzoek_body" placeholder="Omschrijving groot"></textarea>

                                        <input class="input mb-4" type="number" name="verzoek_beloning"
                                            min="100">
                                    </div>
                                </div>
                                <button class="button is-primary mb-4 is-fullwidth">Stuur in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
