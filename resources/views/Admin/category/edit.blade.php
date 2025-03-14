<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Category Edit</h4>
                    <a href="{{route('category.index')}}" class="btn btn-primary"> go back </a>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-6">
                                <label for="nep_title">Nepali Title <span class="text-danger">*</span></label>
                                <input type="text" id="nep_title" name="nep_title" class="form-control" value="{{$category->nep_title}}">
                                @error('nep_title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="eng_title">English Title <span class="text-danger">*</span></label>
                                <input type="text" id="eng_title" name="eng_title" class="form-control" value="{{$category->eng_title}}">
                                @error('eng_title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="position">Position <span class="text-danger">*</span></label>
                                <input type="text" id="position" name="position" class="form-control" value="{{$category->position}}">
                                @error('position')
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