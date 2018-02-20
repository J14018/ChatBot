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
<html lang="ja">
<head>
<meta charset="utf-8">
<title>送信完了画面</title>
</head>
<body bgcolor="#4387e9">
	<font size = "7" color="#ffffff">
	<h1>送信完了画面</h1>

	送信が完了しました。<br>
	ご協力いただきありがとうございました。<br><br>

	<!-- トップ画面ボタン -->
	<form>
	<input type="button" style="width:320px;height:60px;font-size:40px;" value="トップページ" onclick="location.href='search.html'">
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
		$zipcode = $_POST['zipcode'];
		$prefecture = $_POST['prefecture'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$buildname = $_POST['buildname'];
		$tel = $_POST['tel'];
		$taste = $_POST['taste'];
		$chainshop = $_POST['chainshop'];
		$station = $_POST['station'];

		// INSERT文を作成
		$query = "INSERT INTO tblshopinfo_jp (shopname,zipcode,prefecture,city,address,buildname,tel,taste,chainshop,station) VALUES ('$shopname','$zipcode','$prefecture','$city','$address','$buildname','$tel','$taste','$chainshop','$station')";

		// INSERT文を実行
		$execute = mysql_query($query);

		// MySQLの切断
		$close = mysql_close($link);

	 ?>
</body>
</html>
