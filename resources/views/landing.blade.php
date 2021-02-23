<x-app-layout>
    <x-slot name="title">
        صفحه اصلی
    </x-slot>
    <main>
        <article class="container article">
            <div class="articles">
                @foreach($posts as $post)
                <div class="articles__item">
                    <a href="{{ route('post.show', $post->slug) }}" class="articles__link">
                        <div class="articles__img">
                            <img src="{{asset('/images/banners').'/'. $post->banner }}" class="articles__img-src">
                        </div>
                        <div class="articles__title">
                            <h2>{{ $post->title }} </h2>
                        </div>
                        <div class="articles__desc">
                            {!! $post->content !!}
                        </div>
                        <div class="articles__details">
                            <div class="articles__author">نویسنده : {{$post->user->name}}</div>
                            <div class="articles__date">تاریخ : {{ $post->getCreateAtInJalali() }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </article>
        {{$posts->links()}}
    </main>
</x-app-layout>
