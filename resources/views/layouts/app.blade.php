@include('inc.header')
<div id="main-wrapper">
    @include('inc.topbar')
    @include('inc.sidebar')
    @include('inc.breadcumb')
    @include('inc.messages')
    @yield('content')
</div>
@include('inc.footer')
