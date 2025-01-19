<x-frontend-layout>
    <section>
        <div class="container grid md:grid-cols-12 gap-5">

            <div class="md:col-span-8 space-y-4 ">
                
            </div>

            <div class= "col-span-4">
                @foreach ($advertises as $ad)
                <a href="{{$ad->redirect_url}}" target="_blank">
                    <img class="w-full" src="{{asset($ad->banner)}}" alt="{{ $ad->company_name">
                </a>
                @endforeach

            </div>


        </div>
    </section>

</x-frontend-layout>