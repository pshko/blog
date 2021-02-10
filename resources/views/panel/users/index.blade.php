<x-panel-layout>
    <x-slot name="title">
        | مدیریت کاربران 

    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}" >پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="is-active">کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('users.index') }}">همه کاربران</a>
                <a class="tab__item" href="{{ route('users.create') }}">ایجاد کاربر جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی کاربر">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="ایمیل">
                            <input type="text"  class="text" placeholder="شماره">
                            <input type="text"  class="text" placeholder="آی پی">
                            <input type="text"  class="text margin-bottom-20" placeholder="نام و نام خانوادگی">
                            <btutton class="btn btn-webamooz_net">جستجو</btutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>سطح کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>وضعیت حساب</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="">
                    <td><a href="">1</a></td>
                    <td><a href="">محمد نیکو</a></td>
                    <td>programming@gmail.com</td>
                    <td>کاربر عادی</td>
                    <td>1399/11/11</td>
                    <td class="text-success">تاییده شده</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="" class="item-confirm mlg-15" title="تایید"></a>
                        <a href="" class="item-reject mlg-15" title="رد"></a>
                        <a href="{{ route('users.edit', 1) }}" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-panel-layout>