<?php 
	class Ventas{
		private $bd;
		private $retorno;

		public function __construct(){
			require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/conexion.php');
			$this->db = Conexion::conect();
			$this->retorno = Array();
		}

		public function insert_venta($val){
			try {
				$sql_consult = $this->db->prepare("INSERT INTO ventas (id_factura,id_producto,valor_venta,cantidad,valor_unitario) VALUES $val ");
				($sql_consult->execute()) ? $id =  1 : $id = 0;
				return $id;
	            $this->db = null;
			} catch (PDOException $e) {
            	echo $e->getMessage();
        	}
		}
		public function get_venta($id_factura){
			$sql_consult = $this->db->prepare("SELECT facturas.id,facturas.cantidad_productos, facturas.fecha_creacion,facturas.valor_total, ventas.cantidad, ventas.valor_venta, productos.nombre FROM facturas INNER JOIN ventas ON facturas.id = ventas.id_factura INNER JOIN productos ON ventas.id_producto = productos.id_producto WHERE facturas.id LIKE ? ");
			$sql_consult->execute(array($id_factura));
			while($row = $sql_consult->fetch(PDO::FETCH_ASSOC)){
				$this->retorno[] = $row;
			}
			return $this->retorno;
			$this->db = null;
		}
	}
?>