<?php
	class DeleteModel extends Model{
		public function delete($id){
			$query = $this->db->prepare("DELETE FROM test.conferences WHERE id = :id");
			$query->execute(["id" => $id]);
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			header("Location: /conferences");
		}
}
