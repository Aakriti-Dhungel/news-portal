<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Advertise Edit</h4>
                    <a href="{{route('advertise.index')}}" class="btn btn-primary"> go back </a>
                </div>
                <div class="card-body">
                    <form action="{{route('advertise.update',$advertise->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class=" mb-3 col-6">
                                <label for="company_name">Company Name<span class="text-danger">*</span></label>
                                <input type="text" id="company_name" name="company_name" class="form-control" value="{{old('company_name') ?? $advertise->company_name }}">
                                @error('company_name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 col-6">
                                <label for="contact">Contacte<span class="text-danger">*</span></label>
                                <input type="tel" id="contact" name="contact" class="form-control" value="{{old('contact') ?? $advertise->contact }}">
                                @error('contact')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 col-6">
                                <label for="expire_date">Expire Date<span class="text-danger">*</span></label>
                                <input type="text" id="expire_date" name="expire_date" class="form-control" value="{{old('expire_date') ?? $advertise->expire_date }}">
                                @error('expire_date')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 col-6">
                                <label for="redirect_url">Redirect URL<span class="text-danger">*</span></label>
                                <input type="url" id="redirect_url" name="redirect_url" class="form-control" value="{{old('redirect_url') ?? $advertise->redirect_url }}">
                                @error('redirect_url')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            
                            <div class="col-6">
                                <label for="banner">Banner <span class="text-danger">*</span></label>
                                <input type="file" id="banner" name="banner" class="form-control">
                                <img src="{{asset($advertise->banner)}} " alt="$advertise->title" width="120">
                                @error('banner')
                                <p class="text-danger">{{$message}}</p>
                              @enderror
                            </div>
                            
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-success">save Record</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>