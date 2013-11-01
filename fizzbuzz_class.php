<?php
	// ���O���
	//namespace fizzbuzz;

	class FizzBuzz{
		// ���͎�t
		public function input_type(){
			return trim(fgets(STDIN));
		}
		
		// �ŏ����{���̌v�Z
		public function saisho_kobaisu($sosu1, $sosu2){
			return $sosu1 * $sosu2;
		}
		
		public function validation($sosu){
		    // �f������
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