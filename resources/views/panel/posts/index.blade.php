<x-panel-layout>
    <x-slot name="title">
        | مقالات
    </x-slot>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>

    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('posts.index') }}" class="is-active"> مقالات</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('posts.index') }}">لیست مقالات</a>
                <a class="tab__item " href="{{ route('posts.create') }}">ایجاد مقاله جدید</a>
            </div>
        </div>
        <div class="bg-white padding-20">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی مقاله">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="نام مقاله">
                            <input type="text"  class="text margin-bottom-20" placeholder="نام نویسنده">
                            <btutton class="btn btn-webamooz_net">جستجو</btutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg--white table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>عنوان</th>
                    <th>نویسنده</th>
                    <th>تاریخ ایجاد</th>
                    <th>تعداد بازدید ها</th>
                    <th>تعداد نظرات</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr role="row" class="">
                    <td><a href="">{{ $post->id }}</a></td>
                    <td><a href="">{{ $post->title }}</a></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->getCreateAtInJalali() }}</td>
                    <td>101</td>
                    <td>10</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="item-edit" title="ویرایش"></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</x-panel-layout>
