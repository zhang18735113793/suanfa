<?php
// ArrayAccess, Countable,
// Iterator实现将对象foreach
// ArrayAccess 实现数组式访问
// Countable计算对象的长度
class Student  implements Iterator, ArrayAccess,Countable
{
	private $numbers;
	private $position;

	public function __construct(){
		$this->numbers = range(0,10);
		shuffle($this->numbers);
		$this->position = 0;
	}


	/* ArrayAccess的接口，将对象实现数组式的访问*/
	// 检查一个偏移位置是否存在
	public function offsetExists($offset)
	{
		return isset($this->numbers[$offset]);
	}
	// 获取一个偏移位置的值
	public function offsetGet($offset)
	{
		return $this->numbers[$offset] ?? null;
	}
	// 设置一个偏移位置的值
	public function offsetSet( $offset, $value) 
	{
		if (is_null($offset)) {
            $this->numbers[] = $value;
        } else {
            $this->numbers[$offset] = $value;
        }
	}
	// 复位一个偏移位置的值
	public function offsetUnset($offset)
	{
		unset($this->numbers[$offset]);
	}

	// // Coutable接口实现
	public function count() : int
	{
		return count($this->numbers);
	}
	// Iterator接口的实现
	// 返回当前元素
	// 2. 获取当前position单元的值
	public function current()
	{
		return $this->numbers[$this->position];
	}
	// 返回当前元素的键
	public function key()
	{
		return $this->position;
	}
	// 向前移动到下一个元素
	public function next()
	{
		++$this->position;
	}
	// 1. 重置position的位置 返回到迭代器的第一个元素
	public function rewind()
	{
		$this->position = 0;
	}
	// 检查当前位置是否有效
	public function valid()
	{
		return isset($this->numbers[$this->position]);
	}

	public function toArray(){
		return $this->numbers;
	}
}

$stu = new Student();


$stu[7] = 35;

foreach($stu as $key=>$v){
	echo "<br>",$key.'='.$v."<br>";
}

echo count($stu);

$res = $stu->toArray();
var_dump($res);
