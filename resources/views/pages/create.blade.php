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
                {!! Form::open(['action' => 'ProjectsController@store', 'method'    =>  'POST', 'class' =>  'form-horizontal']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Project Info</h3>
                        <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        {{ Form::label('title', 'Title', ['class'   =>  'control-label text-right col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('title', '', ['class' =>   'form-control', 'placeholder'    => 'Project title'])}}
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Delivery date</label>
                                        <div class="col-md-9">
                                            {{ Form::date('deliverydate', \Carbon\Carbon::now(), ['class' =>   'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        {{ Form::label('title', 'Amount', ['class'   =>  'control-label text-right col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::text('amount', '', ['class' =>   'form-control', 'placeholder'    => 'Project Amount'])}}
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        {{ Form::label('title', 'Payment Method', ['class'   =>  'control-label text-right col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('paymentmethod', ['0' => 'Cash', '1' => 'Cheque', '2' => 'RTGS/NEFT'], ['placeholder' => 'Payment Methohd'], ['class' => 'form-control', 'id' => 'paymentmethod']) }}
                                            <small class="form-control-feedback"> This is inline help </small>
                                            <div id="showMe">
                                                <span id="paymentTitle"></span>
                                                <input type="text" value="0" class="form-control" id="delamount">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        {{ Form::label('title', 'Client Type', ['class'   =>  'control-label text-right col-md-3']) }}
                                        <div class="col-md-9">
                                            {{ Form::select('clienttype', ['0' => 'Individual', '1' => 'Govt', '2' => 'Pvt Ltd.', '3' =>  'NGO'], ['placeholder' => 'Pick a size...'], ['class' => 'form-control']) }}
                                            <small class="form-control-feedback"> This is inline help </small> </div>
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
                <form action="#" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="box-title">Person Info</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="John doe">
                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group has-danger row">
                                    <label class="control-label text-right col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control form-control-danger" placeholder="12n">
                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                        <small class="form-control-feedback"> Select your gender. </small> </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Category</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Membership</label>
                                    <div class="col-md-9">
                                        <div class="m-b-10">
                                            <label class="custom-control custom-radio">
                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-label">Free</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-label">Paid</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h3 class="box-title">Address</h3>
                        <hr class="m-t-0 m-b-40">
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Address 1</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Address 2</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">State</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Post Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Country</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Country 1</option>
                                            <option>Country 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                    </div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
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
    var elem = document.getElementById("paymentmethod");
    elem.onchange = function(){
        var hiddenDiv = document.getElementById("showMe");
        hiddenDiv.style.display = (this.value == "") ? "none":"block";
        document.getElementById("paymentTitle").value = 'CASH';
    };
</script>
@endpush
@endsection
