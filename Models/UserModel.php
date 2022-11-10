<?php

class UserModel extends Database
{
    protected $user_code;

    public function __construct()
	{
		parent::__construct();
	}

    // Todos los productos
	public function findUsers(string $user_code)
	{
		$sql = "SELECT * FROM user where user_code = '$user_code'";       

		$request = $this->select_all($sql);
        
		return $request;
	}

}