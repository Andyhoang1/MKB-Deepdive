<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITSamen | Verzoek</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/css/bulma/bulma.min.css">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/icons/browserconfig.xml">
    <meta name="theme-color" content="#cecbff">

    <script src="/js/main.js"></script>
</head>

<body>
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
            <div class="mb-5 is-vcentered columns is-multiline">
                <div class="column is-6 mb-5">
                    <div>
                        <nav class="breadcrumb mb-3" aria-label="breadcrumbs">
                        </nav>
                        <h2 class="mb-5 is-size-1 is-size-3-mobile has-text-weight-bold">{{ $verzoek->verzoek_titel }}
                        </h2>
                        <div class="is-flex is-align-items-center">
                            <div class="mr-4">
                                <img class="image is-fullwidth" src="https://loremflickr.com/400/400" alt=""
                                    style="width: 56px;height: 56px">
                            </div>
                            <div>
                                <h4 class="is-size-5 has-text-weight-bold">{{ $verzoek->bedrijf->bedrijf_naam }} |
                                    Beloning: €{{ $verzoek->verzoek_beloning }}.00</h4>
                                <p class="has-text-grey-dark mb-0">{{ $verzoek->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <img class="image is-fullwidth" style="border-radius: 50% important"
                        src="https://via.placeholder.com/1920x1280" alt="">
                </div>
            </div>
            <div class="columns is-multiline is-centered">
                <div class="column is-8 is-6-desktop">
                    <p class="subtitle has-text-grey mb-5">{{ $verzoek->verzoek_body }}</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
