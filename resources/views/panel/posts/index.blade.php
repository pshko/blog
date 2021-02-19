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
                <form action="{{ route('posts.index') }}">
                    <div class="t-header-searchbox font-size-13">
                        <div type="text" class="text search-input__box font-size-13">جستجوی مقاله
                            <div class="t-header-search-content ">
                                <input type="text" class="text" name="search" placeholder="نام مقاله">
                                <button class="btn btn-webamooz_net">جستجو</button>
                            </div>
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
                        <a href="{{ route('posts.destroy', $post->id) }}" class="item-delete mlg-15" onclick="destroyPost(event, {{ $post->id }})" title="حذف"></a>
                        <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="item-edit" title="ویرایش"></a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post" id="destroy-post-{{ $post->id }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $posts->appends(request()->query())->links() }}
        </div>
    </div>
    <x-slot name="script">
        <script>
            function destroyPost(event, id) {
                event.preventDefault();
                document.getElementById('destroy-post-' + id).submit();
            }
        </script>
    </x-slot>
</x-panel-layout>
