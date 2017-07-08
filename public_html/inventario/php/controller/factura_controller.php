<?php 
	class Facturas{
		private $bd;
		private $retorno;

		public function __construct(){
			require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/conexion.php');
			$this->db = Conexion::conect();
			$this->retorno = Array();
		}

		public function insert_factura($valor_total,$cantidad){
			try {
				$sql_consult = $this->db->prepare('INSERT INTO facturas (valor_total,cantidad_productos) VALUES (?,?)' );
				$sql_consult->execute(array($valor_total,$cantidad));
				return $this->db->lastInsertId();
	            $this->db = null;
			} catch (PDOException $e) {
            	$e->getMessage();
        	}
		}
		public function get_factura($fecha_inicial,$fecha_final){
			$sql_consult = $this->db->prepare("SELECT * FROM facturas WHERE fecha_creacion >= '$fecha_inicial' AND fecha_creacion <= '$fecha_final'");
			$sql_consult->execute();
			while($row = $sql_consult->fetch(PDO::FETCH_ASSOC)){
				$this->retorno[] = $row;
			}
			return $this->retorno;
			$this->db = null;
		}

	}
?>