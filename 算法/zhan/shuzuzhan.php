<?php

// 后进先出
// 使用数组来进行数据的存储

class Stack
{
	private $data=[];

	private $top = -1;

	// 添加元素
	public function push($value){
		if(is_array($value)){
			foreach($value as $v){
				$this->top++;
				$this->data[$this->top] = $v;
			}
		}else{
			$this->top++;
			$this->data[$this->top] = $value;
		}
		
	}

	// 移出元素
	public function pop(){
		$v = $this->data[$this->top];
		$this->top --;
		return $v;
	}

	// 获取当前栈顶元素
	public function top(){
		return $this->data[$this->top];
	}

	// 清空栈
	public function empty(){
		$this->top = -1;
	}

	// 得到栈中元素的个数
	public function num(){
		return $this->top + 1; 
	}

	// 打印出栈中的所有元素
	public function output(){
		$p = $this->top;
		while($p > -1){
			echo $this->data[$p];
			$p--;
		}
	}
}

$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push([4,6,8,3]);

$stack->output();

echo $stack->pop();
echo $stack->top();