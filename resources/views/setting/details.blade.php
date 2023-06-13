@include('include/header')
<style>
    .error {
        color: red;
        font-size: 10px;
    }
</style>
<style type="text/css">
    .toast-title {
        font-weight: 700;
    }

    .toast-message {
        -ms-word-wrap: break-word;
        word-wrap: break-word;
    }

    .toast-message a,
    .toast-message label {
        color: #fff;
    }

    .toast-message a:hover {
        color: #ccc;
        text-decoration: none;
    }

    .toast-close-button {
        position: relative;
        right: -0.3em;
        top: -0.3em;
        float: right;
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        -webkit-text-shadow: 0 1px 0 #fff;
        text-shadow: 0 1px 0 #fff;
        opacity: 0.8;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
        filter: alpha(opacity=80);
        line-height: 1;
    }

    .toast-close-button:focus,
    .toast-close-button:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: 0.4;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
        filter: alpha(opacity=40);
    }

    .rtl .toast-close-button {
        left: -0.3em;
        float: left;
        right: 0.3em;
    }

    button.toast-close-button {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none;
    }

    .toast-top-center {
        top: 0;
        right: 0;
        width: 100%;
    }

    .toast-bottom-center {
        bottom: 0;
        right: 0;
        width: 100%;
    }

    .toast-top-full-width {
        top: 0;
        right: 0;
        width: 100%;
    }

    .toast-bottom-full-width {
        bottom: 0;
        right: 0;
        width: 100%;
    }

    .toast-top-left {
        top: 12px;
        left: 12px;
    }

    .toast-top-right {
        top: 12px;
        right: 12px;
    }

    .toast-bottom-right {
        right: 12px;
        bottom: 12px;
    }

    .toast-bottom-left {
        bottom: 12px;
        left: 12px;
    }

    #toast-container {
        position: fixed;
        z-index: 999999;
        pointer-events: none;
    }

    #toast-container * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    #toast-container>div {
        position: relative;
        pointer-events: auto;
        overflow: hidden;
        margin: 0 0 6px;
        padding: 15px 15px 15px 50px;
        width: 300px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        background-position: 15px center;
        background-repeat: no-repeat;
        -moz-box-shadow: 0 0 12px #999;
        -webkit-box-shadow: 0 0 12px #999;
        box-shadow: 0 0 12px #999;
        color: #fff;
        opacity: 0.8;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
        filter: alpha(opacity=80);
    }

    #toast-container>div.rtl {
        direction: rtl;
        padding: 15px 50px 15px 15px;
        background-position: right 15px center;
    }

    #toast-container>div:hover {
        -moz-box-shadow: 0 0 12px #000;
        -webkit-box-shadow: 0 0 12px #000;
        box-shadow: 0 0 12px #000;
        opacity: 1;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
        filter: alpha(opacity=100);
        cursor: pointer;
    }

    #toast-container>.toast-info {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important;
    }

    #toast-container>.toast-error {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important;
    }

    #toast-container>.toast-success {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important;
    }

    #toast-container>.toast-warning {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important;
    }

    #toast-container.toast-bottom-center>div,
    #toast-container.toast-top-center>div {
        width: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    #toast-container.toast-bottom-full-width>div,
    #toast-container.toast-top-full-width>div {
        width: 96%;
        margin-left: auto;
        margin-right: auto;
    }

    .toast {
        background-color: #030303;
    }

    .toast-success {
        background-color: #51a351;
    }

    .toast-error {
        background-color: #bd362f;
    }

    .toast-info {
        background-color: #2f96b4;
    }

    .toast-warning {
        background-color: #f89406;
    }

    .toast-progress {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 4px;
        background-color: #000;
        opacity: 0.4;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
        filter: alpha(opacity=40);
    }

    @media all and (max-width: 240px) {
        #toast-container>div {
            padding: 8px 8px 8px 50px;
            width: 11em;
        }

        #toast-container>div.rtl {
            padding: 8px 50px 8px 8px;
        }

        #toast-container .toast-close-button {
            right: -0.2em;
            top: -0.2em;
        }

        #toast-container .rtl .toast-close-button {
            left: -0.2em;
            right: 0.2em;
        }
    }

    @media all and (min-width: 241px) and (max-width: 480px) {
        #toast-container>div {
            padding: 8px 8px 8px 50px;
            width: 18em;
        }

        #toast-container>div.rtl {
            padding: 8px 50px 8px 8px;
        }

        #toast-container .toast-close-button {
            right: -0.2em;
            top: -0.2em;
        }

        #toast-container .rtl .toast-close-button {
            left: -0.2em;
            right: 0.2em;
        }
    }

    @media all and (min-width: 481px) and (max-width: 768px) {
        #toast-container>div {
            padding: 15px 15px 15px 50px;
            width: 25em;
        }

        #toast-container>div.rtl {
            padding: 15px 50px 15px 15px;
        }
    }

    .card-img-top {
        width: 60%;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card {
        padding: 1.5em 0.5em 0.5em;
        text-align: center;
        border-radius: 2em;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-weight: bold;
        font-size: 1.5em;
    }

    .btn-primary {
        border-radius: 2em;
        padding: 0.5em 1.5em;
    }
</style>
<style>
    .avatar-upload {

        position: relative;
        max-width: 205px;
        margin: 50px auto;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #ffffff;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
        content: "\f81d";
        font-family: "FontAwesome";
        color: #757575;
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }

    .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #f8f8f8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    #seticons {
        margin-top: -120px;
    }
