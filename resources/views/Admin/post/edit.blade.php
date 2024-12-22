<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Post Edit</h4>
                    <a href="{{route('post.index')}}" class="btn btn-primary"> go back </a>
                </div>
                <div class="card-body">
                    <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class=" mb-3 col-6">
                                <label for="categories">Categories <span class="text-danger">*</span></label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$post->categories->contains($category->id) ? 'selected' : '')}}>{{$category->eng_title}}</option>
                                    @endforeach
                                </select>
                                @error('categories')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 col-6">
                                <label for="title">Post Title<span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{old('title' ?? $post->title)}}">
                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="form-control summernote">
                                {{old('description' ?? $post->description)}}
                                </textarea>
                                @error('description')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="meta-words">Meta Words </label>
                                <textarea name="meta-words" id="meta-words" class="form-control">
                                {{old('meta-words' ?? $post->meta_words)}}
                                </textarea>
                                @error('meta-words')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="meta-description">Meta Description</label>
                                <textarea name="meta-description" id="meta-description" class="form-control">
                                {{old('meta-description',$post->meta_description)}}
                                </textarea>
                                @error('meta-description')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 col-6">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control ">
                                    <option value="pending" {{$post->status == 'pending'? 'selected': ''}}>Pending</option>
                                    <option value="approved" {{$post->status == 'approved'? 'selected': ''}}>Approved</option>
                                    <option value="rejected" {{$post->status == 'rejected'? 'selected': ''}}>Rejected </option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="image">Image <span class="text-danger">*</span></label>
                                <input type="file" id="image" name="image" class="form-control">
                                <img src="{{asset('$post->image')}} " alt="$post->title" width="120">
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