<?php
	// ���\�b�h��`�t�@�C���̓ǂݍ���
	require_once("fizzbuzz_class.php");
	
	// �I�u�W�F�N�g�̐���
	$f_b = new FizzBuzz();
	
	// 
	switch($argc){
		case 1:
			// �������^�����Ă��Ȃ���
			echo "2�̑f���������Ƃ��ē��͂��ĉ������B";
			break;
		case 2:
			// ����������Ȃ��ꍇ
			echo "����������܂���B";
			break;
		default:
			// ���͂��ꂽ��������
			$f_b->sosu1 = $argv[1];
			$f_b->sosu2 = $argv[2];
			
			
	}

	
	// 1�ڂ̑f���̓��͑҂�
	input1:
	echo "1�ڂ̑f������͂��ĉ������B\n";
	$f_b->sosu1 = trim(fgets(STDIN));
	
	// 2�ڂ̑f���̓��͑҂�
	input2:
	echo $f_b->sosu1."���傫���f������͂��ĉ������B\n";
	$f_b->sosu2 = trim(fgets(STDIN));
	echo "\n";
	
	// �ŏ����{���̌v�Z
	$saisho_kobaisu = $f_b->saisho_kobaisu($sosu1, $sosu2);
	
	// �������ʂ̕\��
	echo "���������ʁ�\n";
	for($i = $sosu1; $i <= $saisho_kobaisu; $i++){
		if($i != $sosu1 && $i != sosu2 && $i != saisho_kobaisu){
			// 3�̔{��
			if($i % 3 === 0){
				echo "Fizz\n";
				$flg = true;
			}
			
			// 5�̔{��
			if($i % 5 === 0){
				echo "Buzz\n";
				$flg = true;
			}
			
			if($i % 3 === 0 && $i %5 === 0){
				echo "FizzBuzz\n";
				$flg = true;
			}
		}
		
		// ���������̑f��
		if($i == $sosu1){
			echo "Fizz\n";
			$flg = true;
		}
		
		// �傫�����̑f��
		if($i == $sosu2) {
			echo "Buzz\n";
			$flg = true;
		}
		
		// �ŏ����{��
		if($i == $saisho_kobaisu) {
			echo "FizzBuzz\n";
			$flg = true;
		}
		
		// ����ȊO
		if(!$flg){
			echo $i."\n";
		}
	}
?>