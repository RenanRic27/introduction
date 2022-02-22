$(document).ready(function(){

    //Monitorar o clique em cima do botao btn-send

    $('.btn-send').click(function(e){
        e.preventDefault()

   
        //coletar as informaçoes digitadas / selecionadas no formulario 
        let dados = $('#form').serialize()

        $.ajax({

            type: 'POST' ,
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/retorno.php',
            success: function(){

            }

        })

    })
})