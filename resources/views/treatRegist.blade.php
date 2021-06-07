<!DOCTYPE html>
    <head>
	<meta charset="utf-8">
	<link href="{{asset('/css/main.css')}}" rel="stylesheet">
        <title>新規登録</title>
    </head>
    <body>
	<header>
		<h3>新規登録（おごり）</h3>
	</header>
	<form method="post" action="/sakamak/public/confirm">
	@csrf
	<table class="regist">
		<tr><th>日付</th><td><input type="date" name="reg_date" value="<?php echo date('Y-m-d');?>"></td></tr>
		<tr><th>タイトル</th><td><input type="textbox" name="title"></td></tr>
	<tr>
		<th>おごってもらった金額</th>
		<td><input type="number" name="money"></td>
	</tr>
	<tr>
		<th>おごった人</th>
		<td>
			<select name="pay_user">
				<option value="none">選択してください</option>
				<option value="sakamaki">酒巻</option>
				<option value="takizawa">瀧沢</option>
			</select>
		</td>
	</tr>
	</table>
	<a href="./regist">戻る</a>
	<input class="btn" type="submit" value="確認">
	<input type="hidden" name="treat_flg" value=1>
	</form>
    </body>
</html>
