<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">


        <div class="nav-bar">
            <div class="horz-center nav-container">
                <div class="floated logo">WebFrankly</div>
                <ul class="floated nav-div nav-links">
                    <li class="rela-inline">De-Blog</li>
                    <li class="rela-inline">Github</li>
                    <li class="rela-inline">Codepen</li>
                </ul>
                <div class="floated right nav-div search-container">
                    <div class="rela-inline icon search-icon"></div><input type="text" placeholder="Search" class="rela-inline nav-search" />
                </div>

            </div>
        </div>

        <div class="rela-block container">
            <div class="rela-block profile-card">
                <div class="profile-pic" id="profile_pic"></div>
                <div class="rela-block profile-name-container">
                    <div class="rela-block user-name" id="user_name">Frank Mckechnie</div>
                    <div class="rela-block user-desc" id="user_description">Hi my name is frank and I am a developer.
                        What kind of developer? Still figuring that one out, should check my stuff to see what I have
                        done and maybe you can tell me! I like code and design, recently I also like servers!</div>
                </div>
                <div class="rela-block profile-card-stats">
                    <div class="floated profile-stat works" id="num_works">28<br></div>
                    <div class="floated profile-stat followers" id="num_followers">112<br></div>
                    <div class="floated profile-stat following" id="num_following">245<br></div>
                </div>
            </div>
            <div class="rela-block content">
                <div class="rela-inline image"></div>
                <div class="rela-inline image"></div>
                <div class="rela-inline image"></div>
                <div class="rela-inline image"></div>
                <div class="rela-inline image"></div>
            </div>
            <div class="rela-inline button more-images" onclick="add_images(); inf_scroll = true;">More Images</div>
        </div>



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>