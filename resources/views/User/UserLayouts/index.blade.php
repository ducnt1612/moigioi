<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('css/user/user.css')}}" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template-->
    <link href="{{URL::asset('css/admin/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">

</div>
<div id="navbar">
    <div class="div-main-content">
        <a href="#default" id="logo">
            Đức béo
            {{--        <img src="{{URL::asset('images/iron.png')}}" style="width:64px;">--}}
        </a>
        <div id="navbar-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#contact">Blog</a>
            <a href="#about">About</a>
            <a href="#about">Login</a>
        </div>
    </div>
</div>
<div class="search-on-top">

    <div class="div-main-content" style="padding-top: 200px;padding-left: 12px;">
        <h3>
            {{__('Đức siêu béo')}}
        </h3>
        <div class="row" style="margin-top: 30px">
            <div class="col-lg-6" c>
                <input type="text" class="form-control" placeholder="Họ và tên" style="padding: 25px 12px">
            </div>
            <div class="col-lg-2" style="padding-left: 0">
                <input type="text" class="form-control" placeholder="Đức béo" style="padding: 25px 12px">
                <div class="dropdown-menu" style="display: block">
                    <a class="dropdown-item" href="#">Hà Nội</a>
                    <a class="dropdown-item" href="#">Đà Nẵng</a>
                    <a class="dropdown-item" href="#">TP Hồ Chí Minh</a>
                </div>
            </div>
            <div class="col-lg-1 font-weight-bold" style="padding-left: 0">
                <button class="btn btn-danger form-control font-weight-bold" style="padding: 25px 12px;line-height: 0px">{{__('Search')}}</button>
            </div>
        </div>
    </div>


</div>
<div class="div-main-content" style="background: #221f20">
    <div style="margin-top:210px;padding:15px 15px 2500px;font-size:30px">
        <p><b>This example demonstrates how to shrink a navigation bar when the user starts to scroll the page.</b></p>
        <p>Scroll down this frame to see the effect!</p>
        <p>Scroll to the top to remove the effect.</p>
        <p><b>Note:</b> We have also made the navbar responsive, resize the browser window to see the effect.</p>
        <p>Lorem ipsum dolor dummy text to enable scrolling, sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>



<script src="{{URL::asset('js/user/user.js')}}"></script>

</body>
</html>