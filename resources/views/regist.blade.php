<!DOCTYPE html>
    <head>
	<meta charset="utf-8">
	<link href="{{asset('/css/main.css')}}" rel="stylesheet">
        <title>新規登録</title>
    </head>
    <body>
	<header>
		<h3>新規登録</h3>
	</header>
	<form method="post" action="/sakamak/public/confirm">
	@csrf
	<table class="regist">
		<tr><th>日付</th><td><input class="rg-input" type="date" name="reg_date" value="<?php echo date('Y-m-d');?>"></td></tr>
		<tr><th>タイトル</th><td><input class="rg-input" type="textbox" name="title"></td></tr>
	<tr>
		<th>金額</th>
		<td><input class="rg-input" type="number" name="money"></td>
	</tr>
	<tr>
		<th>払った人</th>
		<td>
			<select class="rg-input" name="pay_user">
				<option value="none">選択してください</option>
				<option value="sakamaki">酒巻</option>
				<option value="takizawa">瀧沢</option>
			</select>
		</td>
	</tr>
	<tr>
		<th>その他</th>
		<td>
			<label><input class="check" type="checkbox" name="treat_flg" value="1">おごり</label>
		</td>
	</tr>
	</table>
	<div style="float:left;">
		<a href="./">戻る</a>
		<input class="btn" type="submit" value="確認">
	</div>
	</form>
    </body>
</html>
