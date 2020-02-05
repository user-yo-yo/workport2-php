<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
//		ファイルオープン
		$fp=fopen("sample.txt","r");

//		ループで全てのデータを読み込む
		while(!feof($fp)){
			echo fgets($fp)."<br>\n";
		}

//		ファイルクローズ
		fclose($fp);
		?>
    </body>
</html>