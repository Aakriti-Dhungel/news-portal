<div class="container mx-auto mt-5">
    <hr>
    <d class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">
        <!-- Card 1 -->
        <div class="card py-4 bg_primary_gradient my-4 text-white text-center items-center rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out border-5">
            <div class="card-body">

                <h1 class="text-3xl font-bold">{{$company->name}}</h1>
                <img class="h-[40px] md:h-[50px] lg:h-[70px]  mx-auto my-4 rounded-xl shadow-lg" src="{{asset($company->logo)}}" alt="{{$company->name}}">
            </div>
        </div>


        <!-- Card 2 -->
        <div class="card py-4 bg_primary_gradient my-4 text-white text-center items-center rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
            <div class="card-body">
                <h1 class="text-3xl font-bold">{{$company->name}}</h1>
                <img class="h-[40px] md:h-[50px] lg:h-[70px]  mx-auto my-4 rounded-xl shadow-lg" src="{{asset($company->logo)}}" alt="{{$company->name}}">
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card py-4 bg_primary_gradient my-4 text-white text-center items-center rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
            <div class="card-body">
                <h1 class="text-3xl font-bold">{{$company->name}}</h1>
                <img class="h-[40px] md:h-[50px] lg:h-[70px]  mx-auto my-4 rounded-xl shadow-lg" src="{{asset($company->logo)}}" alt="{{$company->name}}">
            </div>
        </div>
</div>
<div class="bg_primary">

    <p class="text-center text-white font-semibold">Copyright © 2025 {{$company->name}} All
        Rights Reserved.</p>
</div>
</div>