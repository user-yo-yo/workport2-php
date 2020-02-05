<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<?php
//			読み込みファイルチェック
			if(!is_readable("subject_data.csv")){
				echo "「subject_data.csv」が読み込めないため処理を中断します。";
				exit;
			}
//			点数データファイルオープン
			$readfp=fopen("subject_data.csv","r");

//			全データ読み出し配列に格納
			while (!feof($readfp)){
//				1行データを配列データで取得
				$datas=fgetcsv($readfp);
//				各データを別々の配列に格納
				$subjects[]=$datas[0];
				$scores[]=$datas[1];

				$total+=$datas[1];
			}

//			読み込みファイルクローズ
			fclose($readfp);
			echo "ファイルの読み込みが成功しました。<br>\n";



//			書き込みファイルの存在チェック
			if(file_exists("statics.txt")){
//			ファイルが存在した場合書き込みチェックを行う
			if(!is_writable("static.txt")){
				echo "「static.txt」が書き込み禁止のため処理を中断します。<br>\n";
				exit;
			}
			}

//			書き込みファイルオープン
			$writefp=fopen("static.txt","w");

//			読み込みデータを書き込む
			for($i=0; $i<count($subjects); $i++){
				fputs($writefp,$subjects[$i]."<--->".$scores[$i]."\n");
			}

//			合計点を書き込む
			fputs($writefp,"合計点：".$total."\n");
//			平均点を書き込む
			fputs($writefp,"平均点：".$total/count($scores)."\n");

//			書き込みファイルクローズ
			fclose($writefp);
			echo "ファイルの書き込みが成功しました。<br>\n";
		?>
    </body>
</html>