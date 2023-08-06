<?php
    class Usuario{
        private $idEmpleado;
        private $nombre;
		private $telefono;
		private $user;
		private $password;
		private $con;
        

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
			
			$usu_pass_hash = password_hash($pass, PASSWORD_DEFAULT);
			
			$sql = "insert into empleados(nombre,telefono,Usuario,Contraseña) values ('$nom','$tel','$user','$usu_pass_hash')";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	

        public function modifica_usuario($id,$nom,$tel,$user,$pass){
			
			$usu_pass_hash = password_hash($pass, PASSWORD_DEFAULT);

			$sql = "UPDATE empleados SET
        				nombre = '$nom',
						telefono = '$tel',
						Usuario = '$user',
						Contraseña = '$usu_pass_hash'
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

		public function lee_datos($usu){
			$sql = "SELECT * FROM empleados where Usuario='$usu'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}

		public function NombreUsuario($id){
			$sql = "SELECT nombre FROM empleados WHERE idEmpleado=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}

    }
?>