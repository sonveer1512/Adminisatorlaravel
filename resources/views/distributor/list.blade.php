@include('include/header')
<style>
    .error{
        color: red;
        font-size: 10px;
    }
</style>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @include('include/sidenav')
            <div class="content">
                <h2 class="text-bold text-1100 mb-5">Distributor</h2>
                <div id="members"
                    data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
                    <div class="row align-items-center justify-content-between g-3 mb-3">
                        <div class="col col-auto">
                            <div class="search-box">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input search" type="search" id="searchdistributor" name="searchdistributor"
                                        placeholder="Search Distributor" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex align-items-center"><button class="btn btn-link text-900 me-4 px-0"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#verticallyCentered"><span class="fas fa-plus me-2"></span>Add Distributor</button></div>
                        </div>
                    </div>
                    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
                        <div class="table-responsive scrollbar ms-n1 ps-1 "id="pay_list">  
                        </div>
                        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                            <div class="col-auto d-flex"><p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="uri_value" id="uri_value" value="{{Request::segment(1)}}">
        @include('deactivate')
        <div class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modalheader" style="background-color: #ebecec;">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Add Distributor</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span  class="fas fa-times fs--1"></span></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center" style="color:#818787;">Contact Details</h4>
                        <form class="row g-3" id="distributor" method="post">
                            @csrf()
                            <div class="col-md-6">
                                <div class="form-floating mb-2 mt-2">
                                    <input class="form-control" id="name" type="text" name="name"  placeholder="Enter Name" />
                                    <label for="name">Name </label>
                                    <span id="name_error" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating  mb-2 mt-2">
                                    <input class="form-control" id="mobile" type="text" name="mobile"  placeholder="Enter Mobile" />
                                    <label for="mobile">Mobile </label>
                                    <span id="mobile_error" class="error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="address" placeholder="Leave a comment here" style="height: 100px" name="address"></textarea>
                                    <label for="address">Address</label>
                                    <span id="address_error" class="error"></span>
                                </div>
                            </div>
                            <h4 class="text-center" style="color:#818787; margin-bottom: -8px;">Company Details</h4>
                            <div class="col-md-4">
                                <div class="form-floating  mb-2 mt-2">
                                    <input class="form-control"  type="file" name="logo" id="logo" placeholder="Enter Mobile" />
                                     <label for="logo">Logo </label>
                                     <span id="logo_error" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating  mb-2 mt-2">
                                    <input class="form-control"  type="text" name="companyname" id="companyname" placeholder="Enter Mobile" />
                                    <label for="companyname">Company Name </label>
                                    <span id="companyname_error" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating  mb-2 mt-2">
                                    <input class="form-control" id="cgst" type="text" name="cgst"   placeholder="Enter GST" />
                                    <label for="cgst">Company GST</label>
                                    <span id="cgst_error" class="error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="companyaddress" placeholder="Leave a comment here" style="height: 100px" name="companyaddress"></textarea>
                                    <label for="companyaddress">Company Address</label>
                                    <span id="companyaddress_error" class="error"></span>
                                </div>
                            </div>
                            <h4 class="text-center" style="color:#818787; margin-bottom: -8px;">Login Details</h4>
                            <div class="col-md-6">
                                <div class="form-floating  mb-2 mt-2">
                                    <input class="form-control" id="loginemail" type="email" name="loginemail"   placeholder="Enter GST" />
                                    <label for="loginemail">Email Address</label>
                                    <span id="loginemail_error" class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating  mb-2 mt-2">
                                    <input class="form-control" id="password" type="password" name="loginpassword"   placeholder="Enter GST" />
                                    <label for="loginemail">Password</label>
                                    <span id="password_error" class="error"></span>
                                </div>
                            </div>
                            <input class="form-control" id="distributor" type="hidden" name="distributor"  value="distributor"/>
                            <div class="modal-footer"style="background-color: #ebecec;">
                                <button class="btn btn-outline-primary me-1 mb-1" type="submit" name="submit" id="submit">Submit</button>
                                <button class="btn btn-outline-danger me-1 mb-1" type="button" data-bs-dismiss="modal">Close</button>  
                            </div>
                        </form>
                    </div>     
                </div>
            </div>
        </div>
         <div class="modal fade" id="open_distributor_edit" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modalheader" style="background-color: #ebecec;">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Edit Distributor</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span  class="fas fa-times fs--1"></span></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center" style="color:#818787;">Contact Details</h4>
                        <form class="row g-3" id="update_distributor" method="post">
                            @csrf()
                           <div id="distributoredit"></div>
                            <div class="modal-footer"style="background-color: #ebecec;">
                                <button class="btn btn-outline-primary me-1 mb-1" type="submit" name="submit" id="submit">Submit</button>
                                <button class="btn btn-outline-danger me-1 mb-1" type="button" data-bs-dismiss="modal">Close</button>    
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
        <div class="modal fade" id="chnagepass" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modalheader" style="background-color: #ebecec;">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Update Password</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span  class="fas fa-times fs--1"></span></button>
                    </div>
                    <div class="modal-body">   
                        <form class="row g-3" id="update_password" method="post">
                            @csrf()
                            <div id="passeditedit"></div>
                            <div class="modal-footer"style="background-color: #ebecec;">
                                <button class="btn btn-outline-primary me-1 mb-1" type="submit" name="submit" id="submit">Submit</button>
                                <button class="btn btn-outline-danger me-1 mb-1" type="button" data-bs-dismiss="modal">Close</button>    
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </main>
    @include('include/footer')
    <script src="{{asset('assets/admin/js/distributor.js')}}"></script>
</body>
<script>
    $(document).ready(function() {
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': false,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }
    });
    var uri_value = $('#uri_value').val();
    getpaylist(uri_value);
    </script>
<script>
    $("#searchdistributor").keyup(function () {
    var value = this.value.toLowerCase().trim();
    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
</script>
