<x-panel-layout>
    <x-slot name="title">
        | نظرات
    </x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('comments.index') }}" class="is-active"> نظرات</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item" href="{{ route('comments.index') }}"> همه نظرات</a>
                <a class="tab__item" href="{{ route('comments.index', ['approved' => 0]) }}">نظرات تاییده نشده</a>
                <a class="tab__item" href="{{ route('comments.index', ['approved' => 1]) }}">نظرات تاییده شده</a>
            </div>
        </div>
        <div class="bg-white padding-20">
            <div class="t-header-search">
                <form action="">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی در نظرات">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="قسمتی از متن">
                            <input type="text"  class="text"  placeholder="ایمیل">
                            <input type="text"  class="text margin-bottom-20"  placeholder="نام و نام خانوادگی">
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
                    <th>ارسال کننده</th>
                    <th>برای</th>
                    <th>دیدگاه</th>
                    <th>تاریخ</th>
                    <th>تعداد پاسخ ها</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                <tr role="row" >
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user->name }}</td>
                    <td>{{ $comment->post->title }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->getCreateAtInJalali() }}</td>
                    <td>{{ $comment->replies_count }}</td>
                    <td class="{{ $comment->is_approved ? 'text-success' : 'text-error' }}">{{ $comment->getStatusInPersian() }}</td>
                    <td>
                        <a href="{{ route('comments.destroy', $comment->id) }}" onclick="destroyComment(event, {{ $comment->id }})" class="item-delete mlg-15" title="حذف"></a>
                        @if($comment->is_approved)
                        <a href="{{ route('comments.update', $comment->id) }}" onclick="updateComment(event, {{ $comment->id }})" class="item-reject mlg-15" title="رد"></a>
                        @else
                        <a href="{{ route('comments.update', $comment->id) }}" onclick="updateComment(event, {{ $comment->id }})" class="item-confirm mlg-15" title="تایید"></a>
                        @endif
                        <a href="show-comment.html" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <form action="{{ route('comments.update', $comment->id) }}" method="post" id="update-comment-{{ $comment->id }}">
                            @csrf
                            @method('put')
                        </form>
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="post" id="destroy-comment-{{ $comment->id }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $comments->appends(request()->query())->links() }}
        </div>
    </div>
    <x-slot name="script">
        <script>
            function destroyComment(event, id) {
                event.preventDefault();
                document.getElementById('destroy-comment-' + id).submit();
            }
            function updateComment(event, id) {
                event.preventDefault();
                document.getElementById('update-comment-' + id).submit();
            }
        </script>
    </x-slot>
</x-panel-layout>
