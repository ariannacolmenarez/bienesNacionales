<?php

    class builder extends Conexion {

        public static  function duplicados($campo,$tabla,$resultado){
            $sql= "SELECT COUNT(*) FROM $tabla where $campo = '$resultado'";
            $desc=parent::conect()->prepare($sql);
            $desc->execute();
            $cantidad=$desc->fetchColumn();

            if ($cantidad > 0) { 
                $sql= "SELECT * FROM $tabla WHERE $campo = '$resultado'";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                $result=$consulta->fetch(PDO::FETCH_ASSOC);
                
                if ($result["$campo"] = $resultado && $result["estado"]== 0 ) {
                   $estado=1;
                    $consulta="UPDATE $tabla SET estado=? WHERE $campo = '$resultado' and estado = 0";
                    parent::conect()->prepare($consulta)->execute(array(
                    $estado )); 
                    echo "null";
                    return null;
                }else{
                    return false;
                }
                
            }else{
                return true;
            }
            
        }

    }

?>