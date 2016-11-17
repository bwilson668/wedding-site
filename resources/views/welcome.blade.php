<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>M &amp; B Wilson</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body id="app">
    <section class="hero is-primary is-cover is-fullheight">
        <!-- Hero header: will stick at the top -->
        <div class="hero-head">
            <header class="nav">
                <div class="container">
                    <div class="nav-left">
                        <a class="nav-item is-brand">
                            <img src="https://cdn.benjaminandrewwilson.com/wedding-logo-white.png" alt="Logo">
                        </a>
                    </div>
                    <span class="nav-toggle header-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="nav-right nav-menu header-menu">
                        <a class="nav-item is-active">
                            Our Wedding
                        </a>
                        <a class="nav-item">
                            Details
                        </a>
                        <a class="nav-item">
                            Photos
                        </a>
                        <a class="nav-item">
                            Registry
                        </a>
                    </div>
                </div>
            </header>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <div class="container has-text-centered">
                <h1 class="title is-1">
                    Michelle &amp; Ben
                </h1>
                <h2 class="title p-b">
                    Feburary Twenty-Fourth Two Thousand and Eighteen &middot; Tampa, Florida
                </h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2">Our Wedding</h2>

            <h3 class="title is-3 has-text-centered">Ceremony</h3>
            <hr class="is-styled">
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <img src="https://cdn.benjaminandrewwilson.com/img/wedding/sacred_heart.jpg" class="is-rounded">
                    </div>
                </div>
                <div class="column content">
                    <h3 class="title">Sacred Heart Catholic Church</h3>
                    <p>
                        Tucked in the heart of downtown Tampa, Sacred Heart offers beautiful architecture, stained glass, and fond memories - including Mr. and Mrs. Whidden's wedding!
                    </p>
                    <div class="columns is-mobile">
                        <div class="column is-3">
                            <p class="is-strong">Address:</p>
                            <p class="is-strong">Time:</p>
                            <p class="is-strong">Attire:</p>
                        </div>
                        <div class="column">
                            <p>509 N Florida Ave, Tampa, FL</p>
                            <p>2:30 PM - Feburary 24<sup>th</sup>, 2018</p>
                            <p>Black Tie</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="box is-full has-min-height">
                        <div id="church-map" class="is-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('photos.photos')
    @include('photos.photo_modals')

    <script src="/js/app.js"></script>
    <script>
        var initMap = function() {
            var map = new google.maps.Map(document.querySelector('#church-map'), {
                center: { lat: 27.949341, lng: -82.4594551 },
                zoom: 15,
                disableDefaultUI: true,
                disableDoubleClickZoom: true,
                fullscreenControl: false,
                gestureHandling: 'none',
                keyboardShortcuts: false,
                panControl: false,
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.maps.key') }}&callback=initMap"
    async defer></script>
</body>
</html>
