@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-button')
<div class="header__button">
<form class="login__button" method="get" action="/login">
    <button class="header__button--submit" type="submit">login</button>
</form>
</div>
@endsection

@section('main')
<main>
    <div class="main__content">
        <div class="main__content--heading">
            <h2>Register</h2>
        </div>

        <div class="register__container">
            <div class="register__container__inner">
                <form class="register-form" method="post" action="/register">
                    @csrf
                    <div class="register-form__group">
                        <div class="register-form__label">
                            <span class="register-form__label">お名前</span>
                        </div>
                        <div class="register-form__input--text">
                            <input type="text" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}" />
                            @if ($errors->has('name'))
                            <li class="error">{{$errors->first('name')}}</li>
                            @endif
                        </div>
                    </div>
                    <div class="register-form__group">
                        <div class="register-form__label">
                            <span class="register-form__label">メールアドレス</span>
                        </div>
                        <div class="register-form__input--text">
                            <input type="text" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                            <li class="error">{{$errors->first('email')}}</li>
                            @endif
                        </div>
                    </div>
                    <div class="register-form__group">
                        <div class="register-form__label">
                            <span class="register-form__label">パスワード</span>
                        </div>
                        <div class="register-form__input--text">
                            <input type="password" name="password" placeholder="例: coachtech1106">
                            @if ($errors->has('password'))
                            <li class="error">{{$errors->first('password')}}</li>
                            @endif
                        </div>
                    </div>
                    <div class="register-form__group">
                        <div class="submit__button">
                            <button class="submit__button-submit" type="submit">登録</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection