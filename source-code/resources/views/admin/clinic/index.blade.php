<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Clinics Table
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                                        class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Inbox</span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Book</span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span> Picture</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span> File Disabled</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            
                        <div class="main-card mb-3 card">
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
                                        <th>Image</th>
                                        <th>clinic Name</th>
                                        <th>Category</th>
                                        <th>location</th>
                                        <th>Doctor Name</th>
                                        <th>Gender</th>
                                        <th>Appointments</th>
                                        <th>Booking</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clinics as $clinic)
                                        @foreach($clinic->clinics as $data)
                                        
                                    <tr>
                                        <td><img width="100" src="{{$data->img}}" alt=""> </td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$clinic->name}}</td>
                                        <td>{{$data->location}}</td>
                                        <td>{{$data->doctor_name}}</td>
                                        <td>{{$data->gender}}</td>
                                        <td><a href="{{route('clinicAppointments.show',$data->id)}}"><button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-info">Show</button></a></td>
                                        <td><a href="{{route('clinics.show',$data->id)}}"><button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-info">View</button></a></td>
                                        <td><form method="post" action="{{route('clinics.destroy',$data->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                    <button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-danger">Delete</button>
                                </form></td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                               
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    <th>Image</th>
                                        <th>clinic Name</th>
                                        <th>Category</th>
                                        <th>location</th>
                                        <th>Doctor Name</th>
                                        <th>Gender</th>
                                        <th>Appointments</th>
                                        <th>Booking</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                </table>
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