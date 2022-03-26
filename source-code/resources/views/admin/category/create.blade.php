<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Simple table</h5>
                                <table class="mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Created at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($categories))
                                        @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>
                                                <form method="post" action="{{route('categories.destroy',$category->id)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-danger">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="main-card mb-3 card">
                            @if(Session('massage'))
                            <div class="alert alert-danger">
                                {{Session('massage')}}
                            </div>
                            @elseif (Session('Category_create_massage'))
                            <div class="alert alert-success">
                                {{Session('Category_create_massage')}}
                            </div>
                            @elseif (Session('company_updated_massage'))
                            <div class="alert alert-success">
                                {{Session('company_updated_massage')}}
                            </div>

                            @endif
                            <div class="card-body">
                                <h5 class="card-title">Create Category</h5>
                                <form action="{{route('categories.store')}}" method="post" class="">
                                    @csrf
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Category name</label>
                                        <input name="name" id="exampleEmail" placeholder="Enter Category name" type="text" class=" @error('name') is-invalid @enderror  form-control">
                                        @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror

                                    </div>

                                    <button class="mt-1 btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @endsection
</x-admin.admin-master>