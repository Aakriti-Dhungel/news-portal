<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Company Create</h4>
                    <a href="{{route('company.index')}}" class="btn btn-primary"> go back </a>
                </div>
                <div class="card-body">
                    <form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control">

                            </div>
                            
                            <div class="col-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="tel"> Telephone <span class="text-danger">*</span></label>
                                <input type="text" id="tel" name="tel" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="facebook">Facebook  </label>
                                <input type="text" id="facebook" name="facebook" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="instagram">Instagram  </label>
                                <input type="text" id="instagram" name="instagram" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="logo">Logo <span class="text-danger">*</span></label>
                                <input type="file" id="logo" name="logo" class="form-control">
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