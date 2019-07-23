<?php
// [2,4,3,6,3,2,5,5]

$arr = [2,4,3,6,3,2,5,5];

function FindNumsAppearOnce($arr){
	$res = $arr[0];
	for($i=1;$i<count($arr);$i++){
		$res ^=$arr[$i];
	}
	$l = [];
	$r = [];
	foreach($arr as $v){
		if( ($v & $res) == $res){
			$l[] = $v;
		}else{
			$r[] = $v;
		}
	}

	var_dump($l,$r);
	// 进行异或运算
	$num1 = 0;
	$num2 = 0;
	for($i=0;$i<count($l);$i++){
		$num1 ^= $l[$i];
	}
	for($i=0;$i<count($r);$i++){
		$num2 ^= $r[$i];
	}

	return $num1.",".$num2;
	
}

echo FindNumsAppearOnce($arr);