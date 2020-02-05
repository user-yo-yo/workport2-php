<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
//		ファイルオープン
		$fp=fopen("sample.txt","r");

		echo fgets($fp)."<br>\n";
//		1行読み出し1回目(1行目)
		echo fgets($fp)."<br>\n";
//		1行読み出し2回目(2行目)
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";
//		echo fgets($fp)."<br>";

//		ファイルクローズ
		fclose($fp);
		?>
    </body>
</html>