<x-panel-layout>
    <x-slot name="title">
        | ویرایش مقاله
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('posts.index') }}"> مقالات</a></li>
            <li><a href="{{ route('posts.edit') }}"  class="is-active" >ویرایش مقاله </a></li>
        </ul>
    </div>
    <div class="main-content padding-0">
        <p class="box__title">ویرایش مقاله </p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="" class="padding-30">
                    <input type="text" class="text" placeholder="عنوان مقاله">
                    <input type="text" class="text text-left " placeholder="نام انگلیسی مقاله">

                    <ul class="tags">

                        <li class="addedTag">dsfsdf<span class="tagRemove" onclick="$(this).parent().remove();">x</span>
                            <input type="hidden" value="dsfsdf" name="tags[]"></li>
                        <li class="addedTag">dsfsdf<span class="tagRemove" onclick="$(this).parent().remove();">x</span>
                            <input type="hidden" value="dsfsdf" name="tags[]"></li>
                        <li class="tagAdd taglist">
                            <input type="text" id="search-field">
                        </li>
                    </ul>

                    <div class="file-upload">
                        <div class="i-file-upload">
                            <span>آپلود بنر دوره</span>
                            <input type="file" class="file-upload" id="files" name="files"/>
                        </div>
                        <span class="filesize"></span>
                        <span class="selectedFiles">فایلی انتخاب نشده است</span>
                    </div>
                    <textarea placeholder="متن مقاله" class="text "></textarea>
                    <button class="btn btn-webamooz_net">ویرایش مقاله</button>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script src="{{ asset('blog/panel/js/tagsInput.js') }}"></script>
    </x-slot>
</x-panel-layout>
