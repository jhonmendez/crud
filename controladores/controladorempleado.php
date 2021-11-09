<?php
    include '../componentes/ConexionMySQLPHP.php';

    class ControladorEmpleado {

        private $tabla ="empleados";
        private $conexion;

        public function __construct(){
            $conexionMySQL = new ConexionMySQLPHP("localhost", "manpower", "root", "");
            $this->conexion= $conexionMySQL->getConexion();
        }

        public function guardar($datos){
            
            $sql = "Select 1 From $this->tabla Where identificador=?";

            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(1, $datos->identificador);
            $sentencia->execute();

            $numeroRegistros=$sentencia->rowCount();

            if($numeroRegistros > 0){
				
                $sql="Update $this->tabla  Set nombres=?, apellidos=?, salario=? Where identificador=?";

                $stmt = $this->conexion -> prepare($sql);
                $stmt -> bindParam(1,$datos->nombres );
                $stmt -> bindParam(2,$datos->apellidos );
                $stmt -> bindParam(3,$datos->salario );
                $stmt -> bindParam(4,$datos->identificador );

            }else{

                $sql="Insert Into $this->tabla Values(?,?,?,?)";
                $stmt = $this->conexion -> prepare($sql);
                $stmt -> bindParam(1,$datos->identificador );
                $stmt -> bindParam(2,$datos->nombres );
                $stmt -> bindParam(3,$datos->apellidos );
                $stmt -> bindParam(4,$datos->salario );

            }

            if ($stmt ->execute()) {

                return true;

            } else {

                echo var_dump($stmt->errorInfo());
                return false;    
            }          

            

        }


        public function eliminar($datos) {

            $sql="Delete from $this->tabla Where identificador=? ";
            $stmt = $this->conexion -> prepare($sql);
            $stmt -> bindParam(1,$datos->identificador );
            return $stmt ->execute();

        }


        public function listar() {

            $sql="Select * from $this->tabla ";
            $stmt = $this->conexion -> prepare($sql);
            $stmt ->execute(); 
            return $stmt;

        }

    }    
?>