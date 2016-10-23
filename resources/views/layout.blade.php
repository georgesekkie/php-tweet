<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pictweet</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header class="header">
      <div class="header__bar row">
        <h1 class="grid-6"><a href="/">PicTweet</a></h1>
        <div class="user_nav grid-6">
          <a class="post" href="/tweets/create">投稿する</a>
        </div>
      </div>
    </header>
    @yield('content')
  </body>
</html>