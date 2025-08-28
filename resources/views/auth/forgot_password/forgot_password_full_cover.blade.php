@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')

  <div class="block items-center justify-center authentication overflow-hidden">
        <div class="md:max-w-[100%] m-0 sm:my-3 mx-auto xl:!m-0 max-w-[100%]">

            <div class="grid grid-cols-12  authentication-cover-main mx-0 bg-white dark:bg-bodybg h-screen">
                <div
                    class="xxl:col-span-8 xl:col-span-8 lg:col-span-12 col-span-12 xl:block hidden px-0 order-{{ !empty($direction) && $direction == 'ltr' ? '2' : '1' }}">
                    <div class="authentication-cover overflow-hidden h-screen">
                        <div class="authentication-cover-bg">
                            <img src="{{ asset('assets/images/media/svg/pattren-3.svg') }}" alt="">
                        </div>
                        <div class="authentication-cover-logo">
                            <a aria-label="anchor" href="index.html">
                                <img src="{{ asset('/assets/images/brand-logos/desktop-dark.png') }}" alt=""
                                    class="authentication-brand desktop-dark">
                            </a>
                        </div>
                        <div class="aunthentication-cover-content-main p-6 flex items-center justify-center">
                            <div class="grid grid-cols-12 justify-center items-center">
                                <div class="xxl:col-span-1 col-span-12"></div>
                                <div class="xxl:col-span-10 xl:col-span-12 col-span-12">
                                    <div class="rounded-[0.3rem] bg-white-transparent authentication-sub-content">
                                        <div class="flex items-center justify-center">
                                            <img src="{{ asset('/assets/images/media/media-80.png') }}" alt="img">
                                        </div>
                                        <h6 class="mt-3 text-fixed-white font-semibold text-center leading-[1.2]">
                                            "Photography is a way of feeling, of touching, of loving. What you have caught
                                            on film is captured forever."</h6>
                                    </div>
                                </div>
                                <div class="xxl:col-span-1 col-span-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="xxl:col-span-4 xl:col-span-4 col-span-12 order-{{ !empty($direction) && $direction == 'ltr' ? '1' : '2' }}">
                    <div
                        class="grid grid-cols-12 justify-center items-center h-screen overflow-y-auto scrollbar-thin [scrollbar-gutter:stable]">

                        <div
                            class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box !shadow-none my-auto">
                                  @include('auth.forgot_password.forgot_password_form')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
