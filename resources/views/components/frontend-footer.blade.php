<div class="container mx-auto mt-5">
    <hr>
    <d class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">
        <!-- Card 1 -->
        <div class="card py-4 bg_primary_gradient my-4 text-white text-center items-center rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out border-5">
            <div class="card-body">

                <h1 class="text-3xl font-bold">{{$company->name}}</h1>
                <img class="h-[40px] md:h-[50px] lg:h-[70px]  mx-auto my-4 rounded-xl shadow-lg" src="{{asset($company->logo)}}" alt="{{$company->name}}">

                <b>अध्यक्ष</b>
                <p>रत्न कला राई</p>

                <b>सम्पादक</b>
                <p>सुरज घिमिरे</p>

                <b>कम्पनी दर्ता प्रमाणपत्र नं</b>
                <p>३३३७५६/०८०/०८१</p>

                <b>स्थानीय लेखा नं</b>
                <p>६२१११२२३४</p>

                <b>सूचना तथा प्रसारण विभाग दर्ता नं</b>
                <p>४७२४-२०८१/२०८२</p>

                <b>प्रेस काउन्सिल दर्ता नं</b>
                <p>४७३२-२०८१/०८२</p>
            </div>
        </div>


        <!-- Card 2 -->
        <div class="card py-4 bg_primary_gradient my-4 text-white text-center items-center rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
            <div class="card-body">
                <h1 class="text-3xl font-bold">{{$company->name}}</h1>
                <img class="h-[40px] md:h-[50px] lg:h-[70px]  mx-auto my-4 rounded-xl shadow-lg" src="{{asset($company->logo)}}" alt="{{$company->name}}">

                <b>इमेल:aakritinews@gmail.com</b>

                <b>फोन: 9800000000</b>

                <b>टेलिफोन: 9800000000</b>

                <b>धरान १५ सुनसरी</b>

                <b>विज्ञापन को लागी</b>
                <b>इमेल: aakritiadv@gmail.com</b>
<br>
                <b> फोन: 9800000000/ 9800000000</b>
               
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