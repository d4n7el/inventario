<?php 
	class Categorias{
		private $bd;
		private $retorno;

		public function __construct(){
			require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/conexion.php');
			$this->db = Conexion::conect();
			$this->retorno = Array();
		}
		public function get_categoria($id){
			$sql_consult = $this->db->prepare("SELECT * FROM categorias where id LIKE '$id' ");
			$sql_consult->execute();
			while($row = $sql_consult->fetch(PDO::FETCH_ASSOC)){
				$this->retorno[] = $row;
			}
			return $this->retorno;
			$this->db = null;
		}
		public function insert_categoria($nombre,$icono){
			try {
				$sql_consult = $this->db->prepare('INSERT INTO categorias (nombre,vista_icono) VALUES (?,?)' );
				$sql_consult->execute(array($nombre,$icono));
				return $this->db->lastInsertId();
	            $this->db = null;
			} catch (PDOException $e) {
            	$e->getMessage();
        	}
		}
		public function edit_categoria($nombre,$id,$icono){
			$sql_consult = $this->db->prepare("UPDATE categorias SET nombre = ?, vista_icono = ? WHERE id = ? ");
            if ($sql_consult->execute(array($nombre,$icono,$id))) {
            	return 1;
            }else{
            	return 0;
            }
            $this->db = null;
		}
		public function delete_categoria($id){
			$sql_consult = $this->db->prepare("DELETE FROM usuario where id = ? ");
			if($sql_consult->execute(array($id))){
				return 1;
			}
		}
	}
?>