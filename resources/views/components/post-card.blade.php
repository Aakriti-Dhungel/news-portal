@props(['post'])
<div class="grid grid-cols-12 gap-2 items-center rounded-lg overflow-hidden hover:shadow-lg duration-500">
    <div class="col-span-5">
        <img  class="w-full h-[100px] object-cover" src="{{asset($post->image)}}" alt="{{$post->title}}">
    </div>
    <div class="col-span-7">
        <h1 class="font-bold">{{$post->title}}</h1>
        <small><i class="fas fa-calendar-alt p-0.5"></i>{{nepalidate($post->created_at)}} </small>
    </div>
</div>