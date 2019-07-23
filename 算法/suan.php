<?php
    function ji($money){
        for($i=0;$i<=floor($money/5);$i++){
            for($o=0;$o<=floor($money/3);$o++){
                for($d=0;$d<=$money;$d++){
                    if($i*5+$o*3+$d == $money){
                        echo "公鸡".$i.'只,母鸡'.$o.'只,小鸡'.$d."只<br />";
                    }
                }
            }
        }
    }
    ji(100);