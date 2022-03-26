<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">


        <div class="app-page-title">
        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>All Admins
                                    </div>
                                </div>
                                 </div>
                        </div>  
            <div class="page-title-wrapper">
           
                <div class="card-body">
                @if(Session('massage'))
                <div class="alert alert-danger"> 
                    {{Session('massage')}}
                </div>
                    @elseif (Session('admin_create_massage'))
                    <div class="alert alert-success"> 
                    {{Session('admin_create_massage')}}
                </div>
                    @elseif (Session('admin_update_massage'))
                    <div class="alert alert-success"> 
                    {{Session('admin_update_massage')}}
                </div>
                    
                @endif
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                        <thead>
                            
                            <tr>
                                <th>#Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Clinic</th>
                                <th>Created at</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                           
                        </thead>
                        <tbody>
                        @if(!empty($admins))
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{$admin->id}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->clinics[0]->name}}</td>
                                <td>{{$admin->created_at}}</td>
                                <td> <a href="{{route('admin.edit',$admin->id )}}"> <button class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-primary">Edit</button></a></td>
                                <td> 
                                <form method="post" action="{{route('admin.destroy',$admin->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                    <button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>#Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Clinic</th>
                                <th>Created at</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>


    </div>

    @endsection
</x-admin.admin-master>