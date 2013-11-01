<?php
	// メソッド定義ファイルの読み込み
	require_once("fizzbuzz_class.php");
	
	// オブジェクトの生成
	$f_b = new FizzBuzz();
	
	// 1つ目の素数の入力待ち
	input1:
	echo "1つ目の素数を入力して下さい。\n";
	$sosu1 = $f_b->input_type();
	
	if(($sosu1)){
	}
	
	// 2つ目の素数の入力待ち
	input2:
	echo $sosu1."より大きい素数を入力して下さい。\n";
	$sosu2 = $f_b->input_type();
	echo "\n";
	
	/*if(){
		goto input2;
	}*/
	
	// 最小公倍数の計算
	$saisho_kobaisu = $f_b->saisho_kobaisu($sosu1, $sosu2);
	
	// 処理結果の表示
	echo "■処理結果■\n";
	for($i = $sosu1; $i <= $saisho_kobaisu; $i++){
		// 小さい方の素数
		if($i == $sosu1){
			echo "Fizz\n";
		
		// 大きい方の素数
		} elseif($i == $sosu2) {
			echo "Buzz\n";
		
		// 最小公倍数
		} elseif($i == $saisho_kobaisu) {
			echo "FizzBuzz\n";
		} else {
			echo $i."\n";
		}
	}
	
	/*$hantei = is_prime($sosu1);
	if($hantei){
		echo "OK";
	} else {
		echo "NG";
	}*/
?>