@extends('layouts.super_admin')

@section('super-admin-content')
    <div class="container-fluid">


        <!-- Start::page-header -->
        <div class="flex items-center justify-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <p class="font-semibold text-xl !mb-0">Welcome Back, Jack Miller</p>
                <p class="text-[13px] text-textmuted dark:text-textmuted/50 !mb-0">Let's dive in and get things done.</p>
            </div>
            <div class="flex gap-2 flex-wrap">
                <div class="form-group">
                    <div class="input-group boder border-defaultborder dark:border-defaultborder/10">
                        <div class="input-group-text bg-white dark:bg-bodybg border-0 pe-0"> <i class="ri-calendar-line"></i>
                        </div>
                        <input type="text" class="form-control breadcrumb-input border-0" id="daterange"
                            placeholder="Search By Date Range">
                    </div>
                </div>
                <div class="ti-btn-list">
                    <button type="button" class="ti-btn ti-btn-primary btn-wave !border-0 me-0 !m-0">
                        <i class="ri-upload-2-line me-2"></i> Export report
                    </button>
                </div>
            </div>
        </div>
        <!-- End::page-header -->

        <!-- Start:: row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-9 col-span-12">
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box main-card-item primary">
                            <div class="box-body">
                                <div class="flex items-start justify-between mb-3 flex-wrap">
                                    <div>
                                        <span class="block mb-4 font-medium">Total Sales</span>
                                        <h3 class="!font-semibold leading-none mb-0">32,981</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-6">
                                            <span class="avatar avatar-md bg-primary svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <rect x="32" y="48" width="192" height="160" rx="8"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path d="M168,88a40,40,0,0,1-80,0" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);"
                                        class="text-textmuted dark:text-textmuted/50 underline font-medium text-[13px]">View
                                        all sales</a>
                                    <span class="text-success font-semibold"><i
                                            class="ti ti-arrow-narrow-up"></i>0.29%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box main-card-item">
                            <div class="box-body">
                                <div class="flex items-start justify-between mb-3 flex-wrap">
                                    <div>
                                        <span class="block mb-4 font-medium">Total Revenue</span>
                                        <h3 class="!font-semibold leading-none mb-0">$14,32,145</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-6">
                                            <span class="avatar avatar-md bg-secondary svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <line x1="128" y1="24" x2="128" y2="232"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path
                                                        d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);"
                                        class="text-textmuted dark:text-textmuted/50 underline font-medium text-[13px]">complete
                                        revenue</a>
                                    <span class="text-danger font-semibold"><i
                                            class="ti ti-arrow-narrow-down"></i>3.45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box main-card-item">
                            <div class="box-body">
                                <div class="flex items-start justify-between mb-3 flex-wrap">
                                    <div>
                                        <span class="block mb-4 font-medium">Page Views</span>
                                        <h3 class="!font-semibold leading-none mb-0">4,678</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-6">
                                            <span class="avatar avatar-md bg-success svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <circle cx="84" cy="108" r="52" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);"
                                        class="text-textmuted dark:text-textmuted/50 underline font-medium text-[13px]">Total
                                        page views</a>
                                    <span class="text-success font-semibold"><i
                                            class="ti ti-arrow-narrow-up"></i>11.54%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box main-card-item">
                            <div class="box-body">
                                <div class="flex items-start justify-between mb-3 flex-wrap">
                                    <div>
                                        <span class="block mb-4 font-medium">Profit By Sale</span>
                                        <h3 class="!font-semibold leading-none mb-0">$645</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-6">
                                            <span class="avatar avatar-md bg-info svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                    <rect width="256" height="256" fill="none" />
                                                    <path
                                                        d="M40,56V184a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H56A16,16,0,0,1,40,56h0A16,16,0,0,1,56,40H192"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="16" />
                                                    <circle cx="180" cy="132" r="12" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a href="javascript:void(0);"
                                        class="text-textmuted dark:text-textmuted/50 underline font-medium text-[13px]">Total
                                        profit earned</a>
                                    <span class="text-success font-semibold"><i
                                            class="ti ti-arrow-narrow-up"></i>0.18%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Visitors Report
                                </div>
                                <div class="ti-dropdown hs-dropdown">
                                    <a href="javascript:void(0);"
                                        class="p-2 text-xs text-textmuted dark:text-textmuted/50 hs-dropdown-toggle ti-dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"> Sort By <i
                                            class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i> </a>
                                    <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="grid grid-cols-12 gap-y-4 sm:gap-x-4">
                                    <div class="xl:col-span-6 col-span-12">
                                        <div
                                            class="p-4 bg-light text-default rounded-sm border border-dashed border-defaultborder dark:border-defaultborder/10">
                                            <span class="block mb-1">This Week</span>
                                            <h5 class="!font-semibold leading-none mb-0 flex flex-wrap items-end">
                                                14,642<span
                                                    class="text-success font-semibold text-[13px] ms-2 inline-flex items-center">0.64%<i
                                                        class="ri-arrow-up-s-line ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <div
                                            class="p-4 bg-light text-default rounded-sm border border-dashed border-defaultborder dark:border-defaultborder/10">
                                            <span class="block mb-1">Last Week</span>
                                            <h5 class="!font-semibold leading-none mb-0 flex flex-wrap items-end">
                                                12,326<span
                                                    class="text-danger font-semibold text-[13px] ms-2 inline-flex items-center">5.31%<i
                                                        class="ri-arrow-down-s-line ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div id="visitors-report"></div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-8 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Order Statistics
                                </div>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="inline-flex rounded-sm">
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.25rem] !px-[0.8rem] bg-primary btn-wave text-white waves-effect waves-light">Day</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.25rem] !px-[0.8rem] btn-wave ti-btn-soft-primary waves-effect waves-light">Week</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.25rem] !px-[0.8rem] btn-wave ti-btn-soft-primary waves-effect waves-light">Month</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-[0.8rem] !py-[0.25rem] !px-[0.8rem] btn-wave ti-btn-soft-primary !rounded-s-none waves-effect waves-light">Year</button>
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn ti-btn-light border ti-btn-sm">Export<i
                                                class="ri-share-forward-line ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body pb-0">
                                <div id="ordered-statistics"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-3 col-span-12">
                <div class="box overflow-hidden">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Top Selling categories
                        </div>
                        <div class="ti-dropdown hs-dropdown">
                            <a href="javascript:void(0);"
                                class="p-0 text-xs text-textmuted dark:text-textmuted/50 hs-dropdown-toggle ti-dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false"> Sort By <i
                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i> </a>
                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                <li><a class="ti-dropdown-item" href="javascript:void(0);">This Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body p-0">
                        <div id="top-categories" class="p-4 pb-3"></div>
                        <div class="border-t border-defaultborder dark:border-defaultborder/10">
                            <ul class="ti-list-group list-group-flush top-categories border-0 rounded-none">
                                <li class="ti-list-group-item">
                                    <div class="flex items-center justify-between">
                                        <div class="leading-none">
                                            <div class="font-semibold mb-1">Electronics</div>
                                            <div><span class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased
                                                    by <span
                                                        class="text-success font-medium ms-1 inline-flex items-center">0.64%<i
                                                            class="ti ti-trending-up ms-1"></i></span></span></div>
                                        </div>
                                        <div class="leading-none text-end">
                                            <span class="block font-semibold h6 mb-1">1,754</span>
                                            <span
                                                class="block text-[13px] text-textmuted dark:text-textmuted/50">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item">
                                    <div class="flex items-center justify-between">
                                        <div class="leading-none">
                                            <div class="font-semibold mb-1">Accessories</div>
                                            <div><span class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased
                                                    by <span
                                                        class="text-danger font-medium ms-1 inline-flex items-center">2.75%<i
                                                            class="ti ti-trending-down ms-1"></i></span></span></div>
                                        </div>
                                        <div class="leading-none text-end">
                                            <span class="block font-semibold h6 mb-1">1,234</span>
                                            <span
                                                class="block text-[13px] text-textmuted dark:text-textmuted/50">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item">
                                    <div class="flex items-center justify-between">
                                        <div class="leading-none">
                                            <div class="font-semibold mb-1">Home Appliances</div>
                                            <div><span class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased
                                                    by <span
                                                        class="text-success font-medium ms-1 inline-flex items-center">1.54%<i
                                                            class="ti ti-trending-up ms-1"></i></span></span></div>
                                        </div>
                                        <div class="leading-none text-end">
                                            <span class="block font-semibold h6 mb-1">878</span>
                                            <span
                                                class="block text-[13px] text-textmuted dark:text-textmuted/50">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item">
                                    <div class="flex items-center justify-between">
                                        <div class="leading-none">
                                            <div class="font-semibold mb-1">Beauty Products</div>
                                            <div><span class="text-textmuted dark:text-textmuted/50 text-[13px]">Increased
                                                    by <span
                                                        class="text-success font-medium ms-1 inline-flex items-center">1.54%<i
                                                            class="ti ti-trending-up ms-1"></i></span></span></div>
                                        </div>
                                        <div class="leading-none text-end">
                                            <span class="block font-semibold h6 mb-1">270</span>
                                            <span
                                                class="block text-[13px] text-textmuted dark:text-textmuted/50">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item">
                                    <div class="flex items-center justify-between">
                                        <div class="leading-none">
                                            <div class="font-semibold mb-1">Furniture</div>
                                            <div><span class="text-textmuted dark:text-textmuted/50 text-[13px]">Decreased
                                                    by <span
                                                        class="text-danger font-medium ms-1 inline-flex items-center">0.12%<i
                                                            class="ti ti-trending-down ms-1"></i></span></span></div>
                                        </div>
                                        <div class="leading-none text-end">
                                            <span class="block font-semibold h6 mb-1">456</span>
                                            <span
                                                class="block text-[13px] text-textmuted dark:text-textmuted/50">Sales</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->

        <!-- Start:: row-2 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-3 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Country Wise Sales
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="list-unstyled mb-0 top-country-sales">
                            <li>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="leading-none">
                                        <span
                                            class="avatar avatar-md p-2 bg-light border dark:border-defaultborder/10 avatar-rounded">
                                            <img src="{{ asset('/build/assets/images/flags/us_flag.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto leading-none">
                                        <span class="font-semibold mb-2 block">United States</span>
                                        <span class="block text-textmuted dark:text-textmuted/50 text-[13px]">32,190
                                            Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 font-semibold mb-0">$32,190</span>
                                        <span class="text-success font-medium block"><i
                                                class="ti ti-arrow-narrow-up"></i>0.27%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="leading-none">
                                        <span
                                            class="avatar avatar-md p-2 bg-light border dark:border-defaultborder/10 avatar-rounded">
                                            <img src="{{ asset('/build/assets/images/flags/germany_flag.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto leading-none">
                                        <span class="font-semibold mb-2 block">Germany</span>
                                        <span class="block text-textmuted dark:text-textmuted/50 text-[13px]">8,798
                                            Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 font-semibold mb-0">$29,234</span>
                                        <span class="text-success font-medium block"><i
                                                class="ti ti-arrow-narrow-up"></i>0.12%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="leading-none">
                                        <span
                                            class="avatar avatar-md p-2 bg-light border dark:border-defaultborder/10 avatar-rounded">
                                            <img src="{{ asset('/build/assets/images/flags/mexico_flag.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto leading-none">
                                        <span class="font-semibold mb-2 block">Mexico</span>
                                        <span class="block text-textmuted dark:text-textmuted/50 text-[13px]">16,885
                                            Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 font-semibold mb-0">$26,166</span>
                                        <span class="text-danger font-medium block"><i
                                                class="ti ti-arrow-narrow-down"></i>0.75%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="leading-none">
                                        <span
                                            class="avatar avatar-md p-2 bg-light border dark:border-defaultborder/10 avatar-rounded">
                                            <img src="{{ asset('/build/assets/images/flags/uae_flag.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto leading-none">
                                        <span class="font-semibold mb-2 block">Uae</span>
                                        <span class="block text-textmuted dark:text-textmuted/50 text-[13px]">14,885
                                            Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 font-semibold mb-0">$24,263</span>
                                        <span class="text-success font-medium block"><i
                                                class="ti ti-arrow-narrow-up"></i>1.45%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="leading-none">
                                        <span
                                            class="avatar avatar-md p-2 bg-light border dark:border-defaultborder/10 avatar-rounded">
                                            <img src="{{ asset('/build/assets/images/flags/argentina_flag.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto leading-none">
                                        <span class="font-semibold mb-2 block">Argentina</span>
                                        <span class="block text-textmuted dark:text-textmuted/50 text-[13px]">17,578
                                            Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 font-semibold mb-0">$23,897</span>
                                        <span class="text-success font-medium block"><i
                                                class="ti ti-arrow-narrow-up"></i>0.36%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center flex-wrap gap-2">
                                    <div class="leading-none">
                                        <span
                                            class="avatar avatar-md p-2 bg-light border dark:border-defaultborder/10 avatar-rounded">
                                            <img src="{{ asset('/build/assets/images/flags/russia_flag.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto leading-none">
                                        <span class="font-semibold mb-2 block">Russia</span>
                                        <span class="block text-textmuted dark:text-textmuted/50 text-[13px]">10,118
                                            Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 font-semibold mb-0">$20,212</span>
                                        <span class="text-danger font-medium block"><i
                                                class="ti ti-arrow-narrow-down"></i>0.68%</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-3 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Visitors By Gender
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="segmentation"></div>
                        <div>
                            <ul class="ti-list-group segmentation-list">
                                <li class="ti-list-group-item male">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <span class="block font-semibold">Male<span
                                                    class="text-success font-medium ms-1 inline-flex items-center"><i
                                                        class="ti ti-arrow-narrow-up"></i>0.78%</span></span>
                                        </div>
                                        <div class="h6 mb-0 font-semibold">
                                            18,235
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item female">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <span class="block font-semibold">Female<span
                                                    class="text-danger font-medium ms-1 inline-flex"><i
                                                        class="ti ti-arrow-narrow-down"></i>1.57%</span></span>
                                        </div>
                                        <div class="h6 mb-0 font-semibold">
                                            12,743
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item others">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <span class="block font-semibold">Others<span
                                                    class="text-success font-medium ms-1 inline-flex items-center"><i
                                                        class="ti ti-arrow-narrow-up"></i>0.32%</span></span>
                                        </div>
                                        <div class="h6 mb-0 font-semibold">
                                            5,369
                                        </div>
                                    </div>
                                </li>
                                <li class="ti-list-group-item not-mentioned">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <span class="block font-semibold">Not Mentioned<span
                                                    class="text-success font-medium ms-1 inline-flex items-center"><i
                                                        class="ti ti-arrow-narrow-up"></i>19.45%</span></span>
                                        </div>
                                        <div class="h6 mb-0 font-semibold">
                                            16,458
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-3 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Recent Activity
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="list-unstyled recent-activity-list">
                            <li>
                                <div class="flex justify-between items-start gap-2 pe-4">
                                    <div>
                                        <span class="block">Jane Smith ordered 5 new units of <span
                                                class="text-primary font-semibold">Product Y.</span></span>
                                    </div>
                                    <div class="recent-activity-time text-[13px]">
                                        <span class="text-textmuted dark:text-textmuted/50">12:45 Am</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex justify-between items-start gap-2 pe-4">
                                    <div>
                                        <span class="block">Scheduled demo with potential client DEF for next
                                            Tuesday</span>
                                    </div>
                                    <div class="recent-activity-time text-[13px]">
                                        <span class="text-textmuted dark:text-textmuted/50">03:26 Pm</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex justify-between items-start gap-2 pe-4">
                                    <div>
                                        <span class="block">Product X price updated to <span
                                                class="text-success font-semibold">$XX.XX</span> per every unit</span>
                                    </div>
                                    <div class="recent-activity-time text-[13px]">
                                        <span class="text-textmuted dark:text-textmuted/50">08:52 Pm</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex justify-between items-start gap-2 pe-4">
                                    <div>
                                        <span class="block">Database backup completed successfully</span>
                                    </div>
                                    <div class="recent-activity-time text-[13px]">
                                        <span class="text-textmuted dark:text-textmuted/50">02:54 Am</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex justify-between items-start gap-2 pe-4">
                                    <div>
                                        <span class="block">Generated <span
                                                class="text-warning font-semibold">$10,000</span> in revenue</span>
                                    </div>
                                    <div class="recent-activity-time text-[13px]">
                                        <span class="text-textmuted dark:text-textmuted/50">11:38 Am</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex justify-between items-start gap-2 pe-4">
                                    <div>
                                        <span class="block">Processed refund for Order <span
                                                class="text-danger font-semibold">#13579</span> due to defective
                                            item</span>
                                    </div>
                                    <div class="recent-activity-time text-[13px]">
                                        <span class="text-textmuted dark:text-textmuted/50">01:42 Pm</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-3 col-span-12">
                <div class="box overflow-hidden">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Recent Transactions
                        </div>
                        <a href="javascript:void(0);" class="text-[13px] text-textmuted dark:text-textmuted/50"> View
                            All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                    </div>
                    <div class="box-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <th scope="col" class="font-semibold text-[0.9rem]">Payment Mode</th>
                                        <th scope="col" class="!text-end font-semibold text-[0.9rem]">Amount Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            <div class="flex items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                        <i class="ri-paypal-line text-lg"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Paypal ****2783</span>
                                                    <span
                                                        class="block text-[13px] text-textmuted dark:text-textmuted/50">Online
                                                        Transaction</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="!text-end">
                                            <div>
                                                <span class="block font-semibold mb-1 h6">$1,234.78</span>
                                                <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Nov
                                                    22,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            <div class="flex items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                                        <i class="ri-wallet-3-line text-lg"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Digital Wallet</span>
                                                    <span
                                                        class="block text-[13px] text-textmuted dark:text-textmuted/50">Online
                                                        Transaction</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="!text-end">
                                            <div>
                                                <span class="block font-semibold mb-1 h6">$623.99</span>
                                                <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Nov
                                                    22,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            <div class="flex items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-success-transparent">
                                                        <i class="ri-mastercard-line text-lg"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Mastro Card ****7893</span>
                                                    <span
                                                        class="block text-[13px] text-textmuted dark:text-textmuted/50">Card
                                                        Payment</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="!text-end">
                                            <div>
                                                <span class="block font-semibold mb-1 h6">$1,324</span>
                                                <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Nov
                                                    21,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td>
                                            <div class="flex items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                                        <i class="ti ti-currency-dollar text-lg"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Cash On Delivery</span>
                                                    <span
                                                        class="block text-[13px] text-textmuted dark:text-textmuted/50">Pay
                                                        On Delivery</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="!text-end">
                                            <div>
                                                <span class="block font-semibold mb-1 h6">$1,123.49</span>
                                                <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Nov
                                                    20,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="flex items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                                        <i class="ri-visa-line text-lg"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="block font-semibold mb-1">Visa Card ****2563</span>
                                                    <span
                                                        class="block text-[13px] text-textmuted dark:text-textmuted/50">Card
                                                        Payment</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0 !text-end">
                                            <div>
                                                <span class="block font-semibold mb-1 h6">$1,289</span>
                                                <span class="block text-[13px] text-textmuted dark:text-textmuted/50">Nov
                                                    18,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-2 -->

        <!-- Start:: row-3 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-9 col-span-12">
                <div class="box">
                    <div class="box-header justify-between">
                        <div class="box-title">
                            Recent Orders
                        </div>
                        <div class="flex flex-wrap gap-2 items-center">
                            <div>
                                <input class="form-control" type="text" placeholder="Search Here"
                                    aria-label=".form-control-sm example">
                            </div>
                            <div class="ti-dropdown hs-dropdown">
                                <a href="javascript:void(0);"
                                    class="ti-btn ti-btn-primary ti-btn-sm btn-wave hs-dropdown-toggle ti-dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                        class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                </a>
                                <ul class="ti-dropdown-menu hs-dropdown-menu hidden" role="menu">
                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">New</a></li>
                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Popular</a></li>
                                    <li><a class="ti-dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabeljob1" value=""
                                                aria-label="..."></th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Ordered Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                id="checkboxNoLabeljob2" value="" aria-label="..."></td>
                                        <td>
                                            <div class="flex">
                                                <span class="avatar avatar-md bg-light"><img
                                                        src="{{ asset('/build/assets/images/ecommerce/png/1.png') }}" class=""
                                                        alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="font-semibold !mb-0 flex items-center"><a
                                                            href="javascript:void(0);">Classic tufted leather sofa</a></p>
                                                    <p class="text-[13px] text-textmuted dark:text-textmuted/50 !mb-0">
                                                        Pixel</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Furniture
                                        </td>
                                        <td class="text-center"> 1 </td>
                                        <td>
                                            <div class="flex items-center gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="{{ asset('/build/assets/images/faces/1.jpg') }}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Lucas Hayes
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary-transparent">Shipped</span></td>
                                        <td class="font-semibold">$1200.00</td>
                                        <td>2024-05-18</td>
                                        <td>
                                            <div class="ti-btn-list flex gap-2">
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                id="checkboxNoLabeljob3" value="" aria-label="..." checked></td>
                                        <td>
                                            <div class="flex">
                                                <span class="avatar avatar-md bg-light"><img
                                                        src="{{ asset('/build/assets/images/ecommerce/png/36.png') }}" class=""
                                                        alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="font-semibold !mb-0 flex items-center"><a
                                                            href="javascript:void(0);">Rose Flower Pot</a></p>
                                                    <p class="text-[13px] text-textmuted dark:text-textmuted/50 !mb-0">
                                                        Sonic</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Decoration
                                        </td>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="{{ asset('/build/assets/images/faces/2.jpg') }}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Abigail Scott
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Delivered</span>
                                        </td>
                                        <td class="font-semibold">$250.00</td>
                                        <td>2024-05-19</td>
                                        <td>
                                            <div class="ti-btn-list flex gap-2">
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                id="checkboxNoLabeljob4" value="" aria-label="..." checked></td>
                                        <td>
                                            <div class="flex">
                                                <span class="avatar avatar-md bg-light"><img
                                                        src="{{ asset('/build/assets/images/ecommerce/png/31.png') }}" class=""
                                                        alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="font-semibold !mb-0 flex items-center"><a
                                                            href="javascript:void(0);">Leather Handbag</a></p>
                                                    <p class="text-[13px] text-textmuted dark:text-textmuted/50 !mb-0">
                                                        Elite</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Fashion
                                        </td>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="{{ asset('/build/assets/images/faces/10.jpg') }}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Mason Wallace
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary-transparent">Processing</span>
                                        </td>
                                        <td class="font-semibold">$800.00</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <div class="ti-btn-list flex gap-2">
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                        <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                id="checkboxNoLabeljob5" value="" aria-label="..."></td>
                                        <td>
                                            <div class="flex">
                                                <span class="avatar avatar-md bg-light"><img
                                                        src="{{ asset('/build/assets/images/ecommerce/png/14.png') }}" class=""
                                                        alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="font-semibold !mb-0 flex items-center"><a
                                                            href="javascript:void(0);">Polaroid Medium Camera</a></p>
                                                    <p class="text-[13px] text-textmuted dark:text-textmuted/50 !mb-0">
                                                        Bright</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Electronics
                                        </td>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="{{ asset('/build/assets/images/faces/3.jpg') }}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Chloe Lewis
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-transparent">Pending</span>
                                        </td>
                                        <td class="font-semibold">$50.00</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <div class="ti-btn-list flex gap-2">
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4 border-bottom-0"><input class="form-check-input" type="checkbox"
                                                id="checkboxNoLabeljob7" value="" aria-label="..."></td>
                                        <td class="border-bottom-0">
                                            <div class="flex">
                                                <span class="avatar avatar-md bg-light"><img
                                                        src="{{ asset('/build/assets/images/ecommerce/png/13.png') }}" class=""
                                                        alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="font-semibold !mb-0 flex items-center"><a
                                                            href="javascript:void(0);">Digital Watch</a></p>
                                                    <p class="text-[13px] text-textmuted dark:text-textmuted/50 !mb-0">Nova
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            Fashion
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            2
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="flex items-center gap-2">
                                                <div class="leading-none">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="{{ asset('/build/assets/images/faces/11.jpg') }}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Henry Morgan
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="badge bg-primary-transparent">Shipped</span>
                                        </td>
                                        <td class="font-semibold border-bottom-0">$100.00</td>
                                        <td class="border-bottom-0">2024-05-21</td>
                                        <td class="border-bottom-0">
                                            <div class="ti-btn-list flex gap-2">
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-primary btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-soft-secondary btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="flex items-center">
                            <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i> </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-2">
                                    <ul class="ti-pagination mb-0 flex-wrap">
                                        <li class="page-item disabled">
                                            <a class="page-link px-3 py-[0.375rem] !border-0" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem] !border-0"
                                                href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem] !text-primary !border-0"
                                                href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-3 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Visitors By Browser
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="list-unstyled visitors-browser-list">
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/chrome.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">Chrome<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1">(Google
                                                    LLC)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-success me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-up"></i>3.26%</span>13,546</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                                style="width: 70%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/edge.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">Edge<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1 font-normal">(Microsoft
                                                    Corp)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-danger me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-down"></i>0.96%</span>11,322</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/firefox.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">Firefox<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1 font-normal">(Mozilla
                                                    Corp)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-success me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-up"></i>1.64%</span>6,236</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                style="width: 30%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/safari.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">Safari<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1 font-normal">(Apple
                                                    Inc)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-success me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-up"></i>6.38%</span>10,235</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/uc.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">UCBrowser<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1 font-normal">(UCWeb)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-success me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-up"></i>5.18%</span>14,965</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/opera.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">Opera<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1 font-normal">(Opera
                                                    Software AS)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-danger me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-down"></i>1.65%</span>8,432</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <div>
                                        <span
                                            class="avatar avatar-md avatar-rounded bg-light p-2 border dark:border-defaultborder/10">
                                            <img src="{{ asset('/build/assets/images/browsers/samsung-internet.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-auto">
                                        <div class="flex items-center justify-between mb-2 flex-wrap">
                                            <span class="font-semibold inline-flex">Samsung Internet<span
                                                    class="text-textmuted dark:text-textmuted/50 text-[13px] ms-1 rtl:me-1 font-normal">(Samsung)</span></span>
                                            <span class="block h6 mb-0 font-semibold"><span
                                                    class="text-success me-2 rtl:ms-2 text-[13px] font-medium inline-flex"><i
                                                        class="ti ti-arrow-narrow-up"></i>0.99%</span>4,134</span>
                                        </div>
                                        <div class="progress progress-xs" role="progressbar" aria-valuenow="36"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-orangemain"
                                                style="width: 36%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-3 -->


    </div>
@endsection
