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
                    $consulta="DELETE FROM $tabla WHERE $campo = '$resultado' and estado = 0";
                    parent::conect()->prepare($consulta)->execute(); 
                    return true;
                }else{
                    return false;
                }
                
            }else{
                return true;
            }
            
        }

        public function limpiar($cadena){
            $cadena=trim($cadena); 
            $cadena=stripcslashes($cadena);
            $cadena=str_replace('<script>', '', $cadena);
            $cadena=str_replace('</script>', '', $cadena);
            $cadena=str_replace('<script type', '', $cadena);
            $cadena=str_replace('<script src', '', $cadena);
            $cadena=str_replace('--', '', $cadena);
            $cadena=str_replace('^', '', $cadena);
            $cadena=str_replace('==', '', $cadena);
            $cadena=str_replace('[', '', $cadena);
            $cadena=str_replace(']', '', $cadena);
            $cadena=str_replace('(', '', $cadena);
            $cadena=str_replace(')', '', $cadena);
            $cadena=str_replace('{', '', $cadena);
            $cadena=str_replace('}', '', $cadena);
            $cadena=str_replace('SELECT * FROM', '', $cadena);
            $cadena=str_replace('DELETE FROM', '', $cadena);
            $cadena=str_replace('INSERT INTO', '', $cadena);
    
            return $cadena;
        }

        
    public function encriptar($data){
        $output= false;
        $key = hash('sha256', SECRET_KEY);
        $iv= substr(hash('sha256',SECRET_IV),0,16);
        $output= openssl_encrypt($data, METHOD , $key, 0, $iv);
        $output= base64_encode($output);
        return $output;

    }

    public function desencriptar($data)
    {
       $key = hash('sha256', SECRET_KEY);
       $iv= substr(hash('sha256', SECRET_IV),0,16);
       $output= openssl_decrypt(base64_decode($data), METHOD, $key,0,$iv);
       return $output;
    }

        

    }
    
?>