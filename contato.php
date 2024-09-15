<?php  
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];  
if ($nome =='') {  echo('por favor informe seu nome cão');
    return;  
}
if ($email==''){  echo('por favor informe seu email cão');
    return;
}
if ($mensagem == '') { echo('por favor escreva uma mensagem cão');
    return;
}
echo('Formulário castrado com sucesso!!');