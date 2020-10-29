$("#email").mask("(00) 00000-0000")
$("#sendmail").click( function (){   
    let data = {};
    data.nome = document.getElementById('name').value;
    data.email = document.getElementById('email').value;
    data.texto = 'Usuário se cadastrou no site de contato da Madgic';

    $.ajax({
        url: '/email.php',
        method: 'POST',
        data: data,
        success:function (data) {
            console.log(data)
        }
    })

    swal('Enviado com sucesso','Aguarde nosso retorno','success');
})