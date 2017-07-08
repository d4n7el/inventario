<?php 
	class Conexion{
		public static function conect(){
			
			try {
				//$con = new PDO('mysql:host=localhost; dbname=id1713708_inventario','id1713708_root','felipe1526347890');
				$con = new PDO('mysql:host=localhost; dbname=inventario','root','root');
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$con->exec('SET CHARACTER SET UTF8');

			} catch (Exception $e) {
				die("Error".$e->getMessage());
				echo "Linea del error". $e->getLine();
				echo "string";
			}
				return $con;
		}
	}
 ?>