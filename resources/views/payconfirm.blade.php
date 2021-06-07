<!DOCTYPE html>
    <head>
	<meta charset="utf-8">
	<link href="{{asset('/css/main.css')}}" rel="stylesheet">
        <title>精算確認</title>
    </head>
    <body>
    <header>
      <h3>精算します</h3>
    </header>
		<p class="msg">支払いましたか？</p>
    <p class="msg">精算を確定すると本日以前のデータはすべてトップページから削除されます。</p>
		<a href="./">戻る</a>
    <form method="post" action="/sakamak/public/paidconfirm">
    @csrf
      <input class="btn" type="submit" value="精算">
    </form>
    </body>
</html>
