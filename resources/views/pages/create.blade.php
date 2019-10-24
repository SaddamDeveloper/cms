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
                <h4 class="m-b-0 text-white">Create Project</h4>
            </div>
            <div class="card-body">
                {!! Form::open(['action' => 'ProjectsController@store', 'method'    =>  'POST', 'class' =>  'floating-labels m-t-40']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Project Info</h3>
                        <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::text('title', '', ['class' =>   'form-control'])}}
                                            <span class="bar"></span>
                                            <label for="title">Project Name</label>
                                            <small class="form-control-feedback"> This is inline help </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Delivery date</label>
                                        <div class="col-md-9">
                                            {{ Form::date('deliverydate', \Carbon\Carbon::now(), ['class' =>   'form-control'])}}
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::text('amount', '', ['class' =>   'form-control'])}}
                                            <span class="bar"></span>
                                            <label for="input3">Project Amount</label>
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::select('paymentmethod', ['0' => '', '1' => 'Cash', '2' => 'Cheque', '3' => 'RTGS/NEFT'], '', ['class' => 'form-control', 'id' => 'paymentmethod']) }}
                                            <span class="bar"></span>
                                            <label for="input6">Payment Method</label>
                                            <small class="form-control-feedback"> This is inline help </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::select('clienttype', [ '0' => '', '1' => 'Individual', '2' => 'Govt', '3' => 'Pvt Ltd.', '4' =>  'NGO'], '', ['class' => 'form-control']) }}
                                            <span class="bar"></span>
                                            <label for="input6">Client Type</label>
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                         <div style="display:none;" class="cash">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Cash</h4>
                                                        <div class="form-group">
                                                            {{ Form::text('pamount', '', ['class' =>   'form-control', 'id' => 'pamount'])}}
                                                            <span class="bar"></span>
                                                            <label for="input3">Payable Amount</label>
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('dueamount', 'Due Amount: ', ['class' =>   'form-control', 'id' => 'dueamount'])}}
                                                        </div>
                                                </div>
                                            </div>
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
        $("#clientname").show();
        $("#email").show();
      }
      else
      {
        $(".cash").hide();
      }
    });
});
</script>
@endpush
@endsection
