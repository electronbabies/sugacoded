<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $Title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Arvo&family=BioRhyme&family=Libre Baskerville&family=Playfair Display&family=Cinzel&family=EB Garamond&family=Caladea&family=Spectral&family=Abril Fatface&family=Jacques Francois&family=Neuton&family=Pridi&family=Aleo&family=Abhaya Libre&family=Rokkitt&family=Frank Ruhl Libre&family=Poppins&family=Roboto&family=Noto+Sans&family=Open+Sans&family=Lato:wght@300;400;700;900&family=Bebas+Neue&family=Oswald&family=Inter:wght@300;400;700;900&family=Montserrat&family=Anton&family=Anton SC&family=Quicksand&family=Amiko&family=Work Sans&family=Josefin Sans&family=Raleway&family=Mulish&family=Telex&family=Hind Madurai&family=Kanit&family=Tenor Sans&family=Varela&family=Quattrocento Sans&family=Titillium Web&family=Poiret One&family=Jost&family=Exo 2&family=Ubuntu&family=Cabin&family=Nunito&family=Rubik&family=Pacifico&family=Amatic SC&family=Dancing Script&family=Tangerine&family=Lobster Two&family=Sacramento&family=Courgette&family=Kite One&family=Amarante&family=Satisfy&family=Lilita One&family=Shantell Sans&family=Lobster&family=Aboreto&family=Titan One&family=Cookie&family=Bungee&family=Staatliches&family=Calistoga&family=Suez One&family=Caprasimo&family=Rubik Mono One&family=Silkscreen&family=Alfa Slab One&family=Orelega One&family=Audiowide&family=Red Rose&family=Kalnia&family=Imbue&family=Climate Crisis&family=Gluten&family=Madimi One&family=Anta&family=Trykker&family=Moul&family=Bevan&family=Wendy One&family=Lexend Deca&family=Vina Sans&family=Chango&family=Changa One&family=Protest Guerrilla&family=Londrina Shadow&family=Candal&family=Borel&family=RocknRoll One&family=Bungee Inline&family=Rampart One&family=Manrope&family=Yusei Magic&family=Patrick Hand SC&family=Farsan&family=Handlee&family=Lemonada&family=Patua One&family=Arsenal&family=Bakbak One&family=Belleza&family=Black Han Sans&family=Bowlby One&family=Bruno Ace SC&family=Castoro Titling&family=Contrail One&family=Dela Gothic One&family=DotGothic16&family=Fahkwang&family=Francois One&family=Gloock&family=Graduate&family=Kavoon&family=Jersey 10&family=Krona One&family=Notable&family=Pavanam&family=Phudu&family=Poetsen One&family=Poller One&family=Questrial&family=Racing Sans One&family=Rammetto One&family=Rubik Glitch&family=Shrikhand&family=Spicy Rice&family=Syncopate&family=Urbanist&family=Yeseva One&family=Zen Dots&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/public.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            var nav_tabs = ['home', 'services'];
            $('.nav-item').on('click', function() {
                $('.nav-item').removeClass('active');
                $(this).addClass('active');

                $.each(nav_tabs, function(index, value) {
                    $('#page_' + value).hide();
                });

                $('#page_' + $(this).data('page')).show();

            });
        });
    </script>
</head>

<body>
<div class="d-flex flex-column " style="padding-left: 0px; padding-right: 0px; height: 100vh;">

    <div class="header">
        @if($LogoType == 'original')
        <div class="logo-container">
            <a href="/">
                <img class="logo-img" src="/img/logo.png" alt="{{ $Title }}">
            </a>
        </div>
        @else
        <div class="logo-container-sub">
            <a href="/">
                <img class="logo-img" src="/img/logo_with_subtext.png" alt="{{ $Title }}">
            </a>
        </div>
        @endif


        <div class="nav-container">
            <div class="nav-item active" data-page="home">
                Home
            </div>
            <div class="nav-item" data-page="services">
                Services
            </div>
        </div>
    </div>
    <div class="content" style="height: 700px; " id="page_home">
        <div class="main-title">
            Welcome
        </div>
        <div class="sub-title">
            Let's Get Started
        </div>
    </div>

    <div class="content" style="height: 700px; display:none;" id="page_services">
        <div class="main-title">
            Services
        </div>
        <div class="sub-title">
            Services Offered
        </div>
        {{--<form>
            <div class="row">
                <div class="form-group">
                    <div class="col-6">
                    <input type="text" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col-6">
                    <input type="text" class="form-control" placeholder="Last Name" required>
                    </div>
                    <input type="email" class="form-control" placeholder="Email Address" required>
                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                    <textarea class="form-control" placeholder="Message" rows="4" required></textarea>
                </div>
            </div>
        </form>--}}
    </div>

    <div class="overlay">
        <div class="overlay-content">
            {{-- Top --}}
            <div class="dotted-circle-container">
                <img src="/img/svg/dotted_pattern_circle.svg" alt="Dotted Circle Pattern" class="dotted-circle">
            </div>
            <div class="black-solid-circle-container">
                <img src="/img/svg/black_solid_circle.svg" alt="Black Solid Circle" class="black-solid-circle">
            </div>
            <div class="diagonal-circle-container">
                <img src="/img/svg/diagonal_lines_circle.svg" alt="Diagonal Circle Pattern" class="diagonal-circle">
            </div>
            <div class="black-hollow-circle-container">
                <img src="/img/svg/black_hollow_circle.svg" alt="Black Hollow Circle" class="black-hollow-circle">
            </div>

            {{-- Bottom --}}
            <div class="dotted-square-container">
                <img src="/img/svg/dotted_pattern_square.svg" alt="Dotted Square Pattern" class="dotted-square">
            </div>
            <div class="black-solid-square-container">
                <img src="/img/svg/black_solid_square.svg" alt="Black Solid Square" class="black-solid-square">
            </div>
            <div class="diagonal-square-container">
                <img src="/img/svg/diagonal_lines_square.svg" alt="Diagonal Square Pattern" class="diagonal-square">
            </div>
            <div class="black-hollow-parallelogram-container">
                <img src="/img/svg/black_hollow_parallelogram.svg" alt="Black Hollow Parallelogram" class="black-hollow-parallelogram">
            </div>
        </div>
    </div>


</div>
<div class="footer">
    <div class="footer-text">
        &copy;  All rights reserved.
    </div>
</div>




</body>
