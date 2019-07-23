<?php

// $A 原始盘子放的柱子
// $B 目标柱子
// $C 借助的柱子
function rec($n,$A,$B,$C){

	if($n==1){
		move($n,$A,$B);
	}else{
		rec($n-1,$A,$C,$B);
		move($n,$A,$B);
		rec($n-1,$C,$B,$A);
	}
	
}

function move($x,$A,$B){

	echo "<br>","将",$x,"从",$A,"移动到",$B,"<br>";

}

rec(3,"A","B","C");