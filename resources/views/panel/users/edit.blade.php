<x-panel-layout>
    <x-slot name="title">
        | ویرایش کاربر
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}" title="پیشخوان">پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="">کاربران</a></li>
            <li><a href="{{ route('users.edit', 1) }}" class="is-active">ویرایش کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="row no-gutters bg-white margin-bottom-20">
            <div class="col-12">
                <p class="box__title">ایجاد کاربر</p>
                <form action="" class="padding-30" method="post">
                    <input type="text" class="text" placeholder="نام و نام خانوادگی">
                    <input type="text" class="text" placeholder="ایمیل">
                    <input type="text" class="text" placeholder="شماره موبایل">
                    <input type="text" class="text" placeholder="آی پی">
                    <select name="" id="">
                        <option value="0">سطح کاربری</option>
                        <option value="1">کاربر عادی</option>
                        <option value="2">مدرس</option>
                        <option value="3">نویسنده</option>
                        <option value="4">مدیر</option>
                    </select>
                    <button class="btn btn-webamooz_net">ویرایش کاربر</button>
                </form>

            </div>
        </div>
    </div>
</x-panel-layout>