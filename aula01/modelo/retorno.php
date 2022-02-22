<?php
$NOME = $_REQUEST['nome'];
$ANIMAL = $_REQUEST['animal'];

if (empty($NOME)){

  $DADOS = array(
    "tipo" => 'error'
    "mensagem" -> 'Existem(m) campos obrigatorios(s) nao preenchidos(s) .'
)

}   else {

        switch($ANIMAL){
            case '1' : $DADOS = array(
              "tipo" -> 'rotw.jpg' ,
              "mensagem" => 'Ola  '. $NOME. ' ,  sabemos que seu animal preferido é o cachorro '   
            );
       break;
       case '2' : $DADOS = array(
              "tipo" -> 'gato.jpg' ,
              "mensagem" => 'Ola  '. $NOME. ' ,  sabemos que seu animal preferido é o gato '   
            );
        break;
        case '3' : $DADOS = array(
              "tipo" -> 'pei.jpg' ,
              "mensagem" => 'Ola  '. $NOME. ' ,  sabemos que seu animal preferido é o peixe '   
            );
        
        }

} 

echo json_encode($DADOS);