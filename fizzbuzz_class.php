<?php
	//--------------------------------------------------------------------------
	// FizzBuzzクラス
	//--------------------------------------------------------------------------

	// 名前空間
	//namespace fizzbuzz;
	
	class FizzBuzz{
		// メンバ変数
		public $sosu1;
		public $sosu2;
		
		// 最小公倍数の計算
		public function saisho_kobaisu($sosu1, $sosu2){
			return $sosu1 * $sosu2;
		}
		
		// 素数判定
		public function validation(){
			if(is_int($this->sosu1) == true && is_int($this->sosu2) == true){
				echo "整数です。";
			} else {
				echo "整数以外は入力不可能です。";
			}
exit;

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