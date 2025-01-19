@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header-button')
<div class="header__button">
    <form class="logout__button" method="post" action="/logout">
        @csrf
        <button class="header__button--submit" type="submit">Logout</button>
    </form>
</div>
@endsection

@section('main')
<main>
    <div class="main__content">
        <div class="main__content--heading">
            <h2>Admin</h2>
        </div>
        <div class="main__content__inner">
            <div class="search-form__group">
                <form class="search-form" action="{{ route('search') }}" method="get">
                    @csrf
                    <input class="search-form__item--input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ request('keyword', old('keyword')) }}">
                    <div class="search-form__item--select">
                        <select class="search-form__item--gender" name="gender">
                            <option value="{{ is_null(request('gender', old('gender'))) ? 'selected' : '' }}">性別</option>
                            <option value="1" {{ request('gender', old('gender')) == '1' ? 'selected' : '' }}>男性</option>
                            <option value="2" {{ request('gender', old('gender')) == '2' ? 'selected' : '' }}>女性</option>
                            <option value="3" {{ request('gender', old('gender')) == '3' ? 'selected' : '' }}>その他</option>
                        </select>
                    </div>
                    <div class="search-form__item--select">
                        <select class="search-form__item--categories" name="category_id">
                            <option value="" {{ is_null(request('category_id', old('category_id'))) ? 'selected' : '' }}>お問い合わせの種類</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id', old('category_id')) == $category->id ? 'selected' : '' }}>
                                {{ $category->content }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="search-form__item--select">
                        <input class="search-form__item--date" type="date" name="date" value="{{ request('date', old('date')) }}">
                    </div>
                    <button class="search-form__button--submit" type="submit">検索</button>
                    <button class="search-form__button--reset" type="submit" name="reset" value="true">リセット</button>
                </form>
            </div>
            <div class="main__content__inner--pagination">{{ $contacts->links() }}</div>

            <div class="result-table">
                <table class="result-table__inner">
                    <tr class="result-table__row">
                        <th class="result-table__header">お名前</th>
                        <th class="result-table__header">性別</th>
                        <th class="result-table__header">メールアドレス</th>
                        <th class="result-table__header">お問合せの種類</th>
                        <th class="result-table__header"></th>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr class="result-table__row">
                        <td class="result-table__item">{{ $contact['last_name'] }}{{ $contact['first_name'] }}</td>
                        <td class="result-table__item">
                            @if($contact['gender'] == 1)
                            男性
                            @elseif($contact['gender'] == 2)
                            女性
                            @else
                            その他
                            @endif
                        </td>
                        <td class="result-table__item">{{ $contact['email'] }}</td>
                        <td class="result-table__item">{{ $contact->category->content }}</td>

                        <td class="result-table__item">
                            <button type="button" class=" result-table__item--detail" onclick="location.href='#modal-{{ $contact->id }}'">詳細</button>

                            <div id="modal-{{ $contact->id }}" class="modal">
                                <div class="modal-content">
                                    <a href="#" class="close">&times;</a>
                                    <table class="modal-content__table">
                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">お名前</th>
                                            <td class="modal-content__table--content">
                                                {{ $contact['last_name'] }}{{ $contact['first_name'] }}
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">性別</th>
                                            <td class="modal-content__table--content">
                                                @if($contact['gender'] == 1)
                                                男性
                                                @elseif($contact['gender'] == 2)
                                                女性
                                                @else
                                                その他
                                                @endif
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">メールアドレス</th>
                                            <td class="modal-content__table--content">
                                                {{ $contact['email'] }}
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">電話番号</th>
                                            <td class="modal-content__table--content">
                                                {{ $contact['tel'] }}
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">住所</th>
                                            <td class="modal-content__table--content">
                                                {{ $contact['address'] }}
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">建物名</th>
                                            <td class="modal-content__table--content">
                                                {{ $contact['building'] }}
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">お問い合わせの種類</th>
                                            <td class="modal-content__table--content">
                                                <input type="hidden" name="category_id" class="form-item-input" value="{{ $contact['category_id'] }}" readonly />
                                                {{ $category->content }}
                                            </td>
                                        </tr>

                                        <tr class="modal-content__table-row">
                                            <th class="modal-content__table--header">お問い合わせ内容</th>
                                            <td class="modal-content__table--content">
                                                {{ $contact['detail'] }}
                                            </td>
                                        </tr>
                                    </table>
                                    <form class="modal-content__delete-form" action="{{ route('destroy') }}" method="POST">
                                        @csrf
                                        <div class="modal-content__delete-form__button">
                                            <input type="hidden" name="id" value="{{ $contact['id'] }}">
                                            <button class="modal-content__delete-form__button-submit" type="submit">削除</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="export-form">
                <form action="{{'/export?'.http_build_query(request()->query())}}" method="post">
                    @csrf
                    <input class="export__btn btn" type="submit" value="エクスポート">
                </form>
            </div>

        </div>
    </div>
</main>

@endsection