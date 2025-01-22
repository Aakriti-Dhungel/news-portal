<x-frontend-layout>
    <section>
        <div class="container grid md:grid-cols-12 gap-5">

            <div class="md:col-span-8 space-y-4 ">
                <p>
                    <i class="fas fa-calendar-alt p-0.5"></i> प्रकाशित मितिः {{ nepalidate($news->created_at) }} |
                    <i class="fas fa-newspaper p-0.5"></i> {{ $news->views }} पटक पढिएको
                </p>
                <h1 class="text-3xl font-semibold">
                    {{$news->title}}
                </h1>
                <img src="{{asset($news->image)}}" alt="{{$news->title}}" class="w-full">
                <div>
                    {!! $news->description !!}
                </div>
                <div class="sharethis-inline-share-buttons"></div>
            </div>

            <div class="col-span-4 space-y-4">
                @foreach ($advertises as $ad)
                <a href="{{$ad->redirect_url}}" target="_blank">
                    <img class="w-full" src="{{asset($ad->banner)}}" alt="{{ $ad->company_name">
                </a>
                @endforeach

            </div>


        </div>
    </section>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=678e3a8ae895630012c10caa&product=inline-share-buttons&source=platform" async="async"></script>


  
</x-frontend-layout>