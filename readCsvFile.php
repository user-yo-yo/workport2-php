<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
//		ファイルオープン
		$fp=fopen("subject_data.csv","r");

//		fgets結果を表示
		var_dump(fgets($fp));
		echo "<br>\n";

//		fgetcsv結果を表示
		var_dump(fgetcsv($fp));

//		ファイルクローズ
		fclose(($fp));
		?>
    </body>
</html>