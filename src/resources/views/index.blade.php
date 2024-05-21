@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('main')
<div class="main__content">
    <div class="main__content--heading">
        <h2>Contact</h2>
    </div>

    <div class="contact__container">
        <table class="contact-form__table">
            <form class="contact-form" name="contact" method="post" action="{{ route('confirm') }}">
                @csrf
                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        お名前<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__input">
                        <input type="text" name="last_name" class="form-item-input" value="{{ old('last_name') }}" placeholder="例: 山田" />
                        <p class="form-item-tel"></p>
                        <input type="text" name="first_name" class="form-item-input" value="{{ old('first_name') }}" placeholder="例: 太郎" />
                    </td>
                </tr>
                <tr class="contact-form__item">
                    <td class="error">
                        @error('last_name')
                        <li>{{ $message }}</li>
                        @enderror
                        @error('first_name')
                        <li>{{ $message }}</li>
                        @enderror
                    </td>
                </tr>


                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        性別<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__radio">
                        <input type="radio" id="contactChoice1" name="gender" value="1" checked />
                        <label for="contactChoice1">男性</label>
                        <input type="radio" id="contactChoice1" name="gender" value="2" />
                        <label for="contactChoice1">女性</label>
                        <input type="radio" id="contactChoice1" name="gender" value="3" />
                        <label for="contactChoice1">その他</label>
                    </td>
                </tr>

                <tr class="contact-form__item">
                    @error('gender')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        メールアドレス<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__input">
                        <input type="email" name="email" class="form-item-input" value="{{ old('email') }}" placeholder="例: test@example.com" />
                    </td>
                </tr>
                <tr class="contact-form__item">
                    @error('email')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        電話番号<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__input">
                        <input type="text" name="tel_1" class="form-item-input" value="{{ old('tel_1') }}" placeholder="080" />
                        <p class="form-item-tel">-</p>
                        <input type="text" name="tel_2" class="form-item-input" value="{{ old('tel_2') }}" placeholder="1234" />
                        <p class="form-item-tel">-</p>
                        <input type="text" name="tel_3" class="form-item-input" value="{{ old('tel_3') }}" placeholder="5678" />
                    </td>
                </tr>
                <tr class="contact-form__item">
                    @error('tel')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        住所<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__input">
                        <input type="text" name="address" class="form-item-input" value="{{ old('address') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
                    </td>
                </tr>
                <tr class="contact-form__item">
                    @error('address')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        建物名
                    </th>
                    <td class="contact-form__input">
                        <input type="text" name="building" class="form-item-input" value="{{ old('building') }}" placeholder="例: 千駄ヶ谷マンション101" />
                    </td>
                </tr>
                <tr class="contact-form__item">
                    @error('building')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        お問い合わせの種類<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__input">
                        <select class="form-item-select" name="category_id" required>
                            <option value="" selected disabled>選択してください</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} />
                            {{ $category->content }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="contact-form__item">
                    @error('category_id')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__item">
                    <th class="contact-form__label" rowspan="2">
                        お問い合わせ内容<span class="form-item-label-required">※</span>
                    </th>
                    <td class="contact-form__input">
                        <textarea name="detail" class="form-item-textarea" value="">{{ old('detail') }}</textarea>
                    </td>
                </tr>
                <tr class="contact-form__item">
                    @error('detail')
                    <td class="error">
                        <li>{{ $message }}</li>
                    </td>
                    @enderror
                </tr>

                <tr class="contact-form__button">
                    <td class="form-button">
                        <button type="submit" class="submit__button-submit" value="送信する">確認画面</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    @endsection