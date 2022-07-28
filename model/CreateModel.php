<?php
	class CreateModel extends Model{
		public function saveNew($arr){
			$query = $this->db->prepare("INSERT INTO test.conferences(title, data, latitude, longitude, country) VALUES (:title, :data, :latitude, :longitude, :country);");
			$query->execute($arr);
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}


