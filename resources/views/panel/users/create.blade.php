<x-panel-layout>
    <x-slot name="title">
        | کاربر جدید
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}" title="پیشخوان">پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="">کاربران</a></li>
            <li><a href="{{ route('users.create') }}" class="is-active">ایجاد کاربر جدید</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="row no-gutters  bg-white">
            <div class="col-12">
                <p class="box__title">ویرایش کاربر</p>
                <form action="" class="padding-30" method="post">
                    <input type="text" class="text" placeholder="نام و نام خانوادگی">
                    <input type="text" class="text" placeholder="ایمیل">
                    <input type="text" class="text" placeholder="شماره موبایل">
                    <input type="text" class="text" placeholder="آی پی" value="102.111.11" disabled>
                    <select name="" id="">
                        <option value="0">کاربر عادی</option>
                        <option value="2">نویسنده</option>
                        <option value="3">مدیر</option>
                    </select>
                    <button class="btn btn-webamooz_net">ایجاد کاربر</button>
                </form>

            </div>
        </div>
    </div>
</x-panel-layout>