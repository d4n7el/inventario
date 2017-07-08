<?php 
	class Producto{
		private $bd;
		private $retorno;

		public function __construct(){
			require_once($_SERVER['DOCUMENT_ROOT'].'/inventario/php/conexion.php');
			$this->db = Conexion::conect();
			$this->retorno = Array();
		}
		public function get_producto($id){
			$sql_consult = $this->db->prepare("SELECT productos.id_producto, productos.nombre,productos.codigo,productos.cantidad,productos.unidad_kg,productos.id_categoria,productos.fecha_creacion,productos.valor_por_mayor,categorias.vista_icono,productos.notificacion,productos.valor_compra,categorias.nombre AS cate_nom, productos.valor FROM productos INNER JOIN categorias ON productos.id_categoria = categorias.id where id_producto LIKE '$id' ");
			$sql_consult->execute();
			while($row = $sql_consult->fetch(PDO::FETCH_ASSOC)){
				$this->retorno[] = $row;
			}
			return $this->retorno;
			$this->db = null;
		}
		public function filter_producto($busqueda){
			$sql_consult = $this->db->prepare("SELECT productos.id_producto, productos.nombre,productos.codigo,productos.cantidad,productos.unidad_kg,productos.id_categoria,productos.fecha_creacion,productos.valor_por_mayor,categorias.vista_icono,productos.notificacion,categorias.nombre AS cate_nom, productos.valor FROM productos INNER JOIN categorias ON productos.id_categoria = categorias.id where categorias.nombre  LIKE '%$busqueda%' OR productos.nombre LIKE '%$busqueda%' OR productos.codigo LIKE '%$busqueda%' ");
			$sql_consult->execute();
			while($row = $sql_consult->fetch(PDO::FETCH_ASSOC)){
				$this->retorno[] = $row;
			}
			return $this->retorno;
			$this->db = null;
		}
		public function insert_producto($nombre,$codigo,$cantidad,$unidad,$valor,$categoria,$valor_al_mayor,$notificacion,$valor_compra){
			try {
				$sql_consult = $this->db->prepare('INSERT INTO productos (nombre,codigo,cantidad,unidad_kg,valor,id_categoria,valor_por_mayor,notificacion,valor_compra) VALUES (?,?,?,?,?,?,?,?,?)' );
				$sql_consult->execute(array($nombre,$codigo,$cantidad,$unidad,$valor,$categoria,$valor_al_mayor,$notificacion,$valor_compra));
				return $this->db->lastInsertId();
	            $this->db = null;
			} catch (PDOException $e) {
            	$e->getMessage();
        	}
		}
		public function get_value_form_pay($id){
			try {
				$sql_consult = $this->db->prepare("SELECT id_producto, nombre, valor, valor_por_mayor,valor_compra FROM productos WHERE id_producto = $id " );
				$sql_consult->execute();
				while($row = $sql_consult->fetch(PDO::FETCH_ASSOC)){
					$this->retorno[] = $row;
				}
				return $this->retorno;
				$this->db = null;
			} catch (PDOException $e) {
            	$e->getMessage();
        	}
		}
		public function edit_producto($nombre,$codigo,$cantidad,$unidad,$valor,$id,$categoria,$valor_al_mayor,$notificacion,$valor_compra){
			$sql_consult = $this->db->prepare("UPDATE productos SET nombre = ?, codigo = ?, cantidad = ?,unidad_kg = ?, valor = ?, id_categoria = ?, valor_por_mayor = ?, notificacion = ?, valor_compra = ? WHERE id_producto = ? ");
            if ($sql_consult->execute(array($nombre,$codigo,$cantidad,$unidad,$valor,$categoria,$valor_al_mayor,$notificacion,$valor_compra,$id))) {
            	return 1;
            }else{
            	return 0;
            }
            $this->db = null;
		}
		public function delete_producto($id){
			$sql_consult = $this->db->prepare("DELETE FROM usuario where id = ? ");
			if($sql_consult->execute(array($id))){
				return 1;
			}
		}
	}
?>