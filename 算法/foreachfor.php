<?php
interface animal
{
	public function run();

	public function eat();

	public function drink();
}

class Human implements animal {

	protected $name;
	protected $sex;

	public function run(){

		echo "两条腿跑";		
	}

	public function eat(){
		echo "用手拿食物，放到嘴里";
	}

	public function drink(){
		echo "喝水";
	}
}

$obj = new Human;
$obj->run();