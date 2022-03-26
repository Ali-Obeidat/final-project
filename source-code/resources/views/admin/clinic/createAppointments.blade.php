<x-admin.admin-master>

    @section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Grid Rows</h5>
                            <form action="{{route('clinicAppointments.store')}}" method="post" class="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Clinics</label>
                                            <select name="clinic_id" class="mb-2 form-control">
                                                <option value="0">Select Clinic</option>
                                                @foreach($clinics as $clinic)
                                                <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Table with hover</h5>
                                                <table class="mb-0 table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>time/date</th>
                                                            @foreach($week as $day => $date)
                                                            <th>{{$date}}</th>
                                                            @endforeach
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($times as $time)
                                                        <tr>
                                                            <th scope="row">{{$time}}</th>
                                                            @foreach($week as $day => $date)
                                                            <th><input value="{{$time}}" type="checkbox" name="{{$date}}[]" id=""></th>
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
                                <button type="submit" class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-primary">Save</button>
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