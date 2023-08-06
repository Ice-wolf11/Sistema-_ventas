<?php

class detalleVentas {
        
		private $idDetalleVenta;
		private $idVenta;
        private $idProducto;
        private $cantidad;
        private $precioTotal;
		
		public function conectar_db($cn){
			$this->con = $cn;

		}

		public function sanitize($var) {
			$valor = mysqli_real_escape_string($this->con, $var);
			return $valor;
		}
		
		public function listadetalle(){
			$sql = "SELECT * FROM detalleventas";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

        public function consulta($id){
			$sql = "SELECT * FROM detalleventas where idDetalleVenta=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}
		
		public function agrega_detalle($idDV,$idVenta,$idProducto,$cantidad,$precioTotal){
			$sql = "insert into detalleventas(idDetalleVenta,idVenta,IdProducto,cantidad,precioTotal) 
            values ($idDV,'$idVenta','$idProducto','$cantidad','$precioTotal')";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	
		
       /* public function numero_actual($id){
            $sql = "SELECT NroDocumento FROM documentos where idDocumento=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
        }*/


	
	}
	
	

?>	