<?php

function binaryRecursiveSearch(&$arr,$value,$low,$high){
	// 终止条件
	if($low > $high) return -1;

	$mid = $low + intval(($high - $low)/2);
	if($value < $arr[$mid] ){
		return binaryRecursiveSearch($arr,$value,$low,$mid-1);
	}elseif($value > $arr[$mid]){
		return binaryRecursiveSearch($arr,$value,$mid+1,$high);
	}else{
		return $mid;
	}
}

$arr = range(1,100);
var_dump(binaryRecursiveSearch($arr,88,0,99));
