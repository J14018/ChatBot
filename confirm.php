<?php

	//「改行マーク」を「<br>」に置き換える自作関数
	function replace_br($str){
		$str=str_replace("\r\n","\r",$str);
		$str=str_replace("\r","\n",$str);
		$str=str_replace("\n","<br>",$str);
		return $str;
	}

?>

<?php

	//店名表示
	$shopname=$_POST["shopname"];

	//郵便番号表示
	$zipcode=$_POST["zipcode"];

	//都道府県表示
	$prefecture=$_POST["prefecture"];

	//市区町村表示
	$city=$_POST["city"];

	//番地表示
	$address=$_POST["address"];

	//建物名表示
	$buildname=$_POST["buildname"];

	//電話番号表示
	$tel=$_POST["tel"];

	//味（あっさりかこってりか）表示
	if($_POST["taste"]=="あっさり"){
		$taste="あっさり";
	}else{
		$taste="こってり";
	}

	//チェーン店かどうか表示
	$chainshop=$_POST["chainshop"];

	//最寄駅表示
	$station=$_POST["station"];

?>

<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>入力確認画面</title>
</head>
<body bgcolor="#4387e9">
	<font size = "7" color="#ffffff">
  <h1>入力確認画面</h1>

	<table style="width:1000px;height:60px;font-size:50px;color:#ffffff;border-style:none;">
	<tr>
		<td><b>店名　　　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($shopname); ?></td>
	</tr>
	<tr>
		<td><b>住所　　　　</b></td>
	</tr>
	<tr>
		<td><b>郵便番号　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($zipcode); ?></td>
	</tr>
	<tr>
		<td><b>都道府県　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($prefecture); ?></td>
	</tr>
	<tr>
		<td><b>市区町村　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($city); ?></td>
	</tr>
	<tr>
		<td><b>番地　　　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($address); ?></td>
	</tr>
	<tr>
		<td><b>建物名　　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($buildname); ?></td>
	</tr>
	<tr>
		<td><b>電話番号　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo $tel; ?></td>
	</tr>
	<tr>
		<td><b>味　　　　　</b></td>
		<td><b>：　</b></td>
		<td><?php echo $taste; ?></td>
	</tr>
	<tr>
		<td><b>チェーン店　</b></td>
		<td><b>：　</b></td>
		<td><?php echo $chainshop; ?></td>
	</tr>
	<tr>
		<td><b>最寄り駅</b></td>
		<td><b>：　</b></td>
		<td><?php echo $station; ?></td>
	</tr>
	</table>
<br>

    <br /><br />

		<!-- 送信するボタン -->
		<form action="send.php" method="post">
		<input type="hidden" name="shopname" value="<?php echo $shopname; ?>">
		<input type="hidden" name="zipcode" value="<?php echo $zipcode; ?>">
		<input type="hidden" name="prefecture" value="<?php echo $prefecture; ?>">
		<input type="hidden" name="city" value="<?php echo $city; ?>">
		<input type="hidden" name="address" value="<?php echo $address; ?>">
		<input type="hidden" name="buildname" value="<?php echo $buildname; ?>">
		<input type="hidden" name="tel" value="<?php echo $tel; ?>">
		<input type="hidden" name="taste" value="<?php echo $taste; ?>">
		<input type="hidden" name="chainshop" value="<?php echo $chainshop; ?>">
		<input type="hidden" name="station" value="<?php echo $station; ?>">
    <input type="submit" style="width:220px;height:60px;font-size:30px;" value="送信する">
		　
    <!-- 内容を修正するボタン -->
    <form style="display: inline">
    <input type="button" style="width:320px;height:60px;font-size:30px;" value="内容を修正する" onClick='history.back()'>
    </form>
</body>
</html>
