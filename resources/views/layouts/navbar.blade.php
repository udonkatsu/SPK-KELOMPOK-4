 <!-- [Body] Start -->
 @php
 use Illuminate\Support\Facades\Auth;
 @endphp

 <body>
     <!-- [ Pre-loader ] start -->
     <div class="loader-bg">
         <div class="loader-track">
             <div class="loader-fill"></div>
         </div>
     </div>
     <!-- [ Pre-loader ] End -->
     <!-- [ Header Topbar ] start -->
     <header class="pc-header">
         <div class="m-header">
             <a href="/home" class="b-brand">

                 {{-- <img src="{{ asset('template') }}/dist/assets/images/logo-dark.svg" alt class="logo logo-lg" />
                 --}}
                 <span class="fw-bold h3 text-gray-700">SPK | Trend Moment</span>
             </a>

             <div class="pc-h-item">
                 <a href="#" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
                     <i class="ti ti-menu-2"></i>
                 </a>
             </div>
         </div>
         <div class="header-wrapper">
             <div class="me-auto pc-mob-drp">
                 <ul class="list-unstyled">
                     <li class="pc-h-item header-mobile-collapse">
                         <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
                             <i class="ti ti-menu-2"></i>
                         </a>
                     </li>
                     {{-- <li class="dropdown pc-h-item d-inline-flex d-md-none">
                         <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0"
                             data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                             aria-expanded="false">
                             <i class="ti ti-search"></i>
                         </a>
                         <div class="dropdown-menu pc-h-dropdown drp-search">
                             <form class="px-3">
                                 <div class="form-group mb-0 d-flex align-items-center">
                                     <i class="ti ti-search"></i>
                                     <input type="search" class="form-control border-0 shadow-none"
                                         placeholder="Search here..." />
                                 </div>
                             </form>
                         </div>
                     </li>
                     <li class="pc-h-item d-none d-md-inline-flex">
                         <form class="header-search">
                             <i class="ti ti-search icon-search"></i>
                             <input type="search" class="form-control" placeholder="Search here..." />
                             <button class="btn btn-light-secondary btn-search"><i
                                     class="ti ti-adjustments-horizontal"></i></button>
                         </form>
                     </li> --}}
                 </ul>
             </div>

             <div class="ms-auto">
                 <ul class="list-unstyled">
                     {{-- <li class="dropdown pc-h-item">
                         <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0"
                             data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                             aria-expanded="false">
                             <i class="ti ti-bell"></i>
                         </a>
                         <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                             <div class="dropdown-header">
                                 <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all
                                     read</a>
                                 <h5>All Notification <span class="badge bg-warning rounded-pill ms-1">01</span></h5>
                             </div>
                             <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
                                 style="max-height: calc(100vh - 215px)">
                                 <div class="list-group list-group-flush w-100">
                                     <div class="list-group-item">
                                         <select class="form-select">
                                             <option value="all">All Notification</option>
                                             <option value="new">New</option>
                                             <option value="unread">Unread</option>
                                             <option value="other">Other</option>
                                         </select>
                                     </div>
                                     <a class="list-group-item list-group-item-action">
                                         <div class="d-flex">
                                             <div class="flex-shrink-0">
                                                 <img src="{{ asset('template') }}/dist/assets/images/user/avatar-2.jpg"
                     alt="user-image" class="user-avtar" />
             </div>
             <div class="flex-grow-1 ms-1">
                 <span class="float-end text-muted">2 min ago</span>
                 <h5>John Doe</h5>
                 <p class="text-body fs-6">It is a long established fact that a reader
                     will be distracted </p>
                 <div class="badge rounded-pill bg-light-danger">Unread</div>
                 <div class="badge rounded-pill bg-light-warning">New</div>
             </div>
         </div>
         </a>
         <a class="list-group-item list-group-item-action">
             <div class="d-flex">
                 <div class="flex-shrink-0">
                     <div class="user-avtar bg-light-success"><i class="ti ti-building-store"></i></div>
                 </div>
                 <div class="flex-grow-1 ms-1">
                     <span class="float-end text-muted">3 min ago</span>
                     <h5>Store Verification Done</h5>
                     <p class="text-body fs-6">We have successfully received your request.
                     </p>
                     <div class="badge rounded-pill bg-light-danger">Unread</div>
                 </div>
             </div>
         </a>
         <a class="list-group-item list-group-item-action">
             <div class="d-flex">
                 <div class="flex-shrink-0">
                     <div class="user-avtar bg-light-primary"><i class="ti ti-mailbox"></i>
                     </div>
                 </div>
                 <div class="flex-grow-1 ms-1">
                     <span class="float-end text-muted">5 min ago</span>
                     <h5>Check Your Mail.</h5>
                     <p class="text-body fs-6">All done! Now check your inbox as you're in
                         for a sweet treat! </p>
                     <button class="btn btn-sm btn-primary">Mail <i class="ti ti-brand-telegram"></i></button>
                 </div>
             </div>
         </a>
         <a class="list-group-item list-group-item-action">
             <div class="d-flex">
                 <div class="flex-shrink-0">
                     <img src="{{ asset('template') }}/dist/assets/images/user/avatar-1.jpg" alt="user-image"
                         class="user-avtar" />
                 </div>
                 <div class="flex-grow-1 ms-1">
                     <span class="float-end text-muted">8 min ago</span>
                     <h5>John Doe</h5>
                     <p class="text-body fs-6">Uploaded two file on &nbsp;<strong>21 Jan
                             2020</strong></p>
                     <div class="notification-file d-flex p-3 bg-light-secondary rounded">
                         <i class="ti ti-arrow-bar-to-down"></i>
                         <h5 class="m-0">demo.jpg</h5>
                     </div>
                 </div>
             </div>
         </a>
         <a class="list-group-item list-group-item-action">
             <div class="d-flex">
                 <div class="flex-shrink-0">
                     <img src="{{ asset('template') }}/dist/assets/images/user/avatar-3.jpg" alt="user-image"
                         class="user-avtar" />
                 </div>
                 <div class="flex-grow-1 ms-1">
                     <span class="float-end text-muted">10 min ago</span>
                     <h5>Joseph William</h5>
                     <p class="text-body fs-6">It is a long established fact that a reader
                         will be distracted </p>
                     <div class="badge rounded-pill bg-light-success">Confirmation of
                         Account</div>
                 </div>
             </div>
         </a>
         </div>
         </div>
         <div class="dropdown-divider"></div>
         <div class="text-center py-2">
             <a href="#!" class="link-primary">Mark as all read</a>
         </div>
         </div>
         </li> --}}
         <li class="dropdown pc-h-item header-user-profile">
             <a class="dropdown-toggle arrow-none me-2" data-bs-toggle="dropdown" href="#" role="button"
                 aria-haspopup="false" aria-expanded="false">
                 <i class="fa-solid fa-user fa-2x" style="color:#0B4AAC;"></i>
                 {{-- <span>
                                 <i class="ti ti-settings"></i>
                             </span> --}}
             </a>
             <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                 <div class="dropdown-header">
                     {{-- <h4>Good Morning, <span class="small text-muted"> John Doe</span></h4>
                                 <p class="text-muted">Project Admin</p>
                                 <form class="header-search">
                                     <i class="ti ti-search icon-search"></i>
                                     <input type="search" class="form-control" placeholder="Search profile options" />
                                 </form> --}}
                     {{-- <hr /> --}}
                     <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 280px)">
                         <div class="text-center">
                             <h4>{{ Auth::user()->nama }}</h4>
                             <p class="lh-1 mb-0 small text-success">Administrator</p>
                         </div>
                         {{-- <hr />
                                     <div class="settings-block bg-light-primary rounded">
                                         <div class="form-check form-switch">
                                             <input class="form-check-input" type="checkbox" role="switch"
                                                 id="flexSwitchCheckDefault" />
                                             <label class="form-check-label" for="flexSwitchCheckDefault">Start DND
                                                 Mode</label>
                                         </div>
                                         <div class="form-check form-switch">
                                             <input class="form-check-input" type="checkbox" role="switch"
                                                 id="flexSwitchCheckChecked" checked />
                                             <label class="form-check-label" for="flexSwitchCheckChecked">Allow
                                                 Notifications</label>
                                         </div>
                                     </div> --}}
                         <hr />
                         <a href="/akun-edit/{{ Auth::user()->id }}" class="dropdown-item">
                             <i class="ti ti-settings"></i>
                             <span>Edit</span>
                         </a>
                         <a href="#" class="dropdown-item" onclick="logout()">
                             <i class="ti ti-logout"></i>
                             <span>Logout</span>
                         </a>
                     </div>
                 </div>
             </div>
         </li>
         </ul>
         </div>
         </div>
     </header>

     <!-- [ Header ] end -->