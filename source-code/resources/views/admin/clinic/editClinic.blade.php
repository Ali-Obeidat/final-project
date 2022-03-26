<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">

                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Grid Rows</h5>
                            <form action="{{route('clinics.update',$clinic->id)}}" method="post" class="" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Name</label>
                                            <input value="{{$clinic->name}}" name="name" id="exampleEmail11" placeholder="Clinic name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Doctor Name</label>
                                            <input value="{{$clinic->doctor_name}}" name="doctor_name" id="examplePassword11" placeholder="Doctor Name" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">location</label>
                                            <input value="{{$clinic->location}}" name="location" id="exampleEmail11" placeholder="location" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">insurance</label>
                                            <input value="{{implode(' ', $clinic->insurance) }}" name="insurance" id="examplePassword11" placeholder="insurance" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Education</label>
                                            <input value="{{$clinic->education}}" name="education" id="examplePassword11" placeholder="Education" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">clinic specialty</label>
                                            <input value="{{$clinic->clinic_specialty}}" name="clinic_specialty" id="exampleEmail11" placeholder="clinic specialty,clinic specialty,clinic specialty" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">gender</label>
                                            <select name="gender" class="mb-2 form-control">
                                                <option  value="0">Select Gender</option>
                                                <option  @if($clinic->gender == 'male') selected @endif value="male">Male</option>
                                                <option @if($clinic->gender == 'female') selected @endif value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @include('sweetalert::alert')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Category</h5>
                                                <select name="category_id" class="multiselect-dropdown form-control">
                                                    <!-- <option value="0">Select Category</option> -->
                                                    @foreach($categories as $category)
                                                    <option @if($category->id == $ClinicCategory->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">sub Category</h5>
                                                <select name="sub[]" multiple="multiple" class="multiselect-dropdown mul form-control">
                                                    @foreach($subs as $sub)
                                                    <option
                                                    @foreach($ClinicSubCat as $SubCat)

                                                      @if($sub->id == $SubCat->id) selected @endif
                                                    @endforeach

                                                       value="{{$sub->id}}">{{$sub->name}}
                                                    
                                                    </option>
                                                    
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleText" class="">description</label>
                                            <textarea name="description" id="exampleText" class="form-control">{{$clinic->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleText" class="">professional background</label>
                                            <textarea name="professional_background" id="exampleText" class="form-control">{{$clinic->professional_background}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Image:</label>
                                    <div>
                                        <img width="100" src="{{$clinic->img}}" alt="">
                                    </div>
                                    <input type="file" class="form-control-file" id="pwd" placeholder="Enter password" name="img">
                                </div>

                                <button type="submit" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    @endsection

    @section('script')
    <script>
        $(document).ready(function() {
            $('.mul').store();
        });
    </script>
    @endsection
</x-admin.admin-master>