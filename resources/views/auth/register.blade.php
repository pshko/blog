<x-app-layout>
    <x-slot name="title">
        ثبت نام
    </x-slot>
<main class="bg--white">
    <div class="container">
        <div class="sign-page">
            <h1 class="sign-page__title">ثبت نام در وب‌سایت</h1>

            
            <form class="sign-page__form" action="{{ route('register.store') }}" method="POST">
                @CSRF
                <div>
                    <input type="text" class="text text--right" name="name" placeholder="نام  و نام خانوادگی">
                    @error('name')
                    <p class="error">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div>
                    <input type="text" class="text text--left" name="mobile" placeholder="شماره موبایل">
                    @error('mobile')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
                </div>
                <div>
                    <input type="email" class="text text--left" name="email" placeholder="ایمیل">
                    @error('email')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
                </div>
                <div>
                    <input type="password" class="text text--left" name="password" placeholder="رمز عبور">
                    @error('password')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
                </div>
                <div>
                    <input type="password" class="text text--left" name="password_confirmation" placeholder="تکرار رمز عبور">
                </div>
                    <button class="btn btn--blue btn--shadow-blue width-100 mb-10" type="submit">ثبت نام</button>
                    <div class="sign-page__footer">
                        <span>در سایت عضوید ؟ </span>
                        <a href="{{ route('login') }}" class="color--46b2f0">صفحه ورود</a>
                    </div>
            </form>
        </div>
    </div>
</main>
</x-app-layout>