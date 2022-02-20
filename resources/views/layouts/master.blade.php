<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Resume :: @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/live-resume.css">
</head>

<body>
<header>
    <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="assets/images/share.svg" alt="share" class="btn-img">
        SHARE</button>
    {{   menu('mainMenu', 'components.nav') }}
    <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
</header>
<div class="content-wrapper">
    <aside>
        <div class="profile-img-wrapper">
            <img src="assets/images/Profile.png" alt="profile">
        </div>
        <h1 class="profile-name">Daisy Murphy</h1>
        <div class="text-center">
            <span class="badge badge-white badge-pill profile-designation">UI / UX Designer</span>
        </div>
       {{menu('socialMedia','components.socialMedia')}}
        <div class="widget">
            <h5 class="widget-title">personal information</h5>
        {{menu('personalInformation','components.personalInformation')}}
        </div>
        <div class="widget card">
            <div class="card-body">
                {{menu('languages','components.languages')}}
            </div>
        </div>
        <div class="widget card">
            <div class="card-body">
                {{menu('interests','components.interests')}}
            </div>
        </div>
    </aside>
    <main>

    @yield('content')

        <footer>Live Resume @ <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer">BootstrapDash</a>. All Rights Reserved 2020</footer>
    </main>
</div>
<script src="assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/live-resume.js"></script>
</body>

</html>
