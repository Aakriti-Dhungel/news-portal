<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/app.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/frontend/style.css">
</head>

<body>

    <header>
        <div class="container flex justify-between items-center">
            <div>
                <img class="h-[50px] md:h-[70px] lg:h-[90px]" src="{{asset($company->logo)}}" alt="Company Logo">
            </div>
            <div>
                {{nepalidate(now())}}
                <img class="h-[10px] md:h-[15px] lg:h-[20px]" src="https://jawaaf.com/frontend/images/redline.png" alt="Line">
            </div>
        </div>
        <x-frontend-navbar/>
    </header>

    <main>
    {{ $slot }}
    </main>

    <footer>

    </footer>
</body>

</html>