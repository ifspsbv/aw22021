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
                    $("#nome").attr('disabled',true)
                    $("#descricao").attr('disabled',true)
                }        
            })
        }).catch(function (error) {
            Swal.fire({
                icon: 'error',
                title: "Erro ao conectar",
                text: "Falha na conexão"
                }).then(function(){
                    window.location.href = "index.html"
            })
        })
});

const CadastrarCarteira = () =>{
    let nome = $("#nome").val()
    let descricao = $("#descricao").val()
    
    if(nome == ""){
        Swal.fire({
            icon: 'warning',
            title: 'Atenção!',
            text: 'Campo "Nome" obrigatório!',
        })
        return
    }
    if(descricao == ""){
        Swal.fire({
            icon: 'warning',
            title: 'Atenção!',
            text: 'Campo "Descrição" obrigatório!',
        })
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
                Swal.fire({
                    icon: 'success',
                    title: "Sucesso ao cadastrar!",
                    text: data.MENSAGEM
                    }).then(function(){
                        window.location.href = "index.html"
                })                
                $("#form-carteira")[0].reset()
            }else{
                Swal.fire({
                    icon: 'error',
                    title: "Erro ao cadastrar!",
                    text: "Carteira não foi cadastrada!"
                    }).then(function(){
                        window.location.href = "index.html"
                })              
            }        
        })
    }).catch(function (error) {
        Swal.fire({
            icon: 'error',
            title: "Erro ao conectar",
            text: "Falha na conexão"
            }).then(function(){
                window.location.href = "index.html"
        })
    })
}