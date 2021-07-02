<?php

	class Db
	{
		private $host = "localhost";
		private $user 	= "root";
		private $pass 	= "";
		private $dbname = "blogtest";
		public  $con;

		// db conn awld haj
		public function __construct()
		{
			$this->con = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(mysqli_connect_error()) {
				print_r("error asat f db: " . mysqli_connect_error());
			} else{
				return $this->con;
			}
		}

	}
