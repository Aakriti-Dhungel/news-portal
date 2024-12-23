<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .container{
            width:86%;
            margin: auto;
        }
    </style>
</head>

<body>

    <header>
        <div class="container flex justify-between items-center">
            <div>
                <img class="h-[100px]" src="https://jawaaf.com/storage/01JF6CJYGS53X1S7DZ5XKFC705.png" alt="Company Logo">
            </div>
            <div>
                {{nepalidate(now())}}
                <img class="h-[20px]" src="https://jawaaf.com/frontend/images/redline.png" alt="Line">
            </div>
        </div>
        <x-frontend-navbar/>
    </header>

    <main>

    </main>

    <footer>

    </footer>
</body>

</html>