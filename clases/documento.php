<?php

class Documento {
        
		private $idDocumento;
		private $nombre;
		
		public function conectar_db($cn){
			$this->con = $cn;

		}

		public function sanitize($var) {
			$valor = mysqli_real_escape_string($this->con, $var);
			return $valor;
		}
		
		public function listadocu(){
			$sql = "SELECT * FROM documentos";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

        public function consulta($id){
			$sql = "SELECT * FROM documentos where idDocumento=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}
		
		public function agrega_documento($id,$nomdocu,$numdocu){
			$sql = "insert into documentos(idDocumento,nombre,NroDocumento) 
            values ($id,'$nomdocu','$numdocu')";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	
		
        public function numero_actual($id){
            $sql = "SELECT NroDocumento FROM documentos where idDocumento=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
        }


	
	}
	
	

?>	