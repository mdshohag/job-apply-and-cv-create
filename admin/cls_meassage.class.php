<?php
	class cls_meassage{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function all_show_meassge_notifaction(){
			$result = $this->con()->query("SELECT * FROM tbl_apply");
			return $result;
		}
		public function show_cv($id){
			$result = $this->con()->query("SELECT * FROM tbl_apply where serial='$id'");
			return $result;
		}
		
		
	}
?>