<!DOCTYPE html>
<html lang="ja">
<head>
  @include('_head')
  <link rel="stylesheet" href="/css/style.css">
  <title>編集 | Fly Tweet</title>
</head>
<body>
  <h1 class="heading-title">Fly Tweet</h1>
  <div class="main-container">
    <div class="update-container">
      <div class="mountain-bg"></div>
      @if (session('feedback.success'))
        <p>{{ session('feedback.success') }}</p>
      @endif
      <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">
        @method('put')
        @csrf
        <div class="btn-list">
          <label for="tweet-content">つぶやきを編集</label>
          <button class="btn update" type="submit">編集</button>
        </div>
        <textarea class="input textarea-update" name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
        @error('tweet')
        <p>{{ $message }}</p>
        @enderror
      </form>
      <a class="btn back" href="{{ route('tweet.index') }}">戻る</a> 
    </div>
  </div>
</body>
</html>