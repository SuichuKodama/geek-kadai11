<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fly Tweet</title>
</head>
<body>
  <h1>Fly Tweet</h1>
  <div>
    <a href="{{ route('tweet.index') }}">戻る</a>
    <p>投稿フォーム</p>
    @if (session('feedback.success'))
      <p>{{ session('feedback.success') }}</p>
    @endif
    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">
      @method('put')
      @csrf
      <label for="tweet-content">つぶやき</label>
      <span>140文字まで</span>
      <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
      @error('tweet')
      <p>{{ $message }}</p>
      @enderror
      <button type="submit">編集</button>
    </form>   
  </div>
</body>
</html>