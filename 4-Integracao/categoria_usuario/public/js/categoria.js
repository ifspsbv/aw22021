$( document ).ready(function() {
        fetch(`UsuarioECategoria\painel\verificacaoCat.php`, {
            credentials: 'same-origin',
            method: 'POST',
            body: ``,
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            }
        }).then(function (response) {
            response.json().then(data => {
                if(data.RETORNO == "ERRO"){

                }else{
                    $("#botao").attr('disabled',true)
                }
            
        
        
            })
        }).catch(function (error) {
            alert("Erro ao conectar")
        
        })
});

const CadastrarCategoria = () =>{
    // alert("teste")
    let nome = $("#nome").val()
    // alert(nome)
    let email = $("#descricao").val()
    // alert(descricao)
    
    if(nome == ""){
        alert("Preencha o campo nome!")
        return
    }
    if(email == ""){
        alert("Preencha o campo descrição!")
        return
    }

    fetch(`UsuarioECategoria\painel\cadastrarCategoria.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `nome=${nome}&email=${email}&senha=${senha}&data=${data}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }).then(function (response) {
        response.json().then(data => {
            if(data.RETORNO == "SUCESSO"){
                alert(data.MENSAGEM)
                document.location.reload(true)
                $("#form-carteira")[0].reset()
            }else{
                alert("Erro ao inserir")
            }
     
    
    
        })
    }).catch(function (error) {
        alert("Erro ao conectar")
    
    })
}