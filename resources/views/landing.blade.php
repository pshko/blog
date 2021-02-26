<x-app-layout>
    <x-slot name="title">
        صفحه اصلی
    </x-slot>
    <main>
        <article class="container article">
            <div class="articles">
                @forelse($posts as $post)
                <div class="articles__item">
                    <a href="{{ route('post.show', $post->slug) }}" class="articles__link">
                        <div class="articles__img">
                            <img src="{{asset('/images/banners').'/'. $post->banner }}" class="articles__img-src">
                        </div>
                        <div class="articles__title">
                            <h2>{{ $post->title }} </h2>
                        </div>
                        <div class="articles__desc">
                            {!! Str::limit($post->content, 100) !!}
                        </div>
                        <div class="articles__details">
                            <div class="articles__author">نویسنده : {{$post->user->name}}</div>
                            <div class="articles__date">تاریخ : {{ $post->getCreateAtInJalali() }}</div>
                        </div>
                    </a>
                </div>
                @empty
                    <p>هیچ مقاله ای یافت نشد!</p>
                @endforelse
            </div>
        </article>
        {{ $posts->appends(request()->query())->links() }}
    </main>
</x-app-layout>
