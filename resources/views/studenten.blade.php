<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITSamen | Studenten</title>
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

        <section class="section">
            <div class="container">
                <div class="mb-6 columns is-multiline is-centered">
                    <div class="column is-8 has-text-centered">
                        <h2 class="mt-2 mb-4 is-size-1 is-size-3-mobile has-text-weight-bold">Studenten</h2>
                        @if (session('gebruikersnaam'))
                            <p class="subtitle has-text-grey">Welkom, {{ session('gebruikersnaam') }}</p>
                        @endif
                        <p class="subtitle has-text-grey">Zoek studenten om mee samen te werken aan jullie project.</p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="">Zoek een student</label>
                    <div class="control">
                        <input class="input" type="text" name="field-name" placeholder="Studentnummer/naam">
                    </div>
                </div>
                <div class="columns is-multiline">
                    @foreach ($studenten as $student)
                        <div class="column is-6 mb-5">
                            <div class="columns is-multiline">
                                <div class="column is-4 mb-4">
                                    <img class="image is-fullwidth"
                                        src="https://i.pravatar.cc/250?u={{ $student->email }}+{{ $student->gebruikersnaam }}"
                                        alt="">
                                </div>
                                <div class="column is-8">
                                    <span><small class="has-text-grey-dark">
                                            @if ($student->gebruikersnaam === session('gebruikersnaam'))
                                                <span class="tag is-success">[ONLINE]</span>
                                            @endif {{ $student->email }}
                                        </small></span>
                                    <h2 class="mb-2 is-size-3 is-size-4-mobile has-text-weight-bold">
                                        {{ $student->volledige_naam }}

                                    </h2>
                                    <p class="subtitle has-text-grey">
                                        @php
                                            $skills = ['PHP', 'JavaScript', 'Laravel', 'C++', 'C#', 'HTML', 'CSS', 'Java', 'Python', 'Kotlin', 'SQL', 'Rust', 'TypeScript', 'Go'];
                                            shuffle($skills);
                                        @endphp

                                        <span class="tag is-primary is-info">{{ $skills[0] }}</span>
                                        <span class="tag is-primary is-info">{{ $skills[1] }}</span>
                                        <span class="tag is-primary is-info">{{ $skills[2] }}</span>
                                        <span class="tag is-primary is-info">{{ $skills[3] }}</span>

                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $studenten->links() }}
            </div>
        </section>
    </div>
</body>

</html>
