<?php
	// 名前空間
	//namespace fizzbuzz;

	class FizzBuzz{
		// 入力受付
		public function input_type(){
			return trim(fgets(STDIN));
		}
		
		// 最小公倍数の計算
		public function saisho_kobaisu($sosu1, $sosu2){
			return $sosu1 * $sosu2;
		}
		
		public function validation($sosu){
		    // 素数判定
		    if($sosu < 2) {
		        return false;
		    } else if ($sosu == 2) {
		        return true;
		    }

		    if($sosu % 2 == 0) {
		        return false;
		    }

		    for ($i = 3; $i * $i <= $sosu; $i += 2) {
		        if ($sosu % $i == 0) {
		            return false;
		        }
		    }
		    return true;
		}
	}
?>