
<?php

$destino1 = "contato@madgic.com.br";
$destino2 = "betho@madgic.com.br";
$destino3 = "ranyeli@madgic.com.br";
$nome = $_POST['nome'];
$email = $_POST['email'];
$texto = $_POST['texto'];
$headers = "Enviado por : " . $nome . "\n";
$mensagem = "Enviado por : " . $nome . "\n"."Contato: ".$email."\n".$texto;

mail($destino1, $headers , $mensagem);
mail($destino2, $headers , $mensagem);
mail($destino3, $headers , $mensagem);

?>