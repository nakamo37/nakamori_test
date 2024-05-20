<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashonablyLate
      </a>
      @if (Auth::check())
      <form class="form" action="/logout" method="post">
        <button class="header__button">ログアウト</button>
      </form>
      @csrf
      @endif
    </div>
  </header>

  <main>
    <div class="admin-search__content">
      <div class="admin-search-heading">
        <h2>Admin</h2>
      </div>
      <form class="search-form" action="/admin/search" method="get">
        @csrf
        <div class="search-form__item">
          <input class="search-form__item-input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ old('keyword') }}">
          <select class="search-form__item-select" name="gender">
            <option value="">性別</option>
            <option value="">男性</option>
            <option value="">女性</option>
            <option value="">その他</option>
          </select>
          <select class="search-form__item-select" name="select" id="">
            <option value="">お問い合わせの種類</option>
            
            <option value="">商品のお届けについて</option>
            <option value="">商品の交換について</option>
            <option value="">商品トラブル</option>
            <option value="">ショップへのお問い合わせ</option>
            <option value="">その他</option>
          </select>
          <input class="search-form__item-select" type="date" name="date">
        </div>
        <div class="search-form__button">
          <button class="search-form__button-submit" type="submit">検索</button>
          <button class="search-form__button-reset" type="reset">リセット</button>
        </div>
      </form>
      <table class="admin-table">
        <tr>
          <th class="table-heading">お名前</th>
          <th class="table-heading">性別</th>
          <th class="table-heading">メールアドレス</th>
          <th class="table-heading">お問い合わせの種類</th>
        </tr>
      </table>
    </div>
  </main>
</body>