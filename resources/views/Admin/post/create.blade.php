<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Post Create</h4>
                    <a href="{{route('post.index')}}" class="btn btn-primary"> go back </a>
                </div>
                <div class="card-body">
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" mb-3 col-6">
                                <label for="categories">Categories</label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$categoriy->title}}</option>
                                  
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-6">
                                <label for="title">Post Title<span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="form-control summernote">
                                {{old('description')}}
                                </textarea>
                                @error('description')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="meta-words">Meta Words </label>
                                <textarea name="meta-words" id="meta-words" class="form-control">
                                {{old('meta-words')}}
                                </textarea>
                                @error('meta-words')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="meta-description">Meta Description</label>
                                <textarea name="meta-description" id="meta-description" class="form-control">
                                {{old('meta-description')}}
                                </textarea>
                                @error('meta-description')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="image">Image <span class="text-danger">*</span></label>
                                <input type="file" id="image" name="image" class="form-control">
                                @error('image')
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