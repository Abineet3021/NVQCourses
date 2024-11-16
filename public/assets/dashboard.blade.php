@extends('hospital.app')

@section('css')
<style>



</style>

@endsection

@section('content')
<!-- Content area -->
<div class="content">
    <div class="row">
        <div class="col-xl-12">
            <div class="card wlcm">
                <div class="row">
                  <a href="{{ url('hospital/dashboard') }}">  
                        <div class="col-md-5 p-4">
                            <img src="{{asset('public/admin/assets/admin/img/dashboard.jpg')}}" alt=" "  height="220px" width="290px">
                        </div>
                  </a>
                    <div class="col-md-7 p-4">
                        <h4>Welcome <span>Back</span></h4>
                        <div id="app">
                            
                        </div>

                    </div>
                  
                </div>
            </div>
            
            <div class="row dashboard">
                @if(auth()->guard('hospital')->user())
                <div class="col-md-3 mb-2">
                    <div class="card bg-teal-400 p-3 text-center">
                        <div class="card-body">
                            <h4>Doctors</h4>
                            <div>
                                <a href="{{ url('hospital/doctors/') }}" class="btn btn-white btn-sm text-dark">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card bg-teal-400 p-3 text-center">
                        <div class="card-body">
                            <h4>Bookings list</h4>
                            <div>
                                <a href="{{ url('/hospital/bookings') }}" class="btn btn-white btn-sm text-dark">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3 mb-2">
                    <div class="card bg-teal-400 p-3 text-center">
                        <div class="card-body">
                            <h4>Orders</h4>
                            <div>
                                <a href="{{url('/admin/orders')}}" class="btn btn-white btn-sm text-dark">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card bg-teal-400 p-3 text-center">
                        <div class="card-body">
                            <h4>User Queries</h4>
                            <div>
                                <a href="{{url('/admin/user_quries')}}" class="btn btn-white btn-sm text-dark">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                @endif
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>

var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('Welcome to TheQuickCure Hospital panel.')
    .pauseFor(2500)
    .deleteAll()
    .typeString("Our platform provides you with access to your doctors' appointment list")
    .pauseFor(2500)
    .deleteAll()
    .typeString('which is booked by patients via the mobile application.')
    .pauseFor(2500)
    .start();
</script>

@endsection

