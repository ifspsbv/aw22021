$( document ).ready(function() {
        fetch(`backend/verificacao.php`, {
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

const CadastrarCarteira = () =>{
    let nome = $("#nome").val()
    let descricao = $("#descricao").val()
    
    if(nome == ""){
        alert("Preencha o campo nome!")
        return
    }
    if(descricao == ""){
        alert("Preencha o campo descrição!")
        return
    }

    fetch(`backend/cadastrarcarteira.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `nome=${nome}&descricao=${descricao}`,
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

