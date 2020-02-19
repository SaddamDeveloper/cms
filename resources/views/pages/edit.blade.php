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
                <h4 class="m-b-0 text-white">Edit Project</h4>
            </div>
            <div class="card-body">
                {!! Form::open(['action' => ['ProjectsController@update', $projects->id], 'method'    =>  'POST']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Project Info</h3>
                        <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{Form::label('title', 'Project name')}}
                                            {{ Form::text('title', $projects['projects'][0]->projectname, ['class' =>   'form-control'])}}
                                            <small class="form-control-feedback"> This is inline help </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::date('deliverydate', $projects['projects'][0]->deliverydate, ['class' =>   'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{Form::label('amount', 'Amount')}}
                                            {{ Form::text('amount', $projects['projects'][0]->amount, ['class' =>   'form-control'])}}
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::select('paymentmethod', ['0' => '-SELECT Payment Methhod-', '1' => 'Cash', '2' => 'Cheque', '3' => 'RTGS/NEFT'], '', ['class' => 'form-control', 'id' => 'paymentmethod']) }}
                                            <small class="form-control-feedback"> This is inline help </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            {{ Form::select('clienttype', [ '0' => '-SELECT Client Type-', '1' => 'Individual', '2' => 'Govt', '3' => 'Pvt Ltd.', '4' =>  'NGO'], '', ['class' => 'form-control', 'id'  =>  'clienttype']) }}
                                            <small class="form-control-feedback"> This is inline help </small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <div style="display:none;" class="individual">
                                                <div class="form-group">
                                                    {{ Form::text('clientName', $projects->clientName, ['class' =>   'form-control', 'id' => 'cname', 'placeholder' => 'Client Name'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('contactNo', $projects->contactNo, ['class' =>   'form-control', 'id' => 'contactNo', 'placeholder' => 'Contact No'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('altContactNo', $projects->altContactNo, ['class' =>   'form-control', 'id' => 'altContactNo', 'placeholder' => 'Alternate Contact No'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::email('email', $projects->email, ['class' =>   'form-control', 'id' => 'email', 'placeholder' => 'Email'])}}
                                                </div>
                                                <div class="form-group">
                                                <textarea name="address" id="address" class="form-control" placeholder="Address" cols="15" rows="10">{{$projects->address}}</textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                         <div style="display:none;" class="cash">
                                                <div class="form-group">
                                                    {{ Form::text('payableAmount', '', ['class' =>   'form-control', 'id' => 'payableAmount', 'placeholder' => 'Payable Amount'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('dueamount', 'Due Amount: ', ['class' =>   'form-control', 'id' => 'dueamount'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('paidamount', 'Paid Amount: ', ['class' =>   'form-control', 'id' => 'paidamount'])}}
                                                </div>
                                            </div>
                                            <div style="display:none;" class="cheque">
                                                <div class="form-group">
                                                    {{ Form::text('pamount', '', ['class' =>   'form-control', 'id' => 'pamount', 'placeholder' => 'Payable Amount'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('dueamount', 'Due Amount: ', ['class' =>   'form-control', 'id' => 'dueamount'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('chequeno', '', ['class' =>   'form-control', 'id' => 'chequeno', 'placeholder' => 'Cheque No'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('bankname', '', ['class' =>   'form-control', 'id' => 'bankname', 'placeholder' => 'Bank Name'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('phoneno', '', ['class' =>   'form-control', 'id' => 'phoneno', 'placeholder' => 'Phone No'])}}
                                                </div>
                                            </div>
                                            <div style="display:none;" class="rtgs">
                                                <div class="form-group">
                                                    {{ Form::text('pamount', '', ['class' =>   'form-control', 'id' => 'pamount', 'placeholder' => 'Payable Amount'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('dueamount', 'Due Amount: ', ['class' =>   'form-control', 'id' => 'dueamount'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('rtgsno', '', ['class' =>   'form-control', 'id' => 'chequeno', 'placeholder' => 'RTGS/NEFT No'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('bankname', '', ['class' =>   'form-control', 'id' => 'bankname', 'placeholder' => 'Bank Name'])}}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('phoneno', '', ['class' =>   'form-control', 'id' => 'phoneno', 'placeholder' => 'Phone No'])}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>
                            <hr>
                            <div class="col-md-offset-3 col-md-9 pull-right">
                                {{Form::hidden('_method', 'PUT')}}
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
