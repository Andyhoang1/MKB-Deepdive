<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITSamen | Verzoeken</title>
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
    <script src="https://cdn.tailwindcss.com"></script>
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
                <div class="mb-6 columns is-multiline is-centered">
                    <div class="column is-8 has-text-centered">
                        <span class="has-text-grey-dark">ITSamen</span>
                        <h2 class="mt-2 mb-4 is-size-1 is-size-3-mobile has-text-weight-bold">De verzoeken</h2>
                        <p class="subtitle has-text-grey">Zie hier alle verzoeken op ITSamen 🚀</p>
                    </div>
                </div>
                <div class="mb-5 columns is-multiline">
                    @foreach ($verzoeken as $verzoek)
                        <div class="column is-6 is-4-desktop mb-4">
                            <div class="box p-5 has-background-light">
                                <div class="mb-4 is-relative">
                                    <span class="mt-3 mr-3 tag is-info"
                                        style="position: absolute; top: 0; right: 0; z-index: 1;">Beloning:
                                        €{{ $verzoek->verzoek_beloning }}.00</span>
                                    <img class="image is-fullwidth" src="https://via.placeholder.com/400x225"
                                        alt="">
                                </div>
                                <span><small class="has-text-grey-dark">{{ $verzoek->updated_at }} | Bedrijf:
                                        {{ $verzoek->bedrijf->bedrijf_naam }}</small></span>
                                <h2 class="mb-4 is-size-4 has-text-weight-bold">{{ $verzoek->verzoek_titel }}</h2>
                                </h2>
                                <p class="subtitle has-text-grey">{{ $verzoek->verzoek_omschrijving }}</p>
                                <a href="/verzoek/{{ $verzoek->id }}">Meer info</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{ $verzoeken->links() }}
            </div>
        </section>
    </div>
</body>

</html>
