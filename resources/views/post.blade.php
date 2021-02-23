<x-app-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
<main>
    <div class="container article">
        <article class="single-page">
            <div class="breadcrumb">
                <ul class="breadcrumb__ul">
                    <li class="breadcrumb__item"><a href="{{ route('landing') }}" class="breadcrumb__link" >بخش مقالات</a></li>
                    <li class="breadcrumb__item"><a href="{{ route('post.show', $post->slug) }}" class="breadcrumb__link">
                        {{ $post->title }}</a></li>
                </ul>
            </div>
            <div class="single-page__title">
                <h1 class="single-page__h1">{{ $post->title }}</h1>
                <span class="single-page__like"></span>
            </div>
            <div class="single-page__details">
                <div class="single-page__author">نویسنده : {{ $post->user->name }}</div>
                <div class="single-page__date">تاریخ : {{ $post->getCreateAtInJalali() }}</div>
            </div>
            <div class="single-page__img">
                <img class="single-page__img-src" src="{{asset('/images/banners').'/'. $post->banner }}" alt="">
            </div>
            <div class="single-page__content">
                {!! $post->content !!}
            </div>
            <div class="single-page__tags">
                <ul class="single-page__tags-ul">
                    @foreach($post->categories as $category)
                    <li class="single-page__tags-li"><a href="" class="single-page__tags-link">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>

        </article>
    </div>
    <div class="container">
        <div class="comments" id="comments">
            <div class="comments__send">
                <div class="comments__title">
                    <h3 class="comments__h3"> دیدگاه خود را بنویسید </h3>
                    <span class="comments__count">  نظرات ( 160 ) </span>
                </div>
                <textarea class="comments__textarea" placeholder="بنویسید"></textarea>
                <button class="btn btn--blue btn--shadow-blue">ارسال نظر</button>
                <button class="btn btn--red btn--shadow-red">انصراف</button>
            </div>
            <div class="comments__list">
                <div id="comment-1">
                    <div class="comments__box">
                        <div class="comments__inner">
                            <div class="comments__header">
                                <div class="comments__row">
                                    <div class="d-flex flex-grow-1">
                                        <div class="comments__avatar">
                                            <img src="img/profile.jpg" class="comments__img">
                                        </div>
                                        <div class="comments__details">
                                            <h5 class="comments__author"><span class="comments__author-name">محمد نیکو نیکو نیکو</span></h5>
                                            <span class="comments_date"> 523 روز پیش </span>
                                        </div>
                                    </div>
                                    <a href="#comments" class="btn btn--blue btn--shadow-blue btn--comments-reply">ارسال پاسخ</a>
                                </div>
                            </div>
                            <p class="comments__body">
                                لورم ایپسوم
                                متـــــــــــــــــــــــــــــــــــــــــــــــــــن
                                ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                با هدف بهبود ابزارهای کاربردی می باشد.

                            </p>
                        </div>
                    </div>
                </div>
                <div id="comment-2">
                    <div class="comments__box">
                        <div class="comments__inner">
                            <div class="comments__header">
                                <div class="comments__row">
                                    <div class="d-flex flex-grow-1">
                                        <div class="comments__avatar">
                                            <img src="img/profile.jpg" class="comments__img">
                                        </div>
                                        <div class="comments__details">
                                            <h5 class="comments__author"><span class="comments__author-name">محمد نیکو نیکو نیکو</span></h5>
                                            <span class="comments_date"> 523 روز پیش </span>
                                        </div>
                                    </div>
                                    <a href="#comments" class="btn btn--blue btn--shadow-blue btn--comments-reply">ارسال پاسخ</a>
                                </div>
                            </div>
                            <p class="comments__body">
                                لورم ایپسوم
                                متـــــــــــــــــــــــــــــــــــــــــــــــــــن
                                ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                با هدف بهبود ابزارهای کاربردی می باشد.

                            </p>
                        </div>
                        <div class="comments__subset">
                            <div id="comment-3">
                                <div class="comments__box">
                                    <div class="comments__inner">
                                        <div class="comments__header">
                                            <div class="comments__row">
                                                <div class="d-flex flex-grow-1">
                                                    <div class="comments__avatar">
                                                        <img src="img/profile.jpg" class="comments__img">
                                                    </div>
                                                    <div class="comments__details">
                                                        <h5 class="comments__author"><span class="comments__author-name">محمد نیکو نیکو نیکو</span></h5>
                                                        <span class="comments_date"> 523 روز پیش </span>
                                                    </div>
                                                </div>
                                                <a href="#comments" class="btn btn--blue btn--shadow-blue btn--comments-reply">ارسال پاسخ</a>
                                            </div>
                                        </div>
                                        <p class="comments__body">
                                            لورم ایپسوم
                                            متـــــــــــــــــــــــــــــــــــــــــــــــــــن
                                            ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="comment-4">
                    <div class="comments__box">
                        <div class="comments__inner">
                            <div class="comments__header">
                                <div class="comments__row">
                                    <div class="d-flex flex-grow-1">
                                        <div class="comments__avatar">
                                            <img src="img/profile.jpg" class="comments__img">
                                        </div>
                                        <div class="comments__details">
                                            <h5 class="comments__author"><span class="comments__author-name">محمد نیکو نیکو نیکو</span></h5>
                                            <span class="comments_date"> 523 روز پیش </span>
                                        </div>
                                    </div>
                                    <a href="#comments" class="btn btn--blue btn--shadow-blue btn--comments-reply">ارسال پاسخ</a>
                                </div>
                            </div>
                            <p class="comments__body">
                                لورم ایپسوم
                                متـــــــــــــــــــــــــــــــــــــــــــــــــــن
                                ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                با هدف بهبود ابزارهای کاربردی می باشد.

                            </p>
                        </div>
                        <div class="comments__subset">
                            <div id="comment-5">
                                <div class="comments__box">
                                    <div class="comments__inner">
                                        <div class="comments__header">
                                            <div class="comments__row">
                                                <div class="d-flex flex-grow-1">
                                                    <div class="comments__avatar">
                                                        <img src="img/profile.jpg" class="comments__img">
                                                    </div>
                                                    <div class="comments__details">
                                                        <h5 class="comments__author"><span class="comments__author-name">محمد نیکو نیکو نیکو</span></h5>
                                                        <span class="comments_date"> 523 روز پیش </span>
                                                    </div>
                                                </div>
                                                <a href="#comments" class="btn btn--blue btn--shadow-blue btn--comments-reply">ارسال پاسخ</a>
                                            </div>
                                        </div>
                                        <p class="comments__body">
                                            لورم ایپسوم
                                            متـــــــــــــــــــــــــــــــــــــــــــــــــــن
                                            ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد.

                                        </p>
                                    </div>
                            <div class="comments__subset">
                                <div id="comment-6">
                                    <div class="comments__box">
                                        <div class="comments__inner">
                                            <div class="comments__header">
                                                <div class="comments__row">
                                                    <div class="d-flex flex-grow-1">
                                                        <div class="comments__avatar">
                                                            <img src="img/profile.jpg" class="comments__img">
                                                        </div>
                                                        <div class="comments__details">
                                                            <h5 class="comments__author"><span class="comments__author-name">محمد نیکو نیکو نیکو</span></h5>
                                                            <span class="comments_date"> 523 روز پیش </span>
                                                        </div>
                                                    </div>
                                                    <a href="#comments" class="btn btn--blue btn--shadow-blue btn--comments-reply">ارسال پاسخ</a>
                                                </div>
                                            </div>
                                            <p class="comments__body">
                                                لورم ایپسوم
                                                متـــــــــــــــــــــــــــــــــــــــــــــــــــن
                                                ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                                که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                                با هدف بهبود ابزارهای کاربردی می باشد.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</x-app-layout>
