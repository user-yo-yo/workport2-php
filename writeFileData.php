<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
//			書き込みデータを配列で用意
			$data=array("りんご","みかん","メロン","いちご");

//			ファイルオープン(新規書も込み)
			$fp=fopen("output.txt","w");

//			タイトル書き込み
			fputs($fp,"■好きな果物リスト\n");

//			繰り返しでまとめて書き込み
			foreach ($data as $val){
				fputs($fp,$val."\n");
			}

			echo "書き込みが終了しました。";

//			ファイルクローズ
			fclose($fp);
		?>
    </body>
</html>