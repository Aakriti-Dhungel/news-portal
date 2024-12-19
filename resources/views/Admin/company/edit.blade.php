<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Company Edit</h4>
                    <a href="{{route('company.index')}}" class="btn btn-primary"> go back </a>
                </div>
                <div class="card-body">
                    <form action="{{route('company.update',$company->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-6">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" value="{{old('name') ?? $company->name}}">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="text" id="email" name="email" class="form-control" value="{{$company->email}}">
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{$company->phone}}">
                                @error('phone')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="tel"> Telephone <span class="text-danger">*</span></label>
                                <input type="text" id="tel" name="tel" class="form-control" value="{{$company->tel}}">
                                @error('tel')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="facebook">Facebook </label>
                                <input type="text" id="facebook" name="facebook" class="form-control" value="{{$company->facebook}}">
                            </div>
                            <div class="col-6">
                                <label for="instagram">Instagram </label>
                                <input type="text" id="instagram" name="instagram" class="form-control" value="{{$company->instagram}}">
                            </div>
                            <div class="col-6">
                                <label for="logo">Logo <span class="text-danger">*</span></label>
                                <input type="file" id="logo" name="logo" class="form-control">
                                @error('logo')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" class="btn btn-success">Update Record</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>