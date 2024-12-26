<x-frontend-layout>
    <section>
        <div class="container grid grid-cols-12 gap-5">
            <div class="col-span-8">
                <img src="{{asset($latest_post->image)}}" alt="{{$latest_post->title}} " class="w-full">
                <h1 class="text-3xl font-semibold mt-2"> {{$latest_post->title}}</h1>
                <div class="description h-20 overflow-hidden">
                    {{$latest_post->description}}
                    <!-- {!! Str::limit($latest_post->description,200,'...' )!!} -->

                </div>
            </div>
            <div class="col-span-4 space-y-4">
                <h1 class="bg-light_primary px-3 py-1 text-3xl font-semibold border-l-4 border-[#642571]">ट्रेन्डिङ</h1>
                @foreach ($trending_posts as $post )
                <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </section>

    
</x-frontend-layout>