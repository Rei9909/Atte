<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
</head>
<body>
  
  <header class="header">
    <div class="header__frex">
      <a href="#" class="home">Atte</a>
      @if(Auth::check())
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="nav__item"><a href="#">ホーム</a></li>
          <li class="nav__item"><a href="#">日付一覧</a></li>
          <li class="nav__item">
            <form action="/logout" method="POST">
              @csrf
              <button class="nav__item-button" type="submit">ログアウト</button>
            </form>
          </li>
        </ul>
      </nav>
      @endif
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <small>Atte,inc.</small>
  </footer>

</body>
</html>

<style>
  
</style>