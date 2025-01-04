<x-frontend-layout>
    <section>
        <div class="container grid md:grid-cols-12 gap-5">

            <div class="md:col-span-8 space-y-4 ">
            @foreach($posts as $post )
            <div class=" grid grid-cols-12 gap-5 items-center rounded-lg overflow-hidden hover:shadow-lg duration-500">
                <div class="col-span-5 ">
                    <img src="{{ asset($post->image)}}" alt="{{$post->title}}">
                </div>
                <div class="col-span-7 ">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold">{{$post->title}} </h1>
                    <div class="limited-text">{!! $post->description !!}</div>
                    <small> प्रकाशित मितिः<i class="fas fa-calendar-alt p-0.5"></i>{{nepalidate($post->created_at)}}| 549 पटक पढिएको </small>
                </div>
            </div>
            @endforeach
            {{$posts->links()}}
            </div>

            <div>

            </div> 


        </div>
    </section>

</x-frontend-layout>