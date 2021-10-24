const CadastrarPlanejamento = () =>{
    let planejameto = $("#planejamento").val()
    let descricaoplanejamento = $("#descricaoplanejamento").val()

    //alert(planejameto)
    //alert(descricaoplanejamento)

    if(planejameto == ""){
        alert("Preencha o campo planejamento!")
        return
    }
    if(descricaoplanejamento == ""){
        alert("Preencha o campo descriação!")
        return
    }

    fetch(`backend/cadastraplanejamento.php`, {
        credentials: 'same-origin',
        method: 'POST',
        body: `planejamento=${planejameto}&descricaoplanejamento=${descricaoplanejamento}`,
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }).then(function (response) {
        response.json().then(data => {
            if(data.RETORNO == "SUCESSO"){
                alert("Sucesso ao inserir")
                $("#form-planejamento")[0].reset()
            }else{
                alert("Erro ao inserir")
            }
     
    
    
        })
    }).catch(function (error) {
        SwalFire("error","Atenção","Sistema indisponivel no momento!")
     
    
    })
}