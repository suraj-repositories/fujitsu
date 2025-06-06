@extends('layouts.layout')

@section('styles')
@endsection

@section('content')
    <div class="page">

        <!-- Start::main-header -->
        @include('super_admin.partials.navbar')
        <!-- End::main-header -->

        <!-- Start::main-sidebar -->
        @include('super_admin.partials.sidebar')
        <!-- End::main-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            @yield('super-admin-content')
        </div>
        <!-- End::content  -->

        <!-- Start::main-footer -->
        @include('layouts.footer')
        <!-- End::main-footer -->

        <!-- Start::main-modal -->
        @include('layouts.sm_search')
        <!-- End::main-modal -->



    </div>
@endsection

@section('scripts')
@endsection
