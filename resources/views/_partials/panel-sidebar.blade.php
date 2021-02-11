<ul>
    <li class="item-li i-dashboard @if(request()->is('dashboard')) is-active @endif"><a href="{{ route('dashboard') }}">پیشخوان</a></li>
    @if(auth()->user()->role === 'admin')
    <li class="item-li i-users @if(request()->is('panel/users') || request()->is('panel/users/*')) is-active @endif"><a href="{{ route('users.index') }}"> کاربران</a></li>
    @endif
    <li class="item-li i-categories"><a href="categories.html">دسته بندی ها</a></li>
    <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>
    <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
    <li class="item-li i-user__inforamtion"><a href="user-information.html">اطلاعات کاربری</a></li>
</ul>