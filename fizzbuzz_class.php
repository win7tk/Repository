<?php
	//--------------------------------------------------------------------------
	// FizzBuzz�N���X
	//--------------------------------------------------------------------------

	// ���O���
	//namespace fizzbuzz;
	
	class FizzBuzz{
		// �����o�ϐ�
		public $sosu1;
		public $sosu2;
		
		// �ŏ����{���̌v�Z
		public function saisho_kobaisu($sosu1, $sosu2){
			return $sosu1 * $sosu2;
		}
		
		// �f������
		public function validation(){
			if(is_int($sosu)){
				echo "�����ł��B";
			} else {
				"�����ł͂���܂���B";
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