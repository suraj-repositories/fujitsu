 <aside class="app-sidebar" id="sidebar">
     <!-- Start::main-sidebar-header -->
     <div class="main-sidebar-header">
         <a href="index.html" class="header-logo">
             <img src="/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
             <img src="/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
             <img src="/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
             <img src="/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
             <img src="/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
             <img src="/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
         </a>
     </div>
     <!-- End::main-sidebar-header -->

     <!-- Start::main-sidebar -->
     <div class="main-sidebar" id="sidebar-scroll">

         <!-- Start::nav -->
         <nav class="main-menu-container nav nav-pills flex-col sub-open">
             <div class="slide-left" id="slide-left">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                     viewBox="0 0 24 24">
                     <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                 </svg>
             </div>
             <ul class="main-menu">
                 <!-- Start::slide__category -->
                 <li class="slide__category"><span class="category-name">Dashboards</span></li>
                 <!-- End::slide__category -->

                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <i class="ri-arrow-right-s-line side-menu__angle"></i>
                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256">
                             <rect width="256" height="256" fill="none" />
                             <path
                                 d="M104,216V152h48v64h64V120a8,8,0,0,0-2.34-5.66l-80-80a8,8,0,0,0-11.32,0l-80,80A8,8,0,0,0,40,120v96Z"
                                 fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="16" />
                         </svg>
                         <span class="side-menu__label">Dashboards</span>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0)">Dashboards</a>
                         </li>
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0)">Dashboards</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('superadmin.dashboard.index') }}" class="side-menu__item">Main Dashboard</a>
                         </li>
                         <li class="slide">
                             <a href="index2.html" class="side-menu__item">Analytics</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->

                 <!-- Start::slide__category -->
                 <li class="slide__category"><span class="category-name">Settings</span></li>
                 <!-- End::slide__category -->

                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256">
                             <rect width="256" height="256" fill="none" />
                             <rect x="40" y="88" width="176" height="128" rx="8" fill="none"
                                 stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="16" />
                             <circle cx="128" cy="152" r="12" />
                             <path d="M88,88V56a40,40,0,0,1,80,0V88" fill="none" stroke="currentColor"
                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                         </svg>
                         <span class="side-menu__label">Auth Settings</span>
                         <i class="ri-arrow-right-s-line side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         {{-- <li class="slide">
                             <a href="{{ route('superadmin.settings.auth.registration.index') }}" class="side-menu__item">Registration</a>
                         </li> --}}
                         <li class="slide">
                             <a href="{{ route('superadmin.settings.auth.theme-settings.index') }}" class="side-menu__item">Auth Theme</a>
                         </li>
                         <li class="slide has-sub">
                             <a href="javascript:void(0);" class="side-menu__item">Create Password
                                 <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                             <ul class="slide-menu child2">
                                 <li class="slide">
                                     <a href="create-password-basic.html" class="side-menu__item">Basic</a>
                                 </li>
                                 <li class="slide">
                                     <a href="create-password-cover.html" class="side-menu__item">Cover</a>
                                 </li>
                             </ul>
                         </li>

                     </ul>
                 </li>
                 <!-- End::slide -->

                 <!-- End::slide -->

                 <!-- Start::slide__category -->
                 <li class="slide__category"><span class="category-name">Tools & Components</span></li>
                 <!-- End::slide__category -->

                 <!-- Start::slide -->
                 <li class="slide">
                     <a href="icons.html" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256">
                             <rect width="256" height="256" fill="none" />
                             <polyline points="48 139.59 48 216 208 216 208 139.59" fill="none"
                                 stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="16" />
                             <path d="M54,40H202a8,8,0,0,1,7.69,5.8L224,96H32L46.34,45.8A8,8,0,0,1,54,40Z"
                                 fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="16" />
                             <path d="M96,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor"
                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                             <path d="M160,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor"
                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                             <path d="M224,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor"
                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                         </svg>
                         <span class="side-menu__label">Icons</span>
                     </a>
                 </li>
                 <!-- End::slide -->


             </ul>
             <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                     width="24" height="24" viewBox="0 0 24 24">
                     <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                 </svg></div>
         </nav>
         <!-- End::nav -->

     </div>
     <!-- End::main-sidebar -->

 </aside>
