<?php

// 写一个函数 遍历某一个文件夹下所有的文件，输出路径文件名
// [
// 	"文件名"=>"文件名的路径"
// ]


// function fileIterator($dir){
// 	$fileArr = [];
// 	if(!is_dir($dir)){
// 		return false;
// 	}
// 	if(false ===($dh = opendir($dir))){
// 		return false;
// 	}
// 	while(($file = readdir($dh))!=false){
// 		if($file=='.' || $file=='..') continue;
// 		$filename = $dir . DIRECTORY_SEPARATOR .$file;
// 		if(is_dir($filename)){
// 			$files = fileIterator($filename);
// 			$fileArr[$file] = $files;
// 		}else{
// 			$fileArr[$file] = $filename;
// 		}
// 	}
// 	return $fileArr;
// }


function fileIterator($dir){
	$fileArr = [];
 	$files = glob($dir."/*");
 	foreach($files as $filename){
 		if(is_dir($filename)){
 			$fileCur = fileIterator($filename);
 			$fileArr[] = $fileCur;
 		}else{
 			$fileArr[] = $filename;
 		}
 	}
 	return $fileArr;
}

// function fileIterator($dir){
// 	//得到迭代器
// 	$arr = [];
// 	$iterator = new DirectoryIterator($dir);
// 	foreach ($iterator as $fileinfo) {
// 		$filename = $fileinfo->getFilename();
// 		if($filename == '.' || $filename == '..') continue;
// 		if($fileinfo->isDir()){
// 			// echo $fileinfo->getFilename();
// 			$arr[] = fileIterator($dir.DIRECTORY_SEPARATOR.$fileinfo->getFilename());
// 		}else{
// 			$arr[] = $fileinfo->getFilename();
// 		}
// 	}
// 	return $arr;
// }


$dir = dirname(__DIR__);
$files = fileIterator($dir);
var_dump($files);