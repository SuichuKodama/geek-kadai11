<!DOCTYPE html>
<html lang="ja">
<head>
  @include('_head')
  <link rel="stylesheet" href="/css/style.css">
  <title>Fly Tweet</title>
</head>
<body>
  <h1 class="heading-title">Fly Tweet</h1>
  <main class="main-container">
    <div class="mountain-bg"></div>
    <div class="tweet-container">
      @if (session('feedback.success'))
        <p>{{ session('feedback.success') }}</p>
      @endif
      @foreach ($tweets as $tweet)
      <ul class="list">
        <li class="item">
          <div class="text">{{ $tweet->content }}</div>
          <div class="btn-list">
            <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
              @csrf
              @method('delete')
              <button class="btn delete" type="submit">削除</button>
            </form>
            <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}" class="btn update">編集</a>
          </div>
        </li>
      </details>
      @endforeach  
      <div class="input-container">
        <form class="input-wrap" action="{{ route('tweet.create') }}" method="post">
          @csrf
          <textarea class="input textarea" name="tweet" id="tweet-content" type="text" placeholder="釣りの情報をつぶやこう！"></textarea>
          @error('tweet')
          <p>{{ $message }}</p>
          @enderror
          <button class="btn send" type="submit">投稿</button>
        </form> 
      </div>
    </div>
  </main>
</body>
</html>