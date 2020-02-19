@extends('layouts.app')

@section('content')
@push('styles')
    <style>
        #showMe{
            display: none;
        }
    </style>
@endpush
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Add User</h4>
            </div>
            <div class="card-body">
                {!! Form::open(['action' => 'UserController@store', 'method'    =>  'POST']) !!}
                    <div class="form-body">
                        <h3 class="box-title">User Info</h3>
                        <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{Form::label('name', 'Name')}}
                                            {{ Form::text('name', '', ['class' =>   'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{Form::label('email', 'Email Address')}}
                                            {{ Form::text('email', '', ['class' =>   'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{Form::label('password', 'Password')}}
                                            {{ Form::password('password', ['class' =>   'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{Form::label('role', 'Role')}}
                                            {{ Form::select('role', ['0' => '-SELECT ROLE-', '1' => 'Reception', '2' => 'Employee'], '', ['class' => 'form-control', 'id' => 'role']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-offset-3 col-md-9 pull-right">
                                {{Form::submit('Submit', ['class'   =>  'btn btn-success' ])}}
                                <a href="/" class="btn btn-inverse">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

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
<script>
$(document).ready(function(){
    $('#paymentmethod').on('change', function() {
      if ( this.value == '1')
      {
        $(".cash").show();
        $(".cheque").hide();
        $(".rtgs").hide();
      }
      else if( this.value == '2')
      {
        $(".cheque").show();
        $(".cash").hide();
        $(".rtgs").hide();
      }
      else if( this.value == '3')
      {
        $(".rtgs").show();
        $(".cash").hide();
        $(".cheque").hide();
      }
    });
    $('#clienttype').on('change', function(){
        if(this.value == 1){
            $('.individual').show();
        }
    });
});
</script>
@endpush
@endsection
