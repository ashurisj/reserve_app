<body>
  <h1>Index</h1>
    <p>ディレクティブ例</p>
    <ol>
    @foreach($data as $item)
    <li>{{$item}}
    @endforeach
    </ol>
</body>

<!-- <body>
  <h1>Index</h1>
    @if ($msg != '')
      <p>こんにちは、{{$msg}}さん。</p>
    @else
      <p>何か書いてください。</p>
    @endif
  <form method="POST" action="/hello">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
    </form>
</body> -->


<!-- <body>
  <h1>Index</h1>
    <p>{{$msg}}</p>
      <form method="POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body> -->

