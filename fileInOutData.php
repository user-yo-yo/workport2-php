<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
//		点数データファイルオープン
		$readfp=fopen("subject_data.csv","r");

//		全データ読み出し配列に格納
		while (!feof($readfp)){
//			1行データを配列データに格納
			$data=fgetcsv($readfp);

//			各データを別々の配列へ格納
			$subject[]=$data[0];
			$scores[]=$data[1];
			$total+=$data[1];
		}
//		読み込みファイルクローズ
		fclose($readfp);
		echo "ファイルの読み込みが成功しました。";



//		書き込みファイルオープン
		$writefp=fopen("statistic.txt","w");

//		読み込みデータを書き込む
		for($i=0; $i<count($subject); $i++){
			fputs($writefp,$subject[$i]."<___>".$scores[$i]."\n");
		}

//		合計点を書き込む
		fputs($writefp,"合計点：".$total."\n");

//		平均点を書き込む
		fputs($writefp,"平均点：".$total/count($scores)."\n");

//		書き込みファイルクローズ
		fclose($writefp);
		echo "ファイルの書き込みが成功しました。<br>\n";
		?>
    </body>
</html>