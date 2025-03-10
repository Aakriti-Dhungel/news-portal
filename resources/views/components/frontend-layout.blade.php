<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="/assets/css/app.min.css">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=678e3a8ae895630012c10caa&product=inline-share-buttons&source=platform" async="async"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/frontend/style.css">
    

    <style>
        .description figure,
        .description img {
            width: 100% !important;
            display: none !important;
        }

        @media (min-width: 768px) {

            .description figure,
            .description img {
                width: 100% !important;
                display: none !important;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container flex justify-between items-center">
            <div>
                <img class="h-[50px] md:h-[70px] lg:h-[90px]" src="{{asset($company->logo)}}" alt="{{$company->name}}">
            </div>
            <div>
                {{nepalidate(now())}}
                <img class="h-[10px] md:h-[15px] lg:h-[20px]" src="https://jawaaf.com/frontend/images/redline.png" alt="Line">
            </div>
        </div>
    </header>

    <main>
        <x-frontend-navbar />
        {{ $slot }}
    </main>

    <footer>
        <x-frontend-footer />
    </footer>
</body>

</html>