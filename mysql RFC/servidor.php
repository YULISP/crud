<?php include "mysql.php";?>
<?php
    $id=$_REQUEST["id"];
    $nombre=$_REQUEST["nombre"];
    $edad=$_REQUEST["edad"];
    $sexo=$_REQUEST["sexo"];
    $rfc=$_REQUEST["rfc"];
    $button=$_REQUEST["button"];
    leer($mysql);
    switch($button){
        case "guardar":
            if($nombre and $edad and $sexo and $rfc){
                $sql="insert into persona (nombre, edad, sexo, rfc) values (\"$nombre\", \"$edad\", \"$sexo\", \"$rfc\");";
                if($mysql->query($sql)){
                    close($mysql);
                    echo "<script>alert('dato agregado');</script>";// mensaje de información
                }else
                    echo "<script>alert('dato no agregado');</script>";// mensaje de información
                echo "<script>window.location.href='index.php';</script>";
            }
        break;
        case "eliminar":
            if($id){
                $sql="delete from persona where id=\"$id\";";
                if($mysql->query($sql)){
                    close($mysql);
                    echo "<script>alert('dato eliminado');</script>";// mensaje de información
                }else
                    echo "<script>alert('dato no eliminado');</script>";// mensaje de información
                echo "<script>window.location.href='index.php';</script>";
            }
        break;
        case "modificar":
            if($id and $nombre and $edad and $sexo and $rfc){
                $sql="update persona set nombre=\"$nombre\", edad=\"$edad\", sexo=\"$sexo\", rfc=\"$rfc\" where id=$id;";
                if($mysql->query($sql)){
                    close($mysql);
                    echo "<script>alert('dato modificado');</script>";// mensaje de información
                }else
                    echo "<script>alert('dato no modificado');</script>";// mensaje de información
                echo "<script>window.location.href='index.php';</script>";
            }
        break;
    }
?>
<?php
    function leer($mysql){
        $sql="select * from persona;";
        if($datos=$mysql->query($sql)){
            echo "<script>";
            echo "let tbody=document.getElementById('tbody');";
            while($get=$datos->fetch_assoc()){
                echo "tbody.innerHTML+=`<tr>
                <td><input type=\"text\" value=\"$get[nombre]\" class=\"camptext\" id=\"nombre$get[id]\"></td>
                <td><input type=\"text\" value=\"$get[edad]\" class=\"camptext\" id=\"edad$get[id]\"></td>
                <td><input type=\"text\" value=\"$get[sexo]\" class=\"camptext\" id=\"sexo$get[id]\"></td>
                <td><input type=\"text\" value=\"$get[rfc]\" class=\"camptext\" id=\"rfc$get[id]\"></td>
                <td><button class=\"btn\" onclick=\"eliminar($get[id])\">borrar<img src=\"basurero.png\" alt=\"borrar\"></button></td>
                <td><button class=\"btn\" onclick=\"modificar($get[id])\">editar<img src=\"pencil.png\" alt=\"editar\"></button></td>
                </tr>
                <tr><td colspan=4><hr></td></tr>`;";
            }
            $datos->free();// liberar memoria asociada
            echo "</script>";
        }else{
            echo "no consultado";
        }
    }
?>
<script src="code.js"></script>