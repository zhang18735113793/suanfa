<?php
interface iDb 
{
	// 连接数据库使用的方法
	public function connect($dsn,$username,$password);

	// 查询数据库
	public function query($sql,$data);
	// 设置数据的方法
	public function set();
	// 获取数据的方法
	public function get();

}

class Mysql implements iDb
{	
	protected $link;

	public function connect($dsn,$username,$password){

		$this->link = mysqli_connect();
	}

	public function query($sql,,$data){


	}
	public function set(){

	}

	public function get(){
		
	}

}

class Redis implements iDb
{
	protected $db;
	public function connect($dsn,$username,$password){

		$this->db = mysqli_connect();
	}

	public function query($sql,,$data){


	}

	public function set(){

	}

	public function get(){

	}
}


class Db 
{
	protected $db;

	public function __construct(iDb $db){
		$this->db = $db;
	}

	public function get(){
		$this->db -> get();
	}

	public function set(){
		$this->db->set();
	}
}

$mysql = new Mysql;
$db = new Db($mysql);