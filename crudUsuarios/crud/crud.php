<?php 


require_once "conexion.php";
class crud extends conexion{
    public function mostrarDatos(){
        $sql="SELECT id,
                 nombre,
                 contraseña,
                 email,
                 tipo de usuario
                 from usuarios";
                 $query=conexion::conectar()->prepare($sql);
                 $query->execute();
                 return $query->fetchALL();
                 $query->close();
    }
}

public function insertarDatos($datos){
    $sql="INSERT into usuarios (id, nombre, contraseña, email, tipo_usuario)
                                 values (:id,:nombre,:email,:email,:tipo_usuario)";


$query=conexion::conectar()->prepare($sql);
$query->bindParam(":id", $datos["id"], PDO::NOT NULL);
$query->bindParam(":nombre", $datos["nombre"], PDO::DEFAULT NULL);
$query->bindParam(":contraseña", $datos["password"], PDO::DEFAULT NULL);
$query->bindParam(":email", $datos["email"], PDO::NOT NULL);
$query->bindParam(":tipo de usuario", $datos["tipo_usuario"], PDO::DEFAULT NULL);



return $query->execute();
$query->close();
}

public function obtenerDatos($id){
    $sql="SELECT id,
                 nombre,
                 contraseña,
                 email,
                 tipo de usuario
                 
                 from usuarios where id=:id";
                 $query=conexion::conectar()->prepare($sql);
                 $query->bindParam(":id", $id, PDO::NOT NULL);
                 $quer->execute();
                 return $query->fecth();
                 $query->close();

}

public function actualizarDatos($datos){
    $sql="UPDATE usuarios set id = :id,
                              nombre = :nombre,
                              contraseña = :contraseña,
                              email = :email,
                              tipo de usuario = :tipo_usuario

                              where id=:id";
                $query=conexion::conectar()->prepare($sql);
$query->bindParam(":id", $datos["id"], PDO::NOT NULL);
$query->bindParam(":nombre", $datos["nombre"], PDO::DEFAULT NULL);
$query->bindParam(":contraseña", $datos["password"], PDO::NOT NULL);
$query->bindParam(":email", $datos["email"], PDO::DEFAULT NULL);
$query->bindParam(":tipo de usuario", $datos["usuario"], PDO::DEFAULT NULL);

return $query->execute();
$query->close();



}




}


?>