<?php

// 后进先出
// 使用链表来进行数据的存储
class Node
{	
	public $prev;
	public $value;
	public $next;
	public function __construct($value,$prev=null,$next=null){
		$this->value = $value;
		$this->next = $next;
		$this->prev = $prev;
	}
}

class DbLinkedList
{
	protected $head;
	protected $tail;

	public function __construct($value=""){
		$node = new Node($value);
		$this->head = $node ? $node : null;
		$this->tail = $node ? $node : null;
	}

	public function addNode($value){
		$node = new Node($value);
		$this->tail->next = $node;
		$node->prev = $this->tail;
		$this->tail = $node;
	}

	public function delNode(){
		$node = $this->tail;
		$this->tail = $node->prev;
		return $node;
	}

	public function tail(){
		return $this->tail;
	}

	public function output(){
		$p = $this->tail;
		// var_dump($p);
		while($p){
			echo $p->value;
			$p=$p->prev;
		}
	}
}
class Stack
{
	private $data;

	private $top = -1;

	public function __construct(){
		$this->data = new DbLinkedList();
	}
	// 添加元素
	public function push($value){
		$this->top++;
		$this->data->addNode($value);
	}

	// 移出元素
	public function pop(){
		$v = $this->data->delNode();
		$this->top --;
		return $v->value;
	}

	// 获取当前栈顶元素
	public function top(){
		return $this->data->tail()->value;
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
		
		$this->data->output();
	}
}

$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(4);

$stack->output();

// echo $stack->pop();
// echo $stack->top();
