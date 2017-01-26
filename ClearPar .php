<?php

class ClearPar
{

    function limpiar()
    {


        if ($_POST['cadena']){
            $nombre = $_POST['cadena'];
            $new_cadena = '';
            for($i=0;$i<strlen($nombre);$i++)
            {
                if (strcmp($nombre[$i],')')==0){
                    $new_cadena = $nombre[$i];
                }


            }
            echo $new_cadena;
        }



    }
}


?>
<html>
<form name="formulario" action="ChangeString.php" method="POST">
    Introduce tu cadena a aconvertir: <input type="text" name="cadena">

    <input type="submit" value="Enviar">
</form>
</html>




