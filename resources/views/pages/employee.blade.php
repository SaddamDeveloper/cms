@extends('layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card card-inverse card-primary">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                    </div>
                    <div>
                        <h3 class="card-title">Bandwidth usage</h3>
                        <h6 class="card-subtitle">March 2017</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 align-self-center">
                        <h2 class="font-light text-white">50 GB</h2>
                    </div>
                    <div class="col-8 p-t-10 p-b-20 align-self-center">
                        <div class="usage chartist-chart" style="height:65px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card card-inverse card-success">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                    </div>
                    <div>
                        <h3 class="card-title">Download count</h3>
                        <h6 class="card-subtitle">March 2017</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 align-self-center">
                        <h2 class="font-light text-white">35487</h2>
                    </div>
                    <div class="col-8 p-t-10 p-b-20 text-right">
                        <div class="spark-count" style="height:65px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card">
            <img class="" src="{{asset('material-pro/assets/images/background/weatherbg.jpg')}}" alt="Card image cap">
            <div class="card-img-overlay" style="height:110px;">
                <h3 class="card-title text-white m-b-0 dl">New Delhi</h3>
                <small class="card-text text-white font-light">Sunday 15 march</small>
            </div>
            <div class="card-body weather-small">
                <div class="row">
                    <div class="col-8 b-r align-self-center">
                        <div class="d-flex">
                            <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                            <div class="m-l-20">
                                <h1 class="font-light text-info m-b-0">32<sup>0</sup></h1>
                                <small>Sunny Rainy day</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <h1 class="font-light m-b-0">25<sup>0</sup></h1>
                        <small>Tonight</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
@push('scripts')
    <!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('material-pro/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('material-pro/assets/plugins/popper/popper.min.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('material-pro/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('material-pro/minisidebar/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('material-pro/minisidebar/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('material-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('material-pro/minisidebar/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="{{asset('material-pro/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--c3 JavaScript -->
<script src="{{asset('material-pro/assets/plugins/d3/d3.min.js')}}"></script>
<script src="{{asset('material-pro/assets/plugins/c3-master/c3.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('material-pro/js/dashboard1.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('material-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
@endsection
