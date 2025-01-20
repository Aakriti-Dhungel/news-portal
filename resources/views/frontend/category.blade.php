<x-frontend-layout>
    <section>
        <div class="container grid md:grid-cols-12 gap-5">

            <div class="md:col-span-8 space-y-4 ">
                @foreach($posts as $post )
                <div class=" grid grid-cols-12 gap-5 items-center rounded-lg overflow-hidden hover:shadow-lg duration-500">
                    <div class="col-span-5 ">
                        <a href="{{ route('news', $post->id) }}">
                            <img src="{{ asset($post->image)}}" alt="{{$post->title}}">
                        </a>
                    </div>
                    <div class="col-span-7 ">
                        <a href="{{ route('news', $post->id) }}" class="block w-full no-underline hover:no-underline text-black hover:text-black cursor-pointer">
                            <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold">{{$post->title}} </h1>
                        </a>
                        <div class="limited-text overflow-hidden">{!! $post->description !!}</div>
                        <small> प्रकाशित मितिः<i class="fas fa-calendar-alt p-0.5"></i>{{nepalidate($post->created_at)}}</small>
                    </div>
                </div>
                @endforeach
                {{$posts->links()}}
            </div>

            <div class="col-span-4">
                @foreach ($advertises as $ad)
                <a href="{{$ad->redirect_url}}" target="_blank">
                    <img class="w-full" src="{{asset($ad->banner)}}" alt="{{ $ad->company_name">
                </a>
                @endforeach

            </div>


        </div>
    </section>

</x-frontend-layout>