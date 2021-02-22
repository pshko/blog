<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل وبلاگ {{ $title ?? '' }}</title>

    <link rel="stylesheet" href="{{ asset('blog/panel/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/panel/css/responsive_991.css') }}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{ asset('blog/panel/css/responsive_768.css') }}" media="(max-width:768px)">
    <link rel="stylesheet" href="{{ asset('blog/panel/css/font.css') }}">
    {{ $styles ?? '' }}
</head>
<body>
<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="{{ route('landing') }}"></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img"><img src="{{ asset('images/users').'/'.auth()->user()->profile }}" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر : {{ auth()->user()->name }}</span>
        <span class="profile__name">نقش : {{ auth()->user()->getRoleInPersian() }}</span>

    </div>

    @include('_partials.panel-sidebar')

</div>
<div class="content">
    <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
        <div class="header__right d-flex flex-grow-1 item-center">
            <span class="bars"></span>
            <a class="header__logo" href="{{ route('landing') }}"></a>
        </div>
        <div class="header__left d-flex flex-end item-center margin-top-2">
            <div class="notification margin-15">
                <a class="notification__icon"></a>
                <div class="dropdown__notification">
                    <div class="content__notification">
                        <span class="font-size-13">موردی برای نمایش وجود ندارد</span>
                    </div>
                </div>
            </div>
            <a href="{{ route('logout') }}" class="logout" title="خروج" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        </div>
    </div>
    {{ $slot }}
</div>
<script src="{{ asset('blog/panel/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('blog/panel/js/js.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(Session::has('status'))
    <script>
        Swal.fire({title: '{{ session('status') }}', confirmButtonText: 'تایید', icon: 'success'});
    </script>
@endif
{{ $script ?? '' }}
</body>
</html>
