<?php 
    function valNotas ($nota1, $nota2, $nota3){
        $msg = "";
        if ($nota1 < 0 || $nota1 > 20 || $nota1 == "") {
            $msg .= "<li>1ª nota inválida.</li>";
        }
        if ($nota2 < 0 || $nota2 > 20 || $nota2 == "") {
            $msg .= "<li>2ª nota inválida.</li>";
        }
        if ($nota3 < 0 || $nota3 > 20 || $nota3 == "") {
            $msg .= "<li>3ª nota inválida.</li>";
        }
        return $msg;
    }
?>
