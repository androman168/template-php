<?php

class Database extends Connection
{
	private object $conection;
	private $strquery;
	private $arrValues;

	function __construct()
	{
		try {
			$this->conection = new Connection();
			$this->conection = $this->conection->connect();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	//Insertar un registro
	public function insert(string $query, array $arrValues)
	{
		try {
			$this->strquery = $query;
			$this->arrVAlues = $arrValues;
			$insert = $this->conection->prepare($this->strquery);
			$resInsert = $insert->execute($this->arrVAlues);
			return $resInsert;
			// if ($resInsert) {
			// 	// $lastInsert = $this->conection->lastInsertId();
			// 	$lastInsert = $this->conection->lastInsertId();
			// } else {
			// 	$lastInsert = 0;
			// }
			// return $lastInsert;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	//Busca un registro
	public function select(string $query)
	{
		try {
			$this->strquery = $query;
			$result = $this->conection->prepare($this->strquery);
			$result->execute();
			// $data = $result->fetch(PDO::FETCH_ASSOC);
			$data = $result->fetch(PDO::FETCH_OBJ);
			return $data;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	//Devuelve todos los registros
	public function select_all(string $query)
	{

		try {
			$this->strquery = $query;
			$result = $this->conection->prepare($this->strquery);
			$result->execute();
			// $data = $result->fetchall(PDO::FETCH_ASSOC);
			$data = $result->fetchall(PDO::FETCH_OBJ);
			return $data;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	//Actualiza registros
	public function update(string $query, array $arrValues)
	{
		try {
			$this->strquery = $query;
			$this->arrVAlues = $arrValues;
			$update = $this->conection->prepare($this->strquery);
			$resExecute = $update->execute($this->arrVAlues);
			return $resExecute;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	//Eliminar un registros
	public function delete(string $query)
	{
		try {
			$this->strquery = $query;
			$result = $this->conection->prepare($this->strquery);
			$del = $result->execute();
			return $del;
		} catch (PDOException $e) {
			//throw $th;
		}
	}

	public function length($query)
	{
		try {
			$this->strquery = $query;
			$result = $this->conection->prepare($this->strquery);
			$result->execute();
			$rows = $result->fetchAll(PDO::FETCH_NUM);
			$result->closeCursor();
			return count($rows);
		} catch (Exception $e) {
			return null;
		}
	}

	public function get_columns_names($query)
	{
		try {

			$this->strquery = $query;
			$result = $this->conection->prepare($this->strquery);
			$result->execute();
			$columns = $result->columnCount();
			$data = array();

			for ($i = 0; $i < $columns; $i++) {
				$column_info = $result->getColumnMeta($i);
				$data[] = $column_info["name"];
			}

			$result->closeCursor();
			return $data;
		} catch (Exception $e) {
			return null;
		}
	}

	public function get_rows($query,$start, $range, $order_by, $sort)
	{
		try
		{
			$query = $query
				 . " ORDER BY " 
				 . addslashes($order_by) . " " 
				 . addslashes($sort)
				 . " LIMIT :START, :RANGE";
				 
			$query = $this->conection->prepare($query);
			$query->bindParam(":START", $start, PDO::PARAM_INT);
			$query->bindParam(":RANGE", $range, PDO::PARAM_INT);				 
			$query->execute();
			$rows = $query->fetchAll(PDO::FETCH_NUM);
			$query->closeCursor();		
			return $rows;
		}
		catch (Exception $ex)
		{
			return null;
		}
	}
}
