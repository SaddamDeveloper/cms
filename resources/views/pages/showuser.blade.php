@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Projects</h4>
                <a href="/adduser"><button class="btn btn-warning float-right mb-2"><i class="fa fa-plus"></i></button></a>   
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Registered At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role == 1 ? "Admin" : "User" }}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/projects/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                                            {{Form::submit('Delete', ['class'   =>  'btn btn-danger' ])}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
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
