@extends('layouts.auth')

@section('title', 'Sign In')

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
                                <form action="{{ route('login.validate') }}" method="POST">
                                    @csrf
                                    <div class="box-body p-[3rem] py-3 min-w-[90dvw] sm:min-w-[400px]">
                                        <div class="flex items-center justify-center mb-4">
                                            <span class="auth-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="password">
                                                    <path fill="#6446fe"
                                                        d="M59,8H5A1,1,0,0,0,4,9V55a1,1,0,0,0,1,1H59a1,1,0,0,0,1-1V9A1,1,0,0,0,59,8ZM58,54H6V10H58Z"
                                                        class="color1d1f47 svgShape"></path>
                                                    <path fill="#6446fe"
                                                        d="M36,35H28a3,3,0,0,1-3-3V27a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v5A3,3,0,0,1,36,35Zm-8-9a1,1,0,0,0-1,1v5a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V27a1,1,0,0,0-1-1Z"
                                                        class="color0055ff svgShape"></path>
                                                    <path fill="#6446fe"
                                                        d="M36 26H28a1 1 0 0 1-1-1V24a5 5 0 0 1 10 0v1A1 1 0 0 1 36 26zm-7-2h6a3 3 0 0 0-6 0zM32 31a1 1 0 0 1-1-1V29a1 1 0 0 1 2 0v1A1 1 0 0 1 32 31z"
                                                        class="color0055ff svgShape"></path>
                                                    <path fill="#6446fe"
                                                        d="M59 8H5A1 1 0 0 0 4 9v8a1 1 0 0 0 1 1H20.08a1 1 0 0 0 .63-.22L25.36 14H59a1 1 0 0 0 1-1V9A1 1 0 0 0 59 8zm-1 4H25l-.21 0a1.09 1.09 0 0 0-.42.2L19.73 16H6V10H58zM50 49H14a1 1 0 0 1-1-1V39a1 1 0 0 1 1-1H50a1 1 0 0 1 1 1v9A1 1 0 0 1 50 49zM15 47H49V40H15z"
                                                        class="color1d1f47 svgShape"></path>
                                                    <circle cx="19.5" cy="43.5" r="1.5" fill="#6446fe"
                                                        class="color0055ff svgShape"></circle>
                                                    <circle cx="24.5" cy="43.5" r="1.5" fill="#6446fe"
                                                        class="color0055ff svgShape"></circle>
                                                    <circle cx="29.5" cy="43.5" r="1.5" fill="#6446fe"
                                                        class="color0055ff svgShape"></circle>
                                                    <circle cx="34.5" cy="43.5" r="1.5" fill="#6446fe"
                                                        class="color0055ff svgShape"></circle>
                                                    <circle cx="39.5" cy="43.5" r="1.5" fill="#6446fe"
                                                        class="color0055ff svgShape"></circle>
                                                    <circle cx="44.5" cy="43.5" r="1.5" fill="#6446fe"
                                                        class="color0055ff svgShape"></circle>
                                                    <path fill="#6446fe"
                                                        d="M60 9a1 1 0 0 0-1-1H28.81l2.37-2.37A19.22 19.22 0 0 1 60 31zM35.19 56l-2.37 2.37A19.22 19.22 0 0 1 4 33V55a1 1 0 0 0 1 1z"
                                                        opacity=".3" class="color0055ff svgShape"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="h4 !font-semibold !mb-0 text-center">Sign In</p>
                                        <p class="!mb-0 text-textmuted dark:text-textmuted/50 !font-normal text-center">
                                            Welcome
                                            back !</p>

                                        @include('layouts.alert')

                                        <div class="grid grid-cols-12 gap-y-3">
                                            <div class="xl:col-span-12 col-span-12">
                                                <label for="signup-auth-uid" class="ti-form-label text-dark">User Id</label>
                                                <div class="relative">
                                                    <input type="text"
                                                        class="form-control form-control-lg @error('auth_uid') invalid @enderror"
                                                        id="signup-auth-uid" placeholder="Enter User Id" name="auth_uid"
                                                        value="{{ old('auth_uid') }}">
                                                </div>
                                                @error('auth_uid')
                                                    <small class="validation-error">
                                                        {{ $message }}
                                                    </small>
                                                @enderror

                                            </div>
                                            <div class="xl:col-span-12 col-span-12 mb-2">
                                                <label for="signin-password"
                                                    class="ti-form-label text-dark block">Password<a
                                                        href="reset-password-basic.html"
                                                        class="float-end link-danger opacity-50 !font-medium text-xs">Forget
                                                        password ?</a></label>
                                                <div class="relative">
                                                    <input type="password"
                                                        class="form-control form-control-lg @error('password') password invalid @enderror"
                                                        id="signin-password" placeholder="password" name="password">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="show-password-button text-textmuted dark:text-textmuted/50"
                                                        onclick="createpassword('signin-password',this)"
                                                        id="button-addon2"><i
                                                            class="ri-eye-off-line align-middle"></i></a>
                                                </div>
                                                @error('password')
                                                    <small class="validation-error">
                                                        {{ $message }}
                                                    </small>
                                                @enderror

                                                <div class="mt-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="defaultCheck1">
                                                        <label
                                                            class="form-check-label text-textmuted dark:text-textmuted/50 !font-normal text-xs"
                                                            for="defaultCheck1">
                                                            Remember password ?
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @include('auth.partials.social_media_logins')

                                        <div class="grid mt-4">
                                            <button type="submit" class="ti-btn ti-btn-primary ti-btn-lg">Sign
                                                In</button>
                                        </div>
                                        <div class="text-center mb-0">
                                            <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Dont have an
                                                account? <a href="sign-up-basic.html" class="text-primary">Sign Up</a></p>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
