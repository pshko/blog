<x-app-layout>
    <x-slot name="title">
        بازیابی کلمه عبور
    </x-slot>
<main class="bg--white">
    <div class="container">
        <div class="sign-page">
            <h1 class="sign-page__title">بازیابی رمز عبور</h1>

            <form class="sign-page__form" method="POST" action="{{ route('password.email') }}">
                @csrf    
                <input type="text" name="email" class="text text--left" placeholder="ایمیل">
                @error('email')
                <p class="error">
                    {{ $message }}
                </p>
                @enderror
                @if(Session::has('status'))
                <p class="error">
                    {{ $message }}
                </p>
                @endif
                <button class="btn btn--blue btn--shadow-blue width-100 ">بازیابی</button>
                <div class="sign-page__footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="{{ route('register') }}" class="color--46b2f0">صفحه ثبت نام</a>
                </div>
            </form>
        </div>
    </div>
</main>
</x-app-layout>