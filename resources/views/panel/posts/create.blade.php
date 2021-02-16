<x-panel-layout>
    <x-slot name="title">
        | ایجاد مقاله
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('posts.index') }}"> مقالات</a></li>
            <li><a href="{{ route('posts.create') }}"  class="is-active" >ایجاد مقاله جدید</a></li>
        </ul>
    </div>
    <div class="main-content padding-0">
        <p class="box__title">ایجاد مقاله جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="padding-30">
                    @csrf
                    <input type="text" name="title" class="text" placeholder="عنوان مقاله">
                    @error('title')
                    <p class="error">{{ $message }}</p>
                    @enderror

                    <ul class="tags">
                        <li class="tagAdd taglist">
                            <input type="text" id="search-field">
                        </li>
                    </ul>
                    @error('categories')
                    <p class="error">{{ $message }}</p>
                    @enderror

                    <div class="file-upload">
                        <div class="i-file-upload">
                            <span>آپلود بنر دوره</span>
                            <input type="file" name="banner" class="file-upload" id="files" name="files" accept="image/*" />
                        </div>
                        <span class="filesize"></span>
                        <span class="selectedFiles">فایلی انتخاب نشده است</span>
                    </div>
                    @error('banner')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <textarea placeholder="متن مقاله" name="content" class="text"></textarea>
                    @error('content')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <button class="btn btn-webamooz_net" type="submit">ایجاد مقاله</button>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('blog/panel/js/tagsInput.js') }}"></script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content', {
                'language' : 'fa',
                filebrowserUploadUrl: '{{ route("editor-upload", ["_token" => csrf_token()]) }}',
                filebrowserUploadMethod: 'form',
            })
        </script>
    </x-slot>
</x-panel-layout>
