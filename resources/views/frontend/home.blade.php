<x-frontend-layout>
    <section>
        <div class="container grid md:grid-cols-12 gap-5">
            <a href="{{ route('news', $latest_post->id) }}" class="block md:col-span-8 w-full no-underline hover:no-underline text-black hover:text-black cursor-pointer">
                <div class="md:col-span-8 w-[100%]">
                    <img src="{{asset($latest_post->image)}}" alt="{{$latest_post->title}} " class="w-full">

                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold mt-2"> {{$latest_post->title}}</h1>
                    <div class="overflow-hidden limited-text">
                        {!! $latest_post->description !!}
                        <!-- {!! Str::limit($latest_post->description,200,'...' )!!} -->

                    </div>
                </div>
            </a>
            <div class="md:col-span-4 space-y-4">
                <h1 class="bg-light_primary px-3 py-1 text-3xl font-semibold border-l-4 border-[#642571]">ट्रेन्डिङ</h1>
                @foreach ($trending_posts as $post )
                <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container py-10 space-y-5">
            @foreach ($categories as $category)
            @if (count($category->posts)>0)
            <div>
                <h1 class="text_primary text-3xl font-semibold">{{ $category->nep_title }}</h1>
                <img class="h-[5px] md:h-[10px] lg:h-[14px]" src="https://jawaaf.com/frontend/images/redline.png" alt="Line">
            </div>
            @php
            $posts = $category->posts->take(12);
            @endphp
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- to make different design for the first post 
                 @foreach ($posts as $index => $post)
                @if ($index==0)
                <h1>hello</h1>
                @else
                <x-post-card :post="$post" />
                @endif

                @endforeach
                 -->
                @foreach ($posts as $post)
                <x-post-card :post="$post" />
                @endforeach
            </div>
            @endif
            @endforeach
        </div>
    </section>



</x-frontend-layout>