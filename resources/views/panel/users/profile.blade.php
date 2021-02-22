<x-panel-layout>
    <x-slot name="title">
        | پروفایل
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('profile') }}" class="is-active">اطلاعات کاربری</a></li>
        </ul>
    </div>
    <div class="main-content  ">
        <div class="user-info bg-white padding-30 font-size-13">
            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="profile__info border cursor-pointer text-center">
                    <div class="avatar__img"><img src="{{ asset('images/users').'/'.auth()->user()->profile }}" class="avatar___img">
                        <input type="file" name="profile" accept="image/*" class="hidden avatar-img__input">
                        @error('profile')
                        <p class="error">{{ $message }}</p>
                        @enderror
                        <div class="v-dialog__container" style="display: block;"></div>
                        <div class="box__camera default__avatar"></div>
                    </div>
                    <span class="profile__name">کاربر : {{ auth()->user()->name }}</span>
                </div>
                <input class="text" type="text" placeholder="نام" name="name" value="{{ auth()->user()->name }}">
                @error('name')
                <p class="error">{{ $message }}</p>
                @enderror
                <input class="text text-left" type="email" placeholder="ایمیل" name="email" value="{{ auth()->user()->email }}">
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
                <input class="text text-left" type="text" placeholder="شماره موبایل" name="mobile" value="{{ auth()->user()->mobile }}">
                @error('mobile')
                <p class="error">{{ $message }}</p>
                @enderror
                <input class="text text-left" type="password" placeholder="رمز عبور" name="password">
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
                <p class="rules">رمز عبور باید حداقل 8 کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای
                    غیر الفبا مانند <strong>!@#$%^&*()</strong> باشد.</p>
                <br>
                <br>
                <button class="btn btn-webamooz_net">ذخیره تغییرات</button>
            </form>
        </div>
    </div>
</x-panel-layout>
