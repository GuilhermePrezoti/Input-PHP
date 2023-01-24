<?php
    function Fabonnaci(){
        $n = $_POST['tSequencia'];
        $ultimo = 1;
        $penultimo = 0;
        $res = 0;
        $msg = $penultimo. " ".$ultimo;
        
        for($i = 0; $i <= $n; $i++){
            $res = $penultimo + $ultimo;
            $msg .= "".$res;
            $penultimo = $ultimo;
            $ultimo = $res;
        }
        return $msg;
    }
    echo Fabonnaci();
?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>