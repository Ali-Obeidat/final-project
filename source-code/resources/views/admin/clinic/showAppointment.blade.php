<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">{{$clinic->name}}</h5>
                            <form action="{{route('clinicAppointments.update',$clinicAppointmentID)}}" method="post" class="" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-row">
                                    <input hidden type="text" value="{{$clinic->id}} " name="clinic_id">
                                    <div class="col-lg-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Table with hover</h5>
                                                <table class="mb-0 table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>time/date</th>
                                                            @foreach($days as $day => $date)
                                                            <th>{{$day}}</th>
                                                            @endforeach
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($times as $time)
                                                        <tr>
                                                            <td scope="row">{{$time}}</td>
                                                            @foreach($days as $day => $date)
                                                            <td>
                                                                <input
                                                                @if(!empty($date[0]))
                                                                @foreach($date[0] as $hour)
                                                                @if($hour == $time)
                                                                checked
                                                                @endif
                                                                
                                                                @endforeach
                                                                @endif

                                                                 value="{{$time}}" type="checkbox" name="{{$day}}[]" id="">
                                                                 @if(!empty($date[0]))
                                                                @foreach($date[0] as $hour)
                                                                @if($hour == $time)
                                                                available
                                                                @endif
                                                                
                                                                @endforeach
                                                                @endif

                                                            </td>
                                                            @endforeach
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('sweetalert::alert')
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