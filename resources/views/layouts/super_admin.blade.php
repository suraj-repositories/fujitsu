@extends('layouts.layout')

@section('styles')
@endsection

@section('content')
    <div class="page">

        <!-- Start::main-sidebar -->
        @include('super_admin.partials.sidebar')
        <!-- End::main-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            @yield('super-admin-content')
        </div>
        <!-- End::content  -->

        <!-- Start::main-footer -->
        @include('layouts.partials.footer')
        <!-- End::main-footer -->

        <!-- Start::main-modal -->
        @include('layouts.partials.sm_search')
        <!-- End::main-modal -->



    </div>
@endsection

@section('scripts')
@endsection
