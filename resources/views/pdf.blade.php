<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/frontend/style.css">
    <title>Download News</title>
</head>

<body>
    <div class="container m-5">
        <div class="space-y-4 ">
            <p>
                <i class="fas fa-calendar-alt p-0.5"></i> प्रकाशित मितिः {{ nepalidate($post->created_at) }} |
                <i class="fas fa-postpaper p-0.5"></i> {{ $post->views }} पटक पढिएको
            </p>
            <h1 class="text-3xl font-semibold">
                {{$post->title}}
            </h1>
            <!-- <img src="{{asset($post->image)}}" alt="{{$post->title}}" class="w-full">  -->
             <div>
                {!! $post->description !!}
            </div>
        </div>

    
</div>



</body>
</html>