<?php

class Ventas {
        
		private $idVenta;
		private $fecha;
        private $idCliente;
        private $idEmpleado;
        private $idProducto;
		
		public function conectar_db($cn){
			$this->con = $cn;

		}

		public function sanitize($var) {
			$valor = mysqli_real_escape_string($this->con, $var);
			return $valor;
		}
		
		public function listaventa(){
			$sql = "SELECT * FROM ventas";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

        public function consulta($id){
			$sql = "SELECT * FROM ventas where idVenta=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}
		
		public function agrega_venta($fecha,$clie,$emp,$prod){
			$sql = "insert into ventas(fecha,idCliente,idEmpleado,idProducto) 
            values ('$fecha','$clie','$emp','$prod')";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	
		/*
        public function numero_actual($id){
            $sql = "SELECT NroDocumento FROM documentos where idDocumento=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
        }*/
	}		

?>	