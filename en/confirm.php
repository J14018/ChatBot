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

	//住所表示
	$address=$_POST["address"];

	//電話番号表示
	$tel=$_POST["tel"];

	//味（あっさりかこってりか）表示
	if($_POST["taste"]=="Light"){
		$taste="Light";
	}else{
		$taste="Rich";
	}

	//チェーン店かどうか表示
	$chainshop=$_POST["chainshop"];

	//最寄駅表示
	$station=$_POST["station"];

?>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Input confirmation screen</title>
</head>
<body bgcolor="#4387e9">
	<font size = "7" color="#ffffff">
  <h1>Input confirmation screen</h1>

	<table style="width:1000px;height:60px;font-size:50px;color:#ffffff;border-style:none;">
	<tr>
		<td><b>Shop name</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($shopname); ?></td>
	</tr>
	<tr>
		<td><b>Address</b></td>
		<td><b>：　</b></td>
		<td><?php echo nl2br($address); ?></td>
	</tr>
	<tr>
		<td><b>Phone number</b></td>
		<td><b>：　</b></td>
		<td><?php echo $tel; ?></td>
	</tr>
	<tr>
		<td><b>Taste</b></td>
		<td><b>：　</b></td>
		<td><?php echo $taste; ?></td>
	</tr>
	<tr>
		<td><b>Chain shop</b></td>
		<td><b>：　</b></td>
		<td><?php echo $chainshop; ?></td>
	</tr>
	<tr>
		<td><b>Nearest station</b></td>
		<td><b>：　</b></td>
		<td><?php echo $station; ?></td>
	</tr>
	</table>
<br>

    <br /><br />

		<!-- 送信するボタン -->
		<form action="send.php" method="post">
		<input type="hidden" name="shopname" value="<?php echo $shopname; ?>">
		<input type="hidden" name="address" value="<?php echo $address; ?>">
		<input type="hidden" name="tel" value="<?php echo $tel; ?>">
		<input type="hidden" name="taste" value="<?php echo $taste; ?>">
		<input type="hidden" name="chainshop" value="<?php echo $chainshop; ?>">
		<input type="hidden" name="station" value="<?php echo $station; ?>">
    <input type="submit" style="width:220px;height:60px;font-size:30px;" value="Send">
		　
    <!-- 内容を修正するボタン -->
    <form style="display: inline">
    <input type="button" style="width:320px;height:60px;font-size:25px;" value="To modify the contents" onClick='history.back()'>
    </form>
</body>
</html>
