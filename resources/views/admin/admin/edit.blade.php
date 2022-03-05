<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">

                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Grid Rows</h5>
                            <form action="{{route('admin.update',$admin->id)}}" method="post" class="">
                                @csrf
                                @method('PUT')  
                            <div class="position-relative form-group">
                                    <label for="exampleAddress" class="">Name</label>
                                    <input name="name" value="{{$admin->name}}" id="exampleAddress" placeholder="Admin name" type="text" class="form-control">
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Email</label>
                                            <input name="email" value="{{$admin->email}}" id="exampleEmail11" placeholder="Admin email" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Password</label>
                                            <input  name="password" id="examplePassword11" placeholder="Admin password " type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Select Clinic</h5>
                                    <select name="clinic" class="multiselect-dropdown form-control">
                                    <option value="{{$admin->clinics[0]->id}}">{{$admin->clinics[0]->name}}</option>
                
                                        @if(!empty($clinics))
                                        @foreach($clinics as $clinic)
                                        @if($clinic->id == $admin->clinics[0]->id)
                                        @continue
                                        @endif
                                            <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                                            @endforeach
                                        @endif
                                        
                                    </select>
                                </div>
                            </div>
                              
                             
                                <button class="mt-2 btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>


    </div>

    @endsection
</x-admin.admin-master>