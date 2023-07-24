<?php
    class Usuario{
        private $idEmpleado;
        private $nombre;
		private $telefono;
		private $user;
		private $password;
		
        

        public function conectar_db($cn){
            $this->con =$cn;
        }

        public function sanitize($var) {
			$valor = mysqli_real_escape_string($this->con, $var);
			return $valor;
		}

        public function lista_usuario(){
			$sql = "SELECT * FROM empleados";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

        public function consulta($id){
			$sql = "SELECT * FROM empleados where idEmpleado=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}

        public function agrega_usuario($nom,$tel,$user,$pass){
			$sql = "insert into empleados(nombre,telefono,Usuario,Contraseña) values ('$nom','$tel','$user','$pass')";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	

        public function modifica_usuario($id,$nom,$tel,$user,$pass){
			$sql = "UPDATE empleados SET
        				nombre = '$nom',
						telefono = '$tel',
						Usuario = '$user',
						Contraseña = '$pass'
        				WHERE idEmpleado = '$id'";
						
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	

        public function borrar($id){
			$sql = "DELETE FROM empleados WHERE idEmpleado=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}


    }
?>