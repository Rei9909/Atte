@extends('layouts.layout')


@section('content')

<div class="register">
  <h1 class="register__ttl">会員登録</h1>
  
  <div class="register__form">
    <form method="post" action="register">
      @csrf

      <div class="form__item">
        <input type="name" placeholder="名前" name="name" id="name">
      </div>

      <div class="form__item">
        <input type="password" placeholder="パスワード" name="password" id="password">
      </div>

      <div class="form__item">
        <input type="password" placeholder="確認用パスワード" name="Confirmation__password" id="Confirmation__password">
      </div>

      <div class="form__item">
        <input type="submit" placeholder="会員登録" name="button" id="button">
      </div>
    </form>
  </div>
  
  <p class="register__text">アカウントをお持ちの方はこちら</p>
  
  <div class="register__login">
    <a href="login">ログイン</a>
  </div>

</div>

@endsection
