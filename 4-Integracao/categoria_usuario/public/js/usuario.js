$( document ).ready(function() {
        fetch(`public/verificacaoUsu.php`, {
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

const cadastrarUsuário = () =>{
    // alert("teste")
    let nome = $("#nome").val()
    // alert(nome)
    let email = $("#email").val()
    // alert(descricao)
    let senha = $("#senha").val()
    // alert(descricao)
    let data = $("#data").val()
    // alert(data)
    if(nome == ""){
        alert("Preencha o campo nome!")
        return
    }
    if(email == ""){
        alert("Preencha o campo email!")
        return
    }
    if(senha == ""){
        alert("Preencha o campo senha!")
        return
    }
    if(data == ""){
        alert("Preencha o campo data!")
        return
    }

    fetch(`...\UsuarioECategoria\painel\cadastrarUsuario.php`, {
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