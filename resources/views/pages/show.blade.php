@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Projects</h4>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ProjectID</th>
                                <th>Project Name</th>
                                <th>Amount</th>
                                <th>Delivery date</th>
                                <th>Payment Method</th>
                                <th>Client Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($projects) > 0)
                            <?php $count = 1 ?>
                                @foreach ($projects as $project)
                                    <tr>
                                    <td>{{ $count }}</td>
                                        <td>{{$project->projectid}}</td>
                                        <td>{{$project->projectname}}</td>
                                        <td>{{number_format($project->amount, 2)}}</td>
                                        <td>{{$project->deliverydate}}</td>
                                        <td>{{$project->paymentmethod}}</td>
                                        <td>{{$project->clienttype}}</td>
                                        <td>
                                            {{Form::submit('Edit', ['class'   =>  'btn btn-success' ])}}
                                            {{Form::submit('Delete', ['class'   =>  'btn btn-danger' ])}}
                                        </td>
                                    </tr>
                                <?php $count++ ?>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
@endpush
@endsection
