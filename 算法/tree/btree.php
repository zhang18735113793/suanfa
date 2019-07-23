<?php

class BTree
{

	private $data;

	public function __construct($data){
		$this->data = $data;
	}

	public function left($node){
		return 2*$node+1;
	}

	public function right($node){
		return 2*$node + 2;
	}

	public function preOrder($root = 0){
		if(!isset($this->data[$root])){
			return;
		}
		echo "<br>",$this->data[$root];
		$this->preOrder($this->left($root));
		$this->preOrder($this->right($root));
	}

	
	public function inOrder($root = 0){
		if(!isset($this->data[$root])){
			return;
		}
		
		$this->inOrder($this->left($root));
		echo "<br>",$this->data[$root];
		$this->inOrder($this->right($root));
	}

	public function postOrder($root = 0){
		if(!isset($this->data[$root])){
			return;
		}
		
		$this->postOrder($this->left($root));
		$this->postOrder($this->right($root));
		echo "<br>",$this->data[$root];
	}

}

$bt = new BTree(range(1,20));

$bt->preOrder2();

// $bt->inOrder();

// $bt->postOrder();

