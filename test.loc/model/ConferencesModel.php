<?php
	class ConferencesModel extends Model{
		public function getTitles(){
			$data = array();
			$query = $this->db->query("SELECT id,title,data FROM test.conferences");
			/*while($row = $query->fetch(PDO::FETCH_OBJ)){
				$data[$row->id] = $row->title;
			}*/
			//return $data;
			$row = $query->fetchAll(PDO::FETCH_ASSOC);
			//print_r(count($row));
			for($i = 0;$i < count($row);$i++){
				$row[$i]["data"] = str_replace('T',' ',$row[$i]["data"]);
			}
			return $row;
		}
	}
?>