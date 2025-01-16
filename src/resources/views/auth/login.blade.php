@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-button')
<div class="header__button">
    <form class="register__button" action="/register">
        <button class="header__button--submit" type="submit">Register</button>
    </form>
</div>
@endsection

@section('main')
<div class="main__content">
    <div class="main__content--heading">
        <h2>Login</h2>
    </div>

    <div class="register__container">
        <div class="register__container__inner">
            <form class="login-form" action="/login" method="post">
                @csrf
                <div class="register-form__group">
                    <div class="register-form__label">
                        <span class="form__label">メールアドレス</span>
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
                        <span class="form__label">パスワード</span>
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
                        <button class="submit__button-submit" type="submit">ログイン</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection