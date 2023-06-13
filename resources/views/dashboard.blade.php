@include('include/header')

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @include('include/sidenav')
            <div class="content">
                <div class="pb-5">
                    <div class="row g-4">
                        <div class="col-12 col-xxl-6">
                            <div class="mb-8">
                                <h2 class="mb-2">Ecommerce Dashboard</h2>
                                <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now
                                </h5>
                            </div>
                            <div class="row align-items-center g-4">
                                @if (getuserdetail('role') != 'distributor')
                                <div class="col-12 col-md-auto">
                                    <div class="d-flex align-items-center"><img
                                            src="https://image.pngaaa.com/580/5171580-middle.png" alt=""
                                            height="60" width="100" />
                                        <div class="ms-3">
                                            <h4 class="mb-0">{{$distributor}} Distributor</h4>
                                            <p class="text-800 fs--1 mb-0">View Total Distributor</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="col-12 col-md-auto">
                                    <div class="d-flex align-items-center"><img
                                            src="https://www.pngfind.com/pngs/m/232-2322484_member-icon-hd-png-download.png" alt=""
                                            height="46" width="46" />
                                        <div class="ms-3">
                                            <h4 class="mb-0">{{$vendor}} New Vendor</h4>
                                            <p class="text-800 fs--1 mb-0">View Total Vendors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="bg-200 mb-6 mt-4" />
                            <div class="row flex-between-center mb-4 g-3">
                                <div class="col-auto">
                                    <h3>Total sells</h3>
                                    <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                                </div>
                                <div class="col-8 col-sm-4"><select class="form-select form-select-sm mt-2"
                                        id="select-gross-revenue-month">
                                        <option>Mar 1 - 31, 2022</option>
                                        <option>April 1 - 30, 2022</option>
                                        <option>May 1 - 31, 2022</option>
                                    </select></div>
                            </div>
                            <div class="echart-total-sales-chart" style="min-height:320px;width:100%"data-echart-responsive="data-echart-responsive"></div>
                        </div>
                        <div class="col-12 col-xxl-6">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Total orders<span
                                                            class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2"><span
                                                                class="badge-label">-6.8%</span></span></h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                                <h4>16,247</h4>
                                            </div>
                                            <div class="d-flex justify-content-center px-4 py-6">
                                                <div class="echart-total-orders" style="height:85px;width:115px">
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Completed</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">52%</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bullet-item bg-primary-100 me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Pending payment</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">48%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">New customers<span
                                                            class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2">
                                                            <span class="badge-label">+26.5%</span></span></h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                                <h4>356</h4>
                                            </div>
                                            <div class="pb-0 pt-4">
                                                <div class="echarts-new-customers" style="height:180px;width:100%;"
                                                    data-echart-responsive="true"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-2">Top coupons</h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                            </div>
                                            <div class="pb-4 pt-3">
                                                <div class="echart-top-coupons" style="height:115px;width:100%;">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Percentage discount
                                                    </h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">72%</h6>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary-200 me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed card discount
                                                    </h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">18%</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bullet-item bg-info me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed product
                                                        discount</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">10%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-2">Paying vs non paying</h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center pt-3">
                                                <div style="height:145px;width:140px"><canvas
                                                        id="payingCustomerChart"></canvas></div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Paying customer</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">30%</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bullet-item bg-primary-100 me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Non-paying customer
                                                    </h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">70%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    @include('include/footer')
</body>
