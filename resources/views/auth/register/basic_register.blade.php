@extends('layouts.auth')

@section('title', 'Sign In')

@section('content')
    <div class="container">
        <div class="grid grid-cols-12 justify-center authentication authentication-basic items-center h-full">
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12 px-3">
                <div class="mb-4 flex justify-center auth-logo">
                    <a href="index.html">
                        <img src="{{ asset('/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                            class="desktop-dark">
                    </a>
                </div>
                <div class="box my-4 border z-10 relative border-defaultborder dark:border-defaultborder/10">
                    <div class="box-body p-[2rem] py-3 min-w-[90dvw] sm:min-w-[100%]">
                        @include('auth.register.register_form')
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
        </div>
    </div>

@endsection
