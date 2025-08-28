@extends('layouts.super_admin')
@section('title', 'Auth Theme Settings')

@section('super-admin-content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <h1 class="page-title font-medium text-lg mb-2">Auth Theme Settings</h1>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Auth Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Auth Theme Settings</li>
                    </ol>
                </nav>
            </div>
            <div class="flex flex-wrap gap-2">
                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-info btn-wave  waves-effect waves-light me-2 m-0">
                    <i class="bx bx-info-circle align-middle"></i> Help
                </a>
                {{-- <button type="button" class="ti-btn ti-btn-soft-primary btn-wave me-0 waves-effect waves-light">
                    <i class="bx bxs-chevron-up align-middle"></i>
                </button> --}}
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start:: row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">

                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Login Themes
                        </div>
                        <div class="prism-toggle">
                        </div>
                    </div>
                    <div class="box-body">
                        <h6 class="mb-3 font-bold"></h6>
                        <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 login-themes-container">
                            @foreach ($loginThemes as $loginTheme)
                                <div class="relative theme-box cursor-pointer @if($loginTheme->is_applied) checked-grayscale checked-border @endif" >
                                    <img src="{{ asset($loginTheme->image_path) }}" class="theme-img">
                                    <input type="checkbox" data-enable-id="{{ $loginTheme->id }}" class="form-check-input absolute top-2 right-2" @if($loginTheme->is_applied) checked @endif>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Register Themes
                        </div>
                        <div class="prism-toggle">
                        </div>
                    </div>
                    <div class="box-body">
                        <h6 class="mb-3 font-bold"></h6>
                        <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 register-themes-container">
                            @foreach ($registerThemes as $theme)
                                <div class="relative theme-box cursor-pointer @if($theme->is_applied) checked-grayscale checked-border @endif" >
                                    <img src="{{ asset($theme->image_path) }}" class="theme-img">
                                    <input type="checkbox" data-enable-id="{{ $theme->id }}" class="form-check-input absolute top-2 right-2" @if($theme->is_applied) checked @endif>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Forgot-Password Themes
                        </div>
                        <div class="prism-toggle">
                        </div>
                    </div>
                    <div class="box-body">
                        <h6 class="mb-3 font-bold"></h6>
                        <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 forgot-password-themes-container">
                            @foreach ($forgotPasswordThemes as $loginTheme)
                                <div class="relative theme-box cursor-pointer @if($loginTheme->is_applied) checked-grayscale checked-border @endif" >
                                    <img src="{{ asset($loginTheme->image_path) }}" class="theme-img">
                                    <input type="checkbox" data-enable-id="{{ $loginTheme->id }}" class="form-check-input absolute top-2 right-2" @if($loginTheme->is_applied) checked @endif>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End:: row-1 -->



    </div>
@endsection

