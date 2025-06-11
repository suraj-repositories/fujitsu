@extends('layouts.super_admin')
@section('super-admin-content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <h1 class="page-title font-medium text-lg mb-2">Registration Settings</h1>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Authentication</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration Settings</li>
                    </ol>
                </nav>

            </div>
            <div class="flex flex-wrap gap-2">
                <a href="javascript:void(0);" class="ti-btn ti-btn-soft-info btn-wave  waves-effect waves-light me-2 m-0">
                    <i class="bx bx-info-circle align-middle"></i> Help
                </a>
                <button type="button" class="ti-btn ti-btn-soft-primary btn-wave me-0 waves-effect waves-light">
                    <i class="bx bxs-chevron-up align-middle"></i>
                </button>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start:: row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Registration Settings
                        </div>
                        <div class="prism-toggle">

                        </div>
                    </div>
                    <div class="box-body">

                        <h6 class="mb-3 font-bold">Form Fields</h6>

                        <div class="flex gap-4 flex-wrap">
                            <div
                                class="form-check p-3 border border-dashed border-secondary rounded w-fit min-w-[200px] cursor-pointer clip-checked">
                                <input type="checkbox" id="flexCheckDefault" class="form-check-input" />
                                <label for="flexCheckDefault" class="form-check-label">
                                    <span class="ms-2">First Name</span>
                                </label>
                            </div>
                        </div>



                    </div>
                    <div class="box-footer hidden border-t-0">

                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->



    </div>
@endsection
