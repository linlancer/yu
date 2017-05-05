<?php
class _mysqli{
	private $uName;
	private $uPsw;
	private $dbName;
	private $result;
	private $link;
	function __construct($db,$user,$psw){
		$this->dbName	=$db;
		$this->uName	=$user;
		$this->uPsw		=$psw;
		$this->connDB();
	}
	function connDB(){
		$this->link=@mysqli_connect('localhost',$this->uName,$this->uPsw,$this->dbName) or die('连接失败'.mysqli_error());
		$sql='SET NAMES utf8';
		mysqli_query($this->link,$sql);
	}
	function query($sql){
		$this->result=mysqli_query($this->link,$sql);
		return $this->result;
	}
	function fetch($num){
		$res=mysqli_fetch_row($this->result);
		return $res;
	}
	function delete($id){
		$sql="delete from users where id={$id}";
	}
	function close(){
		mysqli_close($this->link);
	}
}

$db=new _mysqli('xiaoyu','root','root1234');
$sql="select * from article";
$db->query($sql);





?>