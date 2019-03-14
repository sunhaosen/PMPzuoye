<?php

class DB
{
	private $DB;
	//构造方法
	public function __construct()
	{
		$this->db=new PDO('mysql:host=127.0.0.1;dbname=1608b;charset=utf8','root','root');

	}
	//增加
	public function add($data)
	{
		// $sql = 'insert into new('.implode(',',array_keys($data)).') value("'.implode('","',$data).'")';
		$sql='insert into new('.implode(',',array_keys($data)).') value("'.implode('","',$data).'")';
		$res = $this->db->exec($sql);
		return $res;
	}
	//查询
	public function select()
	{
		$sql = "select * from new";
		$res = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
	//删除
	public function del($id)
	{
		$sql = "delete from new where id = '$id'";
		$res = $this->db->exec($sql);
		return $res;
	}
	//修改
	public function update($id)
	{
		$sql = "update new set where id = '$id' ";
		$res = $this->db->exec($sql);
		return $res;
	}

}

?>