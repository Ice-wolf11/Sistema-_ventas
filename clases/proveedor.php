<?php
    class Proveedor{
        private $idProveedor;
        private $nombre;
		private $ruc;
		private $direccion;
		private $telefono;
		private $correo;
        private $con;
        

        public function conectar_db($cn){
            $this->con =$cn;
        }

        public function sanitize($var) {
			$valor = mysqli_real_escape_string($this->con, $var);
			return $valor;
		}

        public function listaProveedor(){
			$sql = "SELECT * FROM proveedores";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

        public function consulta($id){
			$sql = "SELECT * FROM proveedores where idProveedor=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}

        public function agrega_proveedor($nom,$ruc,$dir,$tel,$correo){
			$sql = "insert into proveedores(nombre,RUC,Direccion,Telefono,Correo) values ('$nom','$ruc','$dir','$tel','$correo')";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	

        public function modifica_proveedor($id,$nom,$ruc,$dir,$tel,$correo){
			$sql = "UPDATE proveedores SET
        				nombre = '$nom',
						RUC = '$ruc',
						Direccion = '$dir',
						Telefono = '$tel',
						Correo = '$correo' 
        				WHERE idProveedor = '$id'";
						
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	

        public function borrar($id){
			$sql = "DELETE FROM proveedores WHERE idProveedor=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


    }
?>