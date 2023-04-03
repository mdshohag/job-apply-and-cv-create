<?php
	class cls_dbconfig{
		public function connection(){
			$db = new mysqli("localhost", "root", "", "jobapply");
			return $db;
		}
	}
?>