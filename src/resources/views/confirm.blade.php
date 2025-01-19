@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('main')
<div class="main__content">
    <div class="main__content--heading">
        <h2>Confirm</h2>
    </div>

    <div class="contact__container">
        <form class="contact-form" name="store" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <table class="contact-form__table">
                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">お名前</th>
                    <td class="contact-form__table--content"><p>{{ $contact['last_name'] }}&nbsp;{{ $contact['first_name'] }}</p></td>
                    <input type="hidden" name="last_name" class="form-item-input" value="{{ $contact['last_name'] }}" />
                    <input type="hidden" name="first_name" class="form-item-input" value="{{ $contact['first_name'] }}" />
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">性別</th>
                    <td class="contact-form__table--content">
                        <input type="hidden" name="gender" class="form-item-input" value="{{ $contact['gender'] }}" readonly />
                        <p>
                            @if($contact['gender'] == 1)
                            男性
                            @elseif($contact['gender'] == 2)
                            女性
                            @else
                            その他
                            @endif
                        </p>
                    </td>
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">メールアドレス</th>
                    <td class="contact-form__table--content">
                        <input type="text" name="email" class="form-item-input" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">電話番号</th>
                    <td class="contact-form__table--content">
                        <p>{{ $contact['tel_1'] }}{{ $contact['tel_2'] }}{{ $contact['tel_3'] }}</p>
                    </td>
                        <input type="hidden" name="tel_1" class="form-item-input" value="{{ $contact['tel_1'] }}" readonly />
                        <input type="hidden" name="tel_2" class="form-item-input" value="{{ $contact['tel_2'] }}" readonly />
                        <input type="hidden" name="tel_3" class="form-item-input" value="{{ $contact['tel_3'] }}" readonly />
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">住所</th>
                    <td class="contact-form__table--content">
                        <input type="text" name="address" class="form-item-input" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">建物名</th>
                    <td class="contact-form__table--content">
                        <input type="text" name="building" class="form-item-input" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">お問い合わせの種類</th>
                    <td class="contact-form__table--content">
                        <input type="hidden" name="category_id" class="form-item-input" value="{{ $contact['category_id'] }}" readonly />
                        <p>{{ $category->content }}</p>
                    </td>
                </tr>

                <tr class="contact-form__table-row">
                    <th class="contact-form__table--header">お問い合わせ内容</th>
                    <td class="contact-form__table--content">
                        <input type="text" name="detail" class="form-item-input" value="{{ $contact['detail'] }}" readonly />
                    </td>
                </tr>

            </table>

            <div class="contact-form__button">
                <button type="submit" class="submit__button-submit" value="送信">送信</button>
                <button type="submit" class="submit__button-back" name="back" value="back">修正</button>
            </div>
        </form>

        @endsection