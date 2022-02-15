<?php
$nome = $_REQUEST['nome'];
$animal = $_REQUEST['animal'];

if (empty($nome)){

  $dados = array(
    "tipo" => 'error'
    "mensagem" -> 'Existem(m) campos obrigatorios(s) nao preenchidos(s) .'
)

}   else {

        switch($animal){
            case '1' : $dados = array(
              "tipo" -> 'rotw.jpg' ,
              "mensagem" => 'Ola  '. $nome. ' ,  sabemos que seu animal preferido é o cachorro '   
            );
       break;
       case '2' : $dados = array(
              "tipo" -> 'gato.jpg' ,
              "mensagem" => 'Ola  '. $nome. ' ,  sabemos que seu animal preferido é o gato '   
            );
        break;
        case '3' : $dados = array(
              "tipo" -> 'pei.jpg' ,
              "mensagem" => 'Ola  '. $nome. ' ,  sabemos que seu animal preferido é o peixe '   
            );
        
        }

} 

echo json_encode($dados);