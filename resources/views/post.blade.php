<x-app-layout>
    <x-slot name="title">
        لاراول
    </x-slot>
<main>
    <div class="container article">
        <article class="single-page">
            <div class="breadcrumb">
                <ul class="breadcrumb__ul">
                    <li class="breadcrumb__item"><a href="" class="breadcrumb__link" title="خانه">بخش مقالات</a></li>
                    <li class="breadcrumb__item"><a href="" class="breadcrumb__link" title="فریم ورک لاراول چیست ؟‌">فریم
                        ورک لاراول چیست ؟‌</a></li>
                </ul>
            </div>
            <div class="single-page__title">
                <h1 class="single-page__h1">فریم ورک لاراول چیست ؟‌ </h1>
                <span class="single-page__like"></span>
            </div>
            <div class="single-page__details">
                <div class="single-page__author">نویسنده : محمد نیکو</div>
                <div class="single-page__date">تاریخ : 1399/02/08</div>
            </div>
            <div class="single-page__img">
                <img class="single-page__img-src" src="img/banner/lara.png" alt="">
            </div>
            <div class="single-page__content">
                <p class="single-page__txt">
                    در این مقاله ما یاد می گیریم که ReactJs چیه و چرا ما باید از اون به جای فریمورک های دیگه جاوا
                    اسکریپت
                    مثل angular استفاده کنیم.
                </p>
                <p class="single-page__txt">ری اکت (reactjs) اساسا یک کتابخونه open-source جاوا اسکریپتی برای
                    ساخت رابط کاربری(user interfaces) برای
                    <a href="" target="_blank" rel="noopener nofollow">single page
                        applications(اپلیکیشن های تک صفحه ای</a>) است.این کتابخونه برای مدیریت لایه View برای وب استفاده
                    می
                    شود.همچنین React این امکان رو در اختیار ما میذاره که reusable UI components(کامپوننت های قابل
                    استفاده
                    مجدد رابط کاریری) ایجاد کنیم.React&nbsp; در ابتدا توسط Jordan Walke یکی از مهندسین ارشد فیسبوک ایجاد
                    شد.React ابتدا در سال 2011 در فیسبوک مورد استفاده قرار گرفت و سپس در سال 2012 در اینستاگرام استفاده
                    شد.
                </p>
                <p class="single-page__txt">
                    ری اکت این امکان را در اختیار توسعه دهندگان می گذارد که وب اپلیکیشن های خیلی بزرگ که می تواند date
                    را
                    تغییر بدهد،بدون reload صفحه ایجاد کنند.مهم ترین اهداف React را میتوان سادگی،سرعت و مقیاس پذیر بودن
                    دانست.تمرکز اصلی React بر روی رابط کاربری است و فقط در لایه View در معماری MVC مطابقت دارد.این
                    کتابخانه
                    می تواند با کتابخانه های و فریمورک های دیگر جاوا اسکریپت مثل Angular ترکیب و مورد استفاده قرار گیرد.
                </p>
                <h2 class="">ویژگی های React Js چیست</h2>
                <p class="single-page__txt">بیایید نگاهی به ویژگی های مهم React بیاندازیم:</p>
                <p class="single-page__txt"><strong> JSX</strong></p>
                <p class="single-page__txt">در React به جای استفاده از جاوا اسکریپت معمولی،از JSX برای templating
                    استفاده می شود.jsx یک فرمت جاوا
                    اسکریپتی برای ایجاد DOM های HTML در قالب یک کامپوننت است </p>
                <p class="single-page__txt"><strong>React Native </strong></p>
                <p class="single-page__txt"> یک فریمورک جاوا اسکریپتی برای توسعه اپلیکیشن های موبایل به صورت
                    Native برای دو سیستم عامل Android و&nbsp; ios است که در سال 2015 معرفی شد.این فریمورک بر پایه زبان
                    جاوا
                    اسکریپت و کتابخانه React است.یعنی شما با تسلط بر React می توانید در یادگیریReact Native خیلی جلوتر
                    از
                    بقیه باشید.البته توجه داشته باشید که بین این کتابخونه و فریمورک تفاوت های اساسی وجود دارد که برای
                    درک
                    این تفاوت های پیشنهاد می کنم مقاله <a href="" target="_blank" rel="noopener nofollow">تفاوت های اصلی
                        بین
                        React و
                        React Native</a> را بخوانید. </p>
                <p class="single-page__txt">
                    <strong>Single-Way data flow</strong>
                </p>
                <p class="single-page__txt">
                    در React مجموعه ای از value های تغییر ناپذیر بین کامپوننت ها به عنوان properties به تگ های HTML پاس
                    داده
                    می شوند.کامپوننت ها به صورت مستقیم نمی توانند هر properties را تغییر دهند اما می توانند آن ها را به
                    call
                    back function پاس دهند و به کمک آن ها تغییرات را انجام دهند.این فراآیند به طور کامل با “properties
                    flow
                    down; actions flow up” شناخته می شود
                </p>
                <p class="single-page__txt">
                    <strong> Virtual Document Object Model </strong>
                </p>
                <p class="single-page__txt">ری اکت React یک ساختار کش in-memory ایجاد می کند. در این ساختار اگر تغییری
                    رخ داده باشد DOM را بروزرسانی
                    می کند.این ویژگی برنامه نویس را قادر می سازد درحالی که در یک wtpi تغییرات ایجاد میشود تنها کامپوننتی
                    rerender شود که تغییر پیدا کرده است.Virtual DOM ی مانند DOM یک درخت از گره هایی هست که شامل element
                    ها و
                    attributes هایشان و محتوا به عنوان objects است.متدrender() یک درخت از کلمپوننت های React ایجاد می
                    کند و
                    تغییر در هر کامپوننت باعث می شود این گره بروز رسانی شو</p>
            </div>
            <div class="single-page__tags">
                <ul class="single-page__tags-ul">
                    <li class="single-page__tags-li"><a href="" class="single-page__tags-link">ری اکت</a></li>
                    <li class="single-page__tags-li"><a href="" class="single-page__tags-link">ری اکت</a></li>
                    <li class="single-page__tags-li"><a href="" class="single-page__tags-link">ری اکت</a></li>
                    <li class="single-page__tags-li"><a href="" class="single-page__tags-link">ری اکت</a></li>
                    <li class="single-page__tags-li"><a href="" class="single-page__tags-link">ری اکت</a></li>
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