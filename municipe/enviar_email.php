<?php

$mensagem = $_POST["mensagem"];
$assunto = $_POST["assunto"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$destino ="ademilson.leal@ba.estudante.senai.br";

$mensagemFormatada = nl2br(htmlspecialchars($mensagem));
$sucesso =mail($destino, $assunto, $mensagemFormatada);

if($sucesso){
    echo 'E-mail enviado com sucesso';

}else{
    echo 'Erro ao enviar E-mail';
}

?>