</style>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @include('include/sidenav')
            <div class="content">
                <div class="mb-9">
                    <form id="generalupdate" method="post">
                        @csrf()
                        <div class="row g-6">
                            <div class="col-12 col-xl-4">
                                <div class="card cover-image mb-5">
                                    <div class="card-header hover-actions-trigger position-relative mb-6"
                                        style="min-height: 130px; ">
                                        <div class="bg-holder"
                                            style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(../../assets/img/generic/59.png)">
                                        </div>

                                    </div>
                                    <div class="avatar-upload" id="seticons">

                                        <div class="avatar-preview">
                                            @if(!empty($details->image))
                                            <div id="imagePreview" style="background-image: url({{asset($details->image)}});">
                                            </div>
                                            @endif

                                        </div>
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                    </div>
                                    <div class="card-body"style="margin-top: -60px;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex flex-wrap mb-2 align-items-center">
                                                    <h3 class="me-2">{{$details->name}}</h3><span class="fw-normal fs-0"></span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex"><span class="fa-solid fa-user-group fs--2 me-2 me-lg-1 me-xl-2"></span>
                                                    <h6 class="d-inline-block mb-0">1297<span class="fw-semi-bold ms-1 me-4">Followers</span></h6>
                                                    </div>
                                                    <div class="d-flex"><span class="fa-solid fa-user-check fs--2 me-2 me-lg-1 me-xl-2"></span>
                                                    <h6 class="d-block d-xl-inline-block mb-0">3971<span class="fw-semi-bold ms-1">Following</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card cover-image mb-5">
                                    <div class="card-header hover-actions-trigger position-relative mb-6"
                                        style="min-height: 130px; ">
                                        <div class="bg-holder"
                                            style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(../../assets/img/generic/59.png)">
                                        </div>

                                    </div>
                                    <div class="avatar-upload" id="seticons">

                                        <div class="avatar-preview">
                                            @if(!empty($details->image))
                                            <div class="imagePreview" style="background-image: url({{asset($details->favicon)}});"> </div>
                                           @endif   
                                        </div>
                                        <div class="avatar-edit">
                                            <input type='file' id="imagefavicon" name="imagefavicon" accept=".png, .jpg, .jpeg" />
                                            <label for="imagefavicon"></label>
                                        </div>
                                    </div>
                                    <div class="card-body" style="margin-top: -60px;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex flex-wrap mb-2 align-items-center">
                                                    <h5 class="fw-normal fs-0 text-center">Favicon</h6>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                            <div class="col-12 col-xl-8">
                                <div class="border-bottom border-300 mb-4">
                                    <div class="mb-6">
                                        <h4 class="mb-4">Personal Information</h4>
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input class="form-control form-icon-input" id="firstName" name="firstName" type="text" placeholder="First Name" value="{{$details->name}}"/><label class="text-700 form-icon-label" for="firstName"> NAME</label></div><span
                                                        class="fa-solid fa-user text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="email"
                                                            type="email" name="email" placeholder="Email" value="{{$details->email}}"/><label
                                                            class="text-700 form-icon-label" for="email">ENTER YOUR
                                                            EMAIL</label></div><span
                                                        class="fa-solid fa-envelope text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="phone"
                                                            type="tel" name="phone" placeholder="Phone" value="{{$details->mobile}}"/><label
                                                            class="text-700 form-icon-label" for="phone">ENTER YOUR
                                                            PHONE</label></div><span
                                                        class="fa-solid fa-phone text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating">
                                                        <textarea class="form-control form-icon-input" id="info" name="info"  placeholder="Info">{{$details->info}}</textarea><label
                                                            class="text-700 form-icon-label" for="info">Info</label>
                                                    </div><span
                                                        class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <h4 class="mb-4">Info</h4>
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input class="form-control form-icon-input" id="c_name" name="c_name" type="text"placeholder="Facebook" value="{{$details->c_name}}"/><label
                                                            class="text-700 form-icon-label" for="facebook">Company Name</label></div><span class="fas fa-info-circle text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="address"
                                                            type="text" name="address"
                                                            placeholder="Twitter" value="{{$details->c_address}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="twitter">Company Address</label></div><span
                                                        class="fas fa-address-book text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="city"
                                                            type="text" name="city"
                                                            placeholder="Linkedin" value="{{$details->city}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="linkedin">City</label></div><span
                                                        class="fas fa-city text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="state"
                                                            type="text" name="state"
                                                            placeholder="youtube" value="{{$details->state}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="youtube">state</label></div><span
                                                        class="fas fa-life-ring text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="country" name="country"
                                                            type="text" placeholder="artstation" value="{{$details->country}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="artstation">country</label></div><span
                                                        class="fas fa-flag text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="website" name="website"
                                                            type="text" placeholder="behance" value="{{$details->website}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="behance">Website</label></div><span
                                                        class="fas fa-globe text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-6">
                                        <h4 class="mb-4">Social</h4>
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="facebook"
                                                            name="facebook" type="text"
                                                            placeholder="Facebook" value="{{$details->name}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="facebook">Facebook</label></div><span
                                                        class="fa-brands fa-facebook text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="twitter"
                                                            type="text" name="twitter"
                                                            placeholder="Twitter" value="{{$details->twitter}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="twitter">Twitter</label></div><span
                                                        class="fa-brands fa-twitter text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="linkedin"
                                                            type="text" name="linkedin"
                                                            placeholder="Linkedin" value="{{$details->linkedin}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="linkedin">linkedin</label></div><span
                                                        class="fa-brands fa-linkedin-in text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="youtube"
                                                            type="text" name="youtube"
                                                            placeholder="youtube" value="{{$details->youtube}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="youtube">youtube</label></div><span
                                                        class="fa-brands fa-youtube text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input
                                                            class="form-control form-icon-input" id="instagram"
                                                            type="text" placeholder="artstation" name="instagram" value="{{$details->instagram}}"/><label
                                                            class="text-700 form-icon-label"
                                                            for="artstation">instagram</label></div><span
                                                        class="fab fa-instagram-square text-900 fs--1 form-icon"></span>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" id="id" name="id" value="{{ getuserdetail('id') }}">
                                        </div>
                                    </div>
                                    <div class="text-end mb-6">
                                        <div>
                                           
                                            <button class="btn btn-phoenix-primary" type="submit" name="submit" id="submit">Save Information</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
    </main>



    @include('include/footer')
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
</script>
<script>
    $(document).on('submit', '#generalupdate', function(ev) {
        $('.error').html('');
       
        ev.preventDefault(); // Prevent browers default submit.
        var formData = new FormData(this);
        var error = false;
        if (error == false) {
            $.ajax({
                url: base_url + 'setting/update',
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(".submitbtn").css('display', 'none');
                },
                success: function(result) {
                    if (result.code == 200) {
                        showsuccess(result.message);
                        $("#generalupdate")[0].reset();

                    } else if (result.code == 201) {
                        swal(result.message, {
                            icon: "error",
                        });
                    } else if (result.code == 401) {
                        $.each(result.message, function(key, value) {
                            $("#" + key + "_error").html(value);
                        });
                    }
                }

            })
        }
    })
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('.imagePreview').hide();
                $('.imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagefavicon").change(function() {
        readURL(this);
    });
</script>
