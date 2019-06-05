<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('css/user/user.css')}}" rel="stylesheet">
</head>
<body>

<div id="navbar">
    <a href="#default" id="logo">
        <img src="{{URL::asset('images/iron.png')}}" style="width:64px;">
    </a>
    <div id="navbar-right">
        <a class="active" href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
</div>

<div style="margin-top:210px;padding:15px 15px 2500px;font-size:30px">
    <p><b>This example demonstrates how to shrink a navigation bar when the user starts to scroll the page.</b></p>
    <p>Scroll down this frame to see the effect!</p>
    <p>Scroll to the top to remove the effect.</p>
    <p><b>Note:</b> We have also made the navbar responsive, resize the browser window to see the effect.</p>
    <p>Lorem ipsum dolor dummy text to enable scrolling, sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<script src="{{URL::asset('js/user/user.js')}}"></script>

</body>
</html>