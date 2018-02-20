<?php
	//「改行マーク」を「<br>」に置き換える自作関数
	function replace_br($str){
		$str=str_replace("\r\n","\r",$str);
		$str=str_replace("\r","\n",$str);
		$str=str_replace("\n","<br>",$str);
		return $str;
	}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Transmission complete screen</title>
</head>
<body bgcolor="#4387e9">
	<font size = "7" color="#ffffff">
	<h1>Transmission complete screen</h1>

	Transmission completed.<br>
	Thank you for your cooperation.<br><br>

	<!-- トップ画面ボタン -->
	<form>
	<input type="button" style="width:320px;height:60px;font-size:40px;" value="Top page" onclick="location.href='search.html'">
	</form>

	<?php

		// MySQLへ接続
		$link = mysql_connect("localhost","root","");

		// データベースの選択
		mysql_select_db("shopinfo",$link);
		// 文字コードの設定
		mysql_query('SET NAMES utf8', $link);

		// フォームで送られてきた条件をもとにINSERT文を作成
		$shopname = $_POST['shopname'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$taste = $_POST['taste'];
		$chainshop = $_POST['chainshop'];
		$station = $_POST['station'];

		// INSERT文を作成
		$query = "INSERT INTO tblshopinfo_en (shopname,address,tel,taste,chainshop,station) VALUES ('$shopname','$address','$tel','$taste','$chainshop','$station')";

		// INSERT文を実行
		$execute = mysql_query($query);

		// MySQLの切断
		$close = mysql_close($link);

	 ?>
</body>
</html>
