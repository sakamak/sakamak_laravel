<!DOCTYPE html>
    <head>
	<meta charset="utf-8">
	<link href="{{asset('/css/main.css?20210201')}}" rel="stylesheet">
        <title>トップページ</title>
    </head>
    <body>
	<header>
		<h3>Total</h3>
		<p><?php echo $payMessage ?>
		<?php echo $payMoney ?>円</p>
	</header>
	<a href="regist">新規</a>
	<a href="payconfirm">精算</a>
	<table>
		<tr>
			<th>日付</th>
			<th>タイトル</th>
			<th>払った人</th>
			<th>金額</th>
			<th>おごり</th>
		</tr>
		<?php foreach($moneydata as $data): ?>
		<?php if($data->del_flg != 1): ?>
		<tr>
			<td><?php echo $data->reg_date ?></td>
			<td><?php echo $data->title ?></td>
			<td><?php if($data->pay_user == 'sakamaki'){echo '酒巻';}else if($data->pay_user == 'takizawa'){echo '瀧沢';} ?></td>
			<td><?php echo $data->money ?>円</td>
			<td><?php if($data->treat_flg == 1){echo '〇';} ?></td>
		</tr>
		<?php endif ?>
		<?php endforeach ?>
	</table>
	
		<p>
	
    </body>
</html>
