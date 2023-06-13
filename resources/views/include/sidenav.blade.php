<nav class="navbar navbar-vertical navbar-expand-lg navbar-darker" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
               
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Dashboard</p>
                    @if (getuserdetail('role') != 'distributor')
                        <a class="nav-link dropdown-indicator label-1" href="{{ url('distributor/') }}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text">Distributor</span>
                            </div>
                        </a>
                    @endif
                    <a class="nav-link dropdown-indicator label-1" href="{{ url('vendor/') }}" role="button">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-text">Vendor</span>
                        </div>
                    </a>            
                </li>

            </ul>
        </div>
    </div>
    {{-- <div class="navbar-vertical-footer"><button  class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span  class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div> --}}
</nav>
<nav class="navbar navbar-top navbar-expand navbar-darker" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="{{ url('/dashboard') }}">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="../../assets/img/icons/axepert_white.png"
                            alt="phoenix" width="50" />
                        <p class="logo-text ms-2 d-none d-sm-block">Axepert Exhibits</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                    class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search"
                    placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                    aria-label="Close"></button></div>
            <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar list pb-3" style="max-height: 30rem;">
                    <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Recently Searched </h6><a
                        class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                                    data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                                    data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Products</h6><a
                        class="dropdown-item py-2 d-flex align-items-center"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                                src="../../assets/img/products/3.png" alt="" /></div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                            <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory -
                                    1.6GHz - 128GB Storage</span></p>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center"
                        href="../../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/products/3.png"
                                alt="" /></div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                            <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at
                                    12:30 PM</span></p>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Quick Links</h6><a
                        class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                                    data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                                    data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Files</h6><a
                        class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                                    data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                                    data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                                    data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Members</h6><a
                        class="dropdown-item py-2 d-flex align-items-center" href="../../pages/pages/members.html">
                        <div class="avatar avatar-l status-online  me-2 text-900">
                            <img class="rounded-circle " src="../../assets/img/team/10.png" alt="" />
                        </div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                            <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/pages/members.html">
                        <div class="avatar avatar-l  me-2 text-900">
                            <img class="rounded-circle " src="../../assets/img/team/12.png" alt="" />
                        </div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">John Smith</h6>
                            <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Related Searches</h6><a
                        class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                                    data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
                                    data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                </div>
            </div>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">

            
           
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle " src="../../assets/img/team/57.png" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                  
                                    <img  class="rounded-circle " src="" alt="" />
                                </div>
                                <h6 class="mt-2 text-black">{{ getuserdetail('name') }}</h6>
                                <p class="mt-2 text-black">{{ getuserdetail('role') }}</p>
                            </div>
                            {{-- <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div> --}}
                        </div>
                        <div class="overflow-auto scrollbar p-0 border-top" style="height: 5rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3"
                                        href="{{ url('setting/resetpassword') }}"> <span
                                            class="me-2 text-900 "><span><img
                                                    src="https://img.icons8.com/dotty/80/null/re-enter-pincode.png"
                                                    width="20" /></span></span>Change Password</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="{{ url('setting/') }}"> <span
                                            class="me-2 text-900 "><span><img
                                                    src="https://img.icons8.com/carbon-copy/100/null/automatic.png"
                                                    width="20" /></span></span>Settings &amp; Privacy </a></li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top ">
                            <div class="px-3 mt-4"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="{{ url('logout') }}"> <span class="me-2"> </span>Sign out</a></div>
                            <div class="my-2 text-center fw-bold fs--2 text-600">
                                <a class="text-600 me-1" href="#!">Privacy policy</a>&bull;
                                <a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                    href="#!">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
    
</nav>
<nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
    
</nav>
<nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew"
    style="display:none;">
   

</nav>
<script>
    var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
    var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTopNew = document.querySelector('#navbarTopNew');
    var navbarSlim = document.querySelector('#navbarSlim');
    var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault.remove();
        navbarTopNew.remove();
        navbarTopSlimNew.remove();
        navbarSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarVertical.remove();
        navbarTopNew.remove();
        navbarSlim.remove();
        navbarTopSlimNew.removeAttribute('style');
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarSlim.remove();
        navbarVertical.remove();
        navbarTopSlimNew.remove();
        navbarTopNew.removeAttribute('style');
        documentElement.classList.add('navbar-horizontal')

    } else {
        body.classList.remove('nav-slim');
        navbarSlim.remove();
        navbarTopNew.remove();
        navbarTopSlimNew.remove();
        navbarDefault.removeAttribute('style');
        navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
        navbarTop.classList.add('navbar-darker');
    }

    var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
        navbarVertical.classList.add('navbar-darker');
    }
</script>
