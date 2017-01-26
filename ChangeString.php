<?php


    class ChangeString
    {
        function cambio()
        {
            $abecedario = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
                's','t','u','v','w','x','y','z');

            if ($_POST['cadena']){
                $nombre = $_POST['cadena'];
                for($i=0;$i<strlen($nombre);$i++)
                {
                    foreach($abecedario as $posicion)
                    {
                        //strcmp($var1, $var2) !== 0
                        if(strcmp($nombre[$i],$posicion)==0){
                            $nombre[$i]=$abecedario[$i+1];
                        }
                    }

                    echo "<br>".$nombre[$i];
                }

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